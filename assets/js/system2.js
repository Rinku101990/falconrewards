/* 
 * There are functions who needs to load in every template.
 * Shopping cart managing is here and etc.
 */

//Currency Set
$('#currencySelector').change(function () {
    var currency = $('#currencySelector').val();
    window.location = variable.SetCurrency+"/"+currency;
});
$('#donate').change(function () {
    var total_ticket = $('.total_tickets').html();
    var product 	= $('.total_product').html();
    //alert(total_ticket);
    if($('#donate').is(':checked')){
        var donate = 1;
        $('.tickets').html('<i class="fa fa-ticket blue d" aria-hidden="true"></i>');
        
        $(".ticket_count").each(function (i) {
            $(this).html(parseInt(total_ticket)+parseInt(product));
            var temp = parseInt($(this).html())*$(this).data('itemcount');
                //alert(temp);
            total_ticket = parseInt(total_ticket)+parseInt(product);
        });
        $('.total_tickets').html(total_ticket);
        if(total_ticket > '1'){
              $('.ticket_name').html('Tickets Per Unit');
               $('.main_total_tickt').html('Total Tickets');
        }else{
           $('.ticket_name').html('Ticket Per Unit');
            $('.main_total_tickt').html('Total Ticket');
        }
    } else{
        var donate = 0;
        $('.d').remove();
        $('.tickets').append('<i class="fa fa-ticket d" aria-hidden="true"></i>');
        
        $(".ticket_count").each(function (i) {
            $(this).html(parseInt(total_ticket)-parseInt(product));
            var temp = parseInt($(this).html())*$(this).data('itemcount');
                //alert(temp);
            total_ticket = parseInt(total_ticket)-parseInt(product);
        });
        $('.total_tickets').html(total_ticket);
         if(total_ticket > '1'){
              $('.ticket_name').html('Tickets Per Unit');
              $('.main_total_tickt').html('Total Tickets');
        }else{
           $('.ticket_name').html('Ticket Per Unit');
           $('.main_total_tickt').html('Total Ticket');
        }
        
    }
    $.ajax({
        url: variable.SetCartDonate,
        type: 'post',
        data: {
          'donate' : donate
        },
        success: function(response){
          
        }
      });

});
// Shopping Cart Manager
$('a.product-add-cart').click(function () {
    var qty = $(".quantity__no").val();
    if(qty=="")
    {
        qty =1;
    }
 
    var reload = false;
    var article_id = $(this).data('id');
    var goto_site = $(this).data('goto');
    if ($(this).hasClass('refresh-me')) {
        reload = true;
    } else if (goto_site != null) {
        reload = goto_site;
    }
    manageShoppingCart('add', article_id, reload,qty);
});
// Wislist Manager
$('a.link-wishlist,.product-wishlist').click(function () {
    var reload = false;
    var article_id = $(this).data('id');
    var goto_site = $(this).data('goto');
    if ($(this).hasClass('refresh-me')) {
        reload = true;
    } else if (goto_site != null) {
        reload = goto_site;
    }
    manageWishlist('add', article_id, reload);
});

//DatePicker
if (typeof datepicker !== 'undefined') {
    $('.input-group.date').datepicker({
        format: "dd/mm/yy"
    });
}

//Filters Technique
$('.go-category').click(function () {
    var category = $(this).data('categorie-id');
    var pre_cat = $(this).data('pre-categorie-id');
    $('[name="category"]').val(category);
    $('[name="pre_cat"]').val(pre_cat);
    submitForm();
});
$('.in-stock').click(function () {
    var in_stock = $(this).data('in-stock');
    $('[name="in_stock"]').val(in_stock);
    submitForm()
});
$(".order_by").change(function () {
    var order_type = $(this).val();
    var order_to = $(this).data('order-to');
    $('[name="' + order_to + '"]').val(order_type);
    submitForm();
});
$("#price_filter").click(function () {
    // var price_from = $("#price_from").val();
    // var price_to = $("#price_to").val();
    // $('[name="price_from"]').val(price_from);
    // $('[name="price_to"]').val(price_to);
    submitForm();
});
$('.brand').click(function () {
    var brand_id = $(this).data('brand-id');
    $('[name="brand_id"]').val(brand_id);
    submitForm()
});
$("#search_in_title").keyup(function () {
    $('[name="search_in_title"]').val($(this).val());
});
$('#clear-form').click(function () {
    $('#search_in_title, [name="search_in_title"]').val('');
    $('#bigger-search .form-control').each(function () {
        $(this).val('');
    });
    submitForm();
});
$('.clear-filter').click(function () { //clear filter in right col
    var type_clear = $(this).data('type-clear');
    $('[name="' + type_clear + '"]').val('');
    submitForm();
});
/*
 * Submit search form in home page
 */
function submitForm() {
    document.getElementById("bigger-search").submit();
}
/*
 * Discount code checker
 */
var is_discounted = false;
function checkDiscountCode() {
    var enteredCode = $('[name="discountCode"]').val();
    $.ajax({
        type: "POST",
        url: variable.discountCodeChecker,
        data: {enteredCode: enteredCode}
    }).done(function (data) {
        if (data == 0) {
            ShowNotificator('alert-danger', lang.discountCodeInvalid);
        } else {
            if (is_discounted == false) {
                var obj = jQuery.parseJSON(data);
                var final_amount_before = parseFloat($('.final-amount').text());
                var discountAmoun;
                if (obj.type == 'percent') {
                    var substract_num = (obj.amount / 100) * final_amount_before;
                    var final_amount = final_amount_before - substract_num;
                    discountAmoun = substract_num;
                }
                if (obj.type == 'float') {
                    var final_amount = final_amount_before - obj.amount;
                    discountAmoun = obj.amount;
                }
                $('#coupon_details').show();
                $('#discount_amount').html("₹"+discountAmoun);
                $('.final-amount').text(final_amount.toFixed(2));
                $('.final-amount').val(final_amount.toFixed(2));
                $('[name="discountAmount"]').val(discountAmoun);
                is_discounted = true;
            }
        }
    });
}

function removeProduct(id, reload) {
    manageShoppingCart('remove', id, reload);
}
function manageShoppingCart(action, article_id, reload, qty=1) {
    var action_error_msg = lang.error_to_cart;
    if (action == 'add') {
        $('.product-add-cart a[data-id="' + article_id + '"] span').hide();
        $('.product-add-cart a[data-id="' + article_id + '"] img').show();
        var action_success_msg = lang.added_to_cart;
    }
    if (action == 'remove') {
        var action_success_msg = lang.remove_from_cart;
    }
    $.ajax({
        type: "POST",
        url: variable.manageShoppingCartUrl,
        data: {article_id: article_id, action: action,qty:qty}
    }).done(function (data) {
        $(".dropdown-cart").empty();
        $(".dropdown-cart").append(data);
        var sum_items = parseInt($('.number-cart-total').text());
        if (action == 'add') {
            $('.number-cart-total').text(sum_items + qty);
        }
        if (action == 'remove') {
            $('.number-cart-total').text(sum_items - 1);
        }
        if (reload == true) {
            location.reload(false);
            return;
        } else if (typeof reload == 'string') {
            location.href = reload;
            return;
        }
        //ShowNotificator('alert-info', action_success_msg);
    }).fail(function (err) {
        ShowNotificator('alert-danger', action_error_msg);
    }).always(function () {
        if (action == 'add') {
            $('.product-add-cart a[data-id="' + article_id + '"] span').show();
            $('.product-add-cart a[data-id="' + article_id + '"] img').hide();
        }
    });
}
function manageWishlist(action, article_id, reload) {
    var action_error_msg = lang.error_to_cart;
    if (action == 'add') {
        var action_success_msg = lang.added_to_wishlist;
    }
    if (action == 'remove') {
        var action_success_msg = lang.remove_wishlist;
    }
    $.ajax({
        type: "POST",
        url: variable.manageWishlistUrl,
        data: {article_id: article_id, action: action}
    }).done(function (data) {
        if(data!=true){
            error_notifier('<b>Oops!</b> Please login first!');
        }else{
            success_notifier(action_success_msg);
        }
        
    });
}

function clearCart() {
    $.ajax({type: "POST", url: variable.clearShoppingCartUrl});
    $('ul.dropdown-cart').empty();
    $('ul.dropdown-cart').append('<li class="text-center">' + lang.no_products + '</li>');
    $('.number-cart-total').text(0);
    ShowNotificator('alert-info', lang.cleared_cart);
}

//Email Subscribe
function checkEmailField() {
    if ($('[name="subscribeEmail"]').val() == '') {
        ShowNotificator('alert-danger', lang.enter_valid_email);
        return;
    }
    document.getElementById("subscribeForm").submit();
}

//Email Subscribe
function checkEmailField() {
    if ($('[name="subscribeEmail"]').val() == '') {
        ShowNotificator('alert-danger', lang.enter_valid_email);
        return;
    }
    document.getElementById("subscribeForm").submit();
}

// Top Notificator
function ShowNotificator(add_class, the_text) {
    alert(the_text);
    $('div#notificator').text(the_text).addClass(add_class).slideDown('slow').delay(3000).slideUp('slow', function () {
        $(this).removeClass(add_class).empty();
    });
}