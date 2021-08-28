// code for 
$(document).ready(function(){

	/* Sign up Onclick enent */
	$(".SignUpCustomerBtn").click(function(){

		let url 	= $("#site_url").val();
		let ptype 	= $("input[name='customerAgree']").is(":checked");
        let check   = true;
        let tcheck  = true;
        let mcheck  = true;
        let echeck  = true;
        let Pcheck  = false;
        var successMsg = "Thank you for registering with us. We have sent you a confirmation email";
        var timer = 4000;

	   /* Validate fname Input Fields Value */
		if($.trim($('.fname').val()) === "" || $.trim($('.fname').val())=== null){
			$('.fname').css('border','1px solid red');
			$('#fname').html('<span style="color:red;float:left;margin:5px 5px">This field is required.</span>'); 
			check=false;
		}else{ 
			$('#fname').html(' ');
			$('.fname').css('border','');
			check = true;
		}
		
		if($.trim($('.lname').val())=== "" || $.trim($('.lname').val())===null){
			$('.lname').css('border','1px solid red');
			$('#lname').html('<span style="color:red;float:left;margin:5px 5px">This field is required.</span>'); 
			check=false;
		}else{ 
			$('#lname').html(' ');$('.lname').css('border','');
			check = true;
		}
        
		if($.trim($('.email').val())=== ""){ 
			$('.email').css('border','1px solid red');
			$('#email').html('<span style="color:red;float:left;margin:5px 5px">This field is required.</span>'); 
			check=false;
		}else{ 
			$('#email').html(' ');
			$('.email').css('border',''); 
			check = true;
        	
        	let email = $('.email').val();
            let filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;         
            if(filter.test(email)) scheck=true;
            else{ 
				$('#email').html('<span style="color:red;float:left;margin:5px 5px">Email type mismatched.</span>'); 
				scheck=false; $('#email').focus(); 
			}
		}
		 
		/* Validate phone Input Fields Value */
		if($('.phone').val().length === 0  || $('.phone').val() === 0){ 
			$('.phone').css('border','1px solid red');
			$('#phone').html('<span style="color:red;float:left;margin:5px 5px">This field is required.</span>');
			check=false;
		}else if($('.phone').val().length < 6) {  
			$('#phone').html('<span style="color:red;float:left;margin:5px 5px">Enter Mobile number.</span>');
			$('.phone').css('border',''); check = false; 
		}else{ 
			$('#phone').html(' ');$('.phone').css('border',''); 
			check = true;            
        }

       
		/* Validate Password Input Fields Value */
		let Password = $('.password').val();
		let RePassword = $('.crfpassword').val();
		
		if(Password.length < 6){ 
		    $('.password').css('border','1px solid red');
		    $('#password').html('<span style="color:red;float:left;margin:5px 5px">Password should be minimum 6 Characters.</span>');
		    check=false; 
		    
		}
		else{ 
		    $('.password').css('border',''); 
		    $('#password').html('');
		}
		
		if(RePassword.length < 6){ 
		    $('.crfpassword').css('border','1px solid red');
		    $('#crfpassword').html('<span style="color:red;float:left;margin:5px 5px">Confirm password should be minimum 6 Characters.</span>'); 
		    check=false; }
		else{ 
		    $('.crfpassword').css('border','');
		    $('#crfpassword').html('');}

		if(Password == RePassword) Pcheck = true;
		else Pcheck = false;


		if(check && scheck){
		    if(Pcheck){
		        //alert("ok");
				$.ajax({	
					type:"POST",
					url:url+"register/signupCustomer",
					data:$('#RegisterForm').serialize(),	
					beforeSend: function ()
					{
						$('.SignUpCustomerBtn').html('Processing...');
						$('.SignUpCustomerBtn').prop('disabled', true);
					},
					success: function(response)
					{	
						if(response=='Failed'){
						    $(".RegisterCustomerResponse").html('<span class="text-danger" style="font-size:16px"><strong>Oops!</strong> Unable to registration.</span>');
							setTimeout(function(){
                                $(".RegisterCustomerResponse").show(0).delay(3000).hide(0);
                            }, 3000);
							$(".SignUpCustomerBtn").html('Retry');
							$('.SignUpCustomerBtn').prop('disabled', false);
						}else if(response=='Used'){
							$(".RegisterCustomerResponse").html('<span class="text-danger" style="font-size:16px"><strong>Oops!</strong> Email address already in use.</span>');
						    setTimeout(function(){
                                //$(".RegisterCustomerResponse").hide("3000")
                                $(".RegisterCustomerResponse").show(0).delay(3000).hide(0);
                            }, 1000);
							$(".SignUpCustomerBtn").html('Retry');
							$('.SignUpCustomerBtn').prop('disabled', false);
						}else{	
						    $("#RegisterForm")[0].reset();
							$('.SignUpCustomerBtn').html('Register Now');
							$('.SignUpCustomerBtn').prop('disabled', false);
							//$(".RegisterCustomerResponse").html('<span class="text-success" style="font-size:16px">Thank you for registering with us. We have sent you a confirmation email</span>');
				// 			window.setTimeout(function() {
				// 				window.location.href = url;
				// 			}, 3000);
                            swal({
                              title: "Success!",
                              text: "Thank you for registering with us. We have sent you a confirmation email",
                              type: "success",
                              timer: 3000
                            },function(){
                              window.location.href = url;
                            });
                           // setTimeout(function () { swal.close(); }, timer);
						}
					}
				});
		    }else{
		        $('#crfpassword').html('<span style="color:red;float:left;margin:5px 5px">Password Mismatched.</span>');
		    }
        }else{
            $(".SignUpCustomerBtn").html('Retry');
		}
	});

	/* Sign in Onclick enent */
	$(".SignIn_btn").click(function()
	{
        let url 		= $('#site_url').val();
        let current_url = $('#current_url').val();
        let check 		= true;
        let Pcheck 		= true; 		
		/* Validate email Input Fields Value */
		if($('.cust_email').val().length == 0 || $('.cust_email').val() == 0){ 
			$('.cust_email').css('border','1px solid red');
			$('#cust_email').html('<span style="color:red;float:left;margin:5px 5px">This field is required.</span>');
			check=false; 
		}else{ 
			$('#cust_email').html(' ');$('.cust_email').css('border',''); 
			check = true;
        	let email = $('.cust_email').val();
            let filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;         
			if(filter.test(email)) 
			Pcheck=true;
            else{ 
				$('#cust_email').html('<span style="color:red;float:left;margin:5px 5px">Email type Mismatched.</span>'); 
				Pcheck=false; $('#email').focus(); 
			} 	
		}
		/* Validate Password Input Fields Value */
		if($('.cust_password').val().length == 0){ 
			$('.cust_password').css('border','1px solid red');
			$('#cust_password').html('<span style="color:red;float:left;margin:5px 5px">This field is required.</span>'); 
			check=false; 
		}else{ 
			$('#cust_password').html(' ');$('.cust_password').css('border','');
			check = true; 
		}

		if(check && Pcheck){
            $.ajax({	
				type: "POST",
				url: url+"login/check",
				data:$('#SigninForm').serialize(),
				// dataType:'json',				
				beforeSend: function ()
				{
					$('.SignIn_btn').html('Checking...');
					$('.SignIn_btn').prop('disabled', true);
				},
				success: function(response)
				{
					if(response == 'Failed'){
					    $(".loginResponse").html('<span class="text-danger" style="font-size:16px"><strong>Oops!</strong> Invalid email Id and Password.</span>');
                        $(".SignIn_btn").html('Retry');
                        $('.SignIn_btn').prop('disabled', false);                      
					}else if(response == 'Active'){
					    $(".loginResponse").html('<span class="text-danger" style="font-size:16px"><strong>Pending!</strong> Verify your email id.</span>');
                        $(".SignIn_btn").html('Retry');
                        $('.SignIn_btn').prop('disabled', false);
					}else{					
						$(".SignIn_btn").html('Sign In..');
                       	$('.SignIn_btn').prop('disabled', false);	
					    $(".loginResponse").html('<span class="text-success" style="font-size:16px"><strong>Success!</strong> redirecting..</span>');
					    window.location.href = current_url;
                    }
				}
			});
        }
        else
		{
            $(".SignIn_btn").html('Retry');          
           // $('#SigninResponse').html('<span style="color:red;">(Any of the fields are empty.)</span>');
		}	
	});
	/* End Sign In */
	
		/* Account Verified in Onclick enent */
  $(".Accont_btn").click(function()
  {
         let url 		= $('#site_url').val();     
         let check    = true;
        let Pcheck    = true; 
    /* Validate email Input Fields Value */
     if($('.cust_email').val().length == 0 || $('.cust_email').val() == 0){ $('.cust_email').css('border','1px solid red');
         $('#cust_email').html('<span style="color:red;">This field is required.</span>'); check=false; }
        else{ $('#cust_email').html(' ');$('.cust_email').css('border',''); check = true;
          let email = $('.cust_email').val();
            let filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;         
            if(filter.test(email)) Pcheck=true;
            else{ $('#cust_email').html('<span style="color:red;">Email type Mismatched.</span>'); Pcheck=false; $('#for_email').focus(); 
        } }

    if(check && Pcheck){
            $.ajax(
      { 
        type: "POST",
        url: url+"login/send",
        data:$('#AccountForm').serialize(),
        // dataType:'json',       
        beforeSend: function ()
        {
          $('.Accont_btn').html('Checking...');
          $('.Accont_btn').prop('disabled', true);
        },
        success: function(response)
        {
          
          if(response == 'Failed'){
             $("#AccountResponse").html('<div class="alert alert-danger alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-slash "></i></span> <span class="alert-inner--text"><strong>Oops!</strong> Unable to Email Verified .Some error occurred.</span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>');
                       $(".Accont_btn").html('Retry');
                       $('.Accont_btn').prop('disabled', false);                      
          }else if(response == 'Wrong'){
             $("#AccountResponse").html('<div class="alert alert-danger alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-slash "></i></span> <span class="alert-inner--text"><strong>Danger !</strong> Email address Invalid !.</span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>');
                       $(".Accont_btn").html('Retry');
                       $('.Accont_btn').prop('disabled', false);
          }else{          
          $(".Accont_btn").html('Sent..');
                       $('.Accont_btn').prop('disabled', false);  
              $("#AccountResponse").html('<div class="alert alert-success alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-thumbs-up "></i></span> <span class="alert-inner--text"><strong>Success !</strong> Thank you for again mail. We have sent you a confirmation email</span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>');
             
                      }
          
          
        }
      });
        }
        else
    {
            $(".Accont_btn").html('Retry');          
          //  $('#ForgotResponse').html('<span style="color:red;">(Any of the fields are empty.)</span>');
    } 
    
  });
    /* End Account Verified */
	
	/* Forgot_Password in Onclick enent */
  $(".Forgot_btn").click(function()
  {
         let url 		= $('#site_url').val();     
         let check    = true;
        let Pcheck    = true; 
    /* Validate email Input Fields Value */
     if($('.cust_email').val().length == 0 || $('.cust_email').val() == 0){ $('.cust_email').css('border','1px solid red');
         $('#cust_email').html('<span style="color:red;">This field is required.</span>'); check=false; }
        else{ $('#cust_email').html(' ');$('.cust_email').css('border',''); check = true;
          let email = $('.cust_email').val();
            let filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;         
            if(filter.test(email)) Pcheck=true;
            else{ $('#cust_email').html('<span style="color:red;">Email type Mismatched.</span>'); Pcheck=false; $('#for_email').focus(); 
        } }

    if(check && Pcheck){
            $.ajax(
      { 
        type: "POST",
        url: url+"login/forgot_password",
        data:$('#ForgotForm').serialize(),
        // dataType:'json',       
        beforeSend: function ()
        {
          $('.Forgot_btn').html('Checking...');
          $('.Forgot_btn').prop('disabled', true);
        },
        success: function(response)
        {
          
          if(response == 'Failed'){
             $("#ForgotResponse").html('<div class="alert alert-danger alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-slash "></i></span> <span class="alert-inner--text"><strong>Oops!</strong> Unable to Change Password.Some error occurred.</span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>');
                       $(".Forgot_btn").html('Retry');
                       $('.Forgot_btn').prop('disabled', false);                      
          }else if(response == 'Wrong'){
             $("#ForgotResponse").html('<div class="alert alert-danger alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-slash "></i></span> <span class="alert-inner--text"><strong>Danger !</strong> Email address Invalid !.</span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>');
                       $(".Forgot_btn").html('Retry');
                       $('.Forgot_btn').prop('disabled', false);
          }else{          
          $(".Forgot_btn").html('Sent..');
                       $('.Forgot_btn').prop('disabled', false);  
              $("#ForgotResponse").html('<div class="alert alert-success alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-thumbs-up "></i></span> <span class="alert-inner--text"><strong>Success !</strong> Your password has been successfully reset. Check Your Email Id...</span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>');
             
                      }
          
          
        }
      });
        }
        else
    {
            $(".Forgot_btn").html('Retry');          
          //  $('#ForgotResponse').html('<span style="color:red;">(Any of the fields are empty.)</span>');
    } 
    
  });
    /* End Forgot_Password */
	
	/* Change_Password in Onclick enent */
	$(".Change_Password").click(function()
	{
        let url 		= $('#site_url').val();
        let current_url = $('#current_url').val();
        let check 		= true;
        let Pcheck 		= true; 
		/* Validate old_password Input Fields Value */
		if($('.old_password').val().length == 0 ){ $('.old_password').css('border','1px solid red');
        check=false; }
        else{ $('.old_password').css('border',''); check = true; }              
        /* Validate new_password Input Fields Value */
        if($('.new_password').val().length == 0){ $('.new_password').css('border','1px solid red');
         check=false; }
        else{ $('.new_password').css('border',''); check = true; }	
		
            /* Validate Confirm  Password Input Fields Value */
        if($('.password2').val().length == 0){ $('.password2').css('border','1px solid red');
         	$('#password2').html('<span style="color:red;float:left;margin:5px 5px">This field is required.</span>'); check=false; }
        else{ $('#password2').html(' ');$('.password2').css('border',''); check = true;
          	let NewPassword 	= $('.new_password').val();
			let ReNewPassword 	= $('.password2').val();            
			if(NewPassword == ReNewPassword){ Pcheck = true;}
			else{ $('#password2').html('<span style="color:red;float:left;margin:5px 5px">Enter new password same as confirm password .</span>'); Pcheck = false; $('#PasswordResponse1').focus();} }    

		if(check && Pcheck){
            $.ajax({	
				type: "POST",
				url: url+"account/password",
				data:$('#PasswordForm').serialize(),
				// dataType:'json',				
				beforeSend: function ()
				{
					$('.Change_Password').html('Checking...');
					$('.Change_Password').prop('disabled', true);
				},
				success: function(response)
				{
					if(response == 'Failed'){
					    $("#PasswordResponse").html('<span class="text-danger" style="font-size:16px"><strong>Oops!</strong> Unable to change password.some error occurred.</span>');
                        $(".Change_Password").html('Retry');
                        $('.Change_Password').prop('disabled', false);                      
					}else if(response == 'NotMach'){
					    $("#PasswordResponse").html('<span class="text-danger" style="font-size:16px"><strong>Oops!</strong> Old Password doesn`t match Password.</span>');
                        $(".Change_Password").html('Retry');
                        $('.Change_Password').prop('disabled', false);
					}else{					
					$(".Change_Password").html('Changed..');
                        $('.Change_Password').prop('disabled', false);	
					    $("#PasswordResponse").html('<span class="text-success" style="font-size:16px"><strong>Success!</strong> Password change successfully.</span> ');
                        window.location.href = current_url;
                    }
				}
			});
        }
        else
		{
            $(".Change_Password").html('Retry');          
            $('#PasswordResponse').html('<span style="color:red">(Any of the fields are empty.)</span>');
		}	
		
	});
	/* End Change_Password */
	 
	// GET COUNTRY CODE //
    $(".residence").on("change", function(){
		let url = $('#site_url').val();
		let countries_id = $(this).val();
        $.ajax({
            method:"POST",
            url:url+"account/get_country_code",
            data:{countries_id:countries_id},
            dataType:"json",
            success:function(data){
                $("#phonecode").val(data.country_code.sortname+'-'+data.country_code.phonecode);
            }
        });
    });
    
    /*--- Change Forgot Password Text on keyup ---*/
    $(".forgotEmailButton").keyup(function(){
       var forgotEmailBox = $(this).val();
       var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;         
       var sendButton = $(".Forgot_btn").text();
       if(filter.test(forgotEmailBox)){
           $(".Forgot_btn").text('Sent');
       }else{
           $(".Forgot_btn").text('Send');
       }
    });

});


