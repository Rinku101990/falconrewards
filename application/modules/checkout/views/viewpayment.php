<?php
    
    /*--- UAT Credentials & Url ---*/ 

    $outletRef   = "2688c131-45dc-48ef-9b88-4f8e44b1449d";                                                                   
    $apikey  = "OTZmMGEyODctYzlhMi00YjEwLWJlMmItZDU5MTE4YjYzZDNlOjQ1YTg5NjJmLTc2OWMtNDMwYy04OTdiLTcxN2Y2NzFjNzBmZQ=="; 
    
    $idServiceURL  = "https://identity-uat.ngenius-payments.com/auth/realms/ni/protocol/openid-connect/token";          
    $txnServiceURL = "https://api-gateway-uat.ngenius-payments.com/transactions/outlets/".$outletRef."/orders";

    /*--- Live Credentials & Url ---*/ 

    // $outletRef   = "9fe1eebb-b168-4da0-9e3c-fddc621e1dba";                                                                   
    // $apikey  = "MmMzZDE0NzUtNjg4MS00NTkxLWE3N2QtM2UzZDI2OGMwY2M5OjNjM2Q0MWYxLWY5NWItNDc1OC04YWYyLWVlODI0YTRmYjk0OA=="; 
    
    // $idServiceURL  = "https://identity.ngenius-payments.com/auth/realms/NetworkInternational/protocol/openid-connect/token";          
    // $txnServiceURL = "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outletRef."/orders";
    
    $tokenHeaders  = array("Authorization: Basic ".$apikey, "Content-Type: application/x-www-form-urlencoded");
    $tokenResponse = invokeCurlRequest("POST", $idServiceURL, $tokenHeaders, http_build_query(array('grant_type' => 'client_credentials')));
    $tokenResponse = json_decode($tokenResponse);
    
    //session_start(); // Start Session //
    $sessionTokenGenerated = $tokenResponse->access_token;
    
    // $_SESSION['token'] = $sessionTokenGenerated;
    $this->session->set_userdata('token',$sessionTokenGenerated);
        
    $access_token = $tokenResponse->access_token; // Generate Token Step - 1
    if(!empty($this->customer->usr_nationality)){
       $get_country =country($this->customer->usr_nationality);
    }else{$get_country ='NA';}
    
    // FORM :: Create Order Metadata // 
    $order = new StdClass();
    
    $order->action = "SALE";                    
    $order->amount->currencyCode = "AED";       
    $order->amount->value = $total_amount;             
    $order->emailAddress = $this->customer->usr_email;
    $order->merchantOrderReference=$reference;
    $order->billingAddress->firstName = $this->customer->usr_fname;
    $order->billingAddress->lastName = $this->customer->usr_lname;
    $order->billingAddress->address1 = 'NA';
    $order->billingAddress->city = 'NA';
    $order->billingAddress->countryCode = $get_country;
    $order->language = "en";                    
    $order->merchantOrderReference = time();    
    //$order->merchantAttributes->redirectUrl = "https://falconrewards.com/thankyou/response"; // UAT Thank You URL
    $order->merchantAttributes->redirectUrl = base_url('thankyou/response');  //Live Thank You URL   
    $order = json_encode($order);  
    
    //print_r($order);die;
    
    $orderCreateHeaders  = array("Authorization: Bearer ".$access_token, "Content-Type: application/vnd.ni-payment.v2+json", "Accept: application/vnd.ni-payment.v2+json");
    $orderCreateResponse = invokeCurlRequest("POST", $txnServiceURL, $orderCreateHeaders, $order);
    
    $orderCreateResponse = json_decode($orderCreateResponse);
    $paymentLink           = $orderCreateResponse->_links->payment->href;     
    $orderReference      = $orderCreateResponse->reference;              
    
    header("Location: ".$paymentLink);  // execute redirect
    
    // Function For generate Payment URL //
    function invokeCurlRequest($type, $url, $headers, $post) {
    
        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     
    
        if ($type == "POST") {
    
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    
        }
    
        $server_output = curl_exec ($ch);
        // print_r($server_output);
        // exit();
        curl_close ($ch);
    
        return $server_output;
    
    }
    

?>