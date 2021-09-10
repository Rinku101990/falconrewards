$(document).ready(function(){

    /* add to cart in Onclick enent */
	$(".add_to_cart").click(function()
	{
        let url   = $('#site_url').val();
        let webLang  = $("#site_lang").val(); 
        let RefId = $(this).attr('RefId');   
        let qty   = $(this).parent().find('.avail_qty').val();  
        let price = $('.price').text();
        let check       = true;  
        let echeck      = true;  
        let mcheck      = true;         
        
        if(check && echeck && mcheck){
            $.ajax({
                type: "POST",
                url: url+"cart/cart_save",
                data:{'RefId':RefId,'price':price,'qty':qty},
                dataType: 'json',
                beforeSend: function (){ 
                    $('#add_to_cart'+RefId).html('<img src='+url+'assets/img/process.gif>');
                },			
			    success: function(data){           
                    //return success   
                    //$('.add_to_cart').prop('disabled', true);   
                    if(webLang==='en'){
                        $('#add_to_cart'+RefId).html('<a href="'+url+'cart">View Cart</a>');
                        showFrontendAlert('success', 'item added To cart');
                    }else if(webLang==='ar'){
                        $('#add_to_cart'+RefId).html('<a href="'+url+'cart">عرض عربة التسوق</a>');
                        showFrontendAlert('success', 'تم الإضافة في السلة');
                    }
                    $('#show_cart').html(data);
                }
            });	 
        }    
    });
    
    /*-- PAYMENT TIMER --*/
    
    let url = $("#site_url").val();
    let currentUrl = $("#current_url").val();
    let checkoutUrl = url+'checkout';
    if(currentUrl==checkoutUrl)
    {    
        var timer2 = "3:00";
        var interval = setInterval(function() {
            var timer = timer2.split(':');
            //by parsing integer, I avoid all extra string processing
            var minutes = parseInt(timer[0], 10);
            var seconds = parseInt(timer[1], 10);
            //--seconds;
            minutes = (seconds < 0) ? --minutes : minutes;
            seconds = (seconds < 0) ? 59 : seconds;
            seconds = (seconds < 10) ? '0' + seconds : seconds;
            //minutes = (minutes < 10) ?  minutes : minutes;
            $('.countdown').html(minutes + ':' + seconds);
            if(minutes < 0) clearInterval(interval);
            //check if both minutes and seconds are 0
            if((seconds <= 0) && (minutes <= 0)) clearInterval(interval);
            timer2 = minutes + ':' + seconds;
            if(timer2=='0:00'){
                $('#myTimeOutBox').modal({
                    backdrop: 'static'
                });
            }
        }, 1000);
    }else{
    }

    /*---- ONCLICK TO LOAD PAYMENT IN PROCESS  ----*/
    $(".btnPaymentInProcess").click(function(){
        let url = $("#site_url").val();
        let currentUrl = $("#current_url").val();
        let checkoutUrl = url+'checkout';
        if(currentUrl==checkoutUrl){
            $('#myLoadPaymentBox').modal({
                backdrop: 'static'
            });
            setTimeout(function() {
                window.location.href=url+'cart';
              }, 5000);
        }

    }); 

})