/* Search data in Onclick enent */
	function ajaxSearch() {

    var input_data = $('#mysearch').val();
    var url         =  $('#site_url').val();;     
    if (input_data.length < 3)
    {
        $('#search_data').hide();
    }
    else
    {
        $.ajax({
            type: "POST",
            url: url+"home/search_data/",
            data:{'search':input_data},
            success: function (data) {
                // return success
                if (data.length > 0) {                  
                    $('#search_data').show();
                    $('#autoSuggestionsList').addClass('auto_list');
                    $('#autoSuggestionsList').html(data);
                }
            }
         });

     }
	 }

function inc(rowid,e){	
    let qty 		= $('.avail_qty'+rowid).val();
    let price 		= $('.item_price'+rowid).val();
	let url 		=  $("#site_url").val();
	let get_total 	= $('#get_total').html();
	let product 	= $('.total_product').html();
	let products    = parseInt(product)+1;
	let ticket 	    = $('.total_tickets').html();
    //let tickets     = parseInt(products)+parseInt(products);
	let qtys        = parseInt(qty)+1;
	let sub_total   = parseInt(qtys)*parseInt(price);
	let GetTotal    = parseInt(get_total)+parseInt(price);
	let tickets     = parseInt(qtys)*2;
	let rowid2="'"+rowid+"'";
	$.ajax({
		type:"post",
	    url: url+"cart/cart_add",
	    data:{'rowid':rowid,'qty':qty},
		dataType: 'json',
		beforeSend: function ()
		{ 
		    $('#inc'+rowid).html('<img src="assets/img/loader.gif" style="width:50px">');
			$('.avail_qty'+rowid).val(qtys);
		},
		success:function(data){
		    $('#inc'+rowid).html('<button class="plus-btn icon-plus" type="button" name="button" onclick="inc('+rowid2+',this)" style="padding: 11px 10px; border: none;background: #FAFAFA;"><i class="fa fa-plus" style=" background: transparent;font-size: 16px; color: #4a4a4a;"></i></button>');
			//console.log(data);
			$('.avail_qty'+rowid).val(qtys);
			$('#sub_total'+rowid).html(parseFloat(sub_total)+'.00');
			$('.total_product').html(products);
			$('.total_tickets').html(parseInt(ticket)+2);
			$('#get_total').html(parseFloat(GetTotal)+'.00');
			$('.tickets'+rowid).html('<i class="fa fa-ticket blue d" aria-hidden="true"></i>');
			$('.ticket_count'+rowid).html(tickets);
			$('.ticket_count'+rowid).attr('data-itemcount',tickets);
			if(tickets > '1'){
              $('.ticket_name').html('Tickets Per Unit');
              $('.main_total_tickt').html('Total Tickets');
	        }else{
	           $('.ticket_name').html('Ticket Per Unit');
	            $('.main_total_tickt').html('Total Ticket');
	        }
			//$('#show_cart').html(data.show_cart);
			//$('#cart_details').html(data.cart);  
		}
	});
}

function dec(rowid,e){	
    let qty 		= $('.avail_qty'+rowid).val();
    let price 		= $('.item_price'+rowid).val();
	let url 		=  $("#site_url").val();
	let get_total 	= $('#get_total').html();
	let product 	= $('.total_product').html();
	let products    = parseInt(product)-1;
	let ticket 	    = $('.total_tickets').html();
    //let tickets     = parseInt(products)+parseInt(products);
	let qtys        = parseInt(qty)-1;
	let sub_total   = parseInt(qtys)*parseInt(price);
	let GetTotal    = parseInt(get_total)-parseInt(price);
	let tickets     = parseInt(qtys)*2;
	let rowid2="'"+rowid+"'";
	$.ajax({
		type:"post",
	    url: url+"cart/cart_minus",
	    data:{'rowid':rowid,'qty':qty},
		dataType: 'json',
		beforeSend: function ()
		{ 
		    $('#dec'+rowid).html('<img src="assets/img/loader.gif" style="width:50px">');
			$('.avail_qty'+rowid).val(qtys);
		},
		success:function(data){
			console.log(data);
			if(qtys=='0'){
			    window.location.href=url+'cart';
			}else{
			    $('#dec'+rowid).html('<button class="plus-btn icon-plus" type="button" name="button" onclick="dec('+rowid2+',this)" style="padding: 11px 10px; border: none;background: #FAFAFA;"><i class="fa fa-minus" style=" background: transparent;font-size: 16px; color: #4a4a4a;"></i></button>');
    			$('.avail_qty'+rowid).val(qtys);
    			$('#sub_total'+rowid).html(parseFloat(sub_total)+'.00');
    			$('.total_product').html(products);
    			$('.total_tickets').html(parseInt(ticket)-2);
    			$('#get_total').html(parseFloat(GetTotal)+'.00');
    			$('.tickets').html('<i class="fa fa-ticket blue d" aria-hidden="true"></i>');
    	    	$('.tickets'+rowid).html('<i class="fa fa-ticket blue d" aria-hidden="true"></i>');
    			$('.ticket_count'+rowid).html(tickets);
    			$('.ticket_count'+rowid).attr('data-itemcount',tickets);
    			if(tickets > '1'){
                    $('.ticket_name').html('Tickets Per Unit');
                    $('.main_total_tickt').html('Total Tickets');
    	        }else{
    	            $('.ticket_name').html('Ticket Per Unit');
    	            $('.main_total_tickt').html('Total Ticket');
    	        }
			}
		}
	});
}


window.setTimeout(function() {
	$(".alert").fadeTo(800, 0).slideUp(800, function(){
    	$(this).remove();
	});
}, 4000);


window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

/*--- Back To Top ---*/
var mybutton = document.getElementById("customFalconBackToTop");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	$('html, body').animate({scrollTop:0}, '300');
} 
/*--- End Of The Back To Top ---*/ 