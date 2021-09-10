<input type="hidden" id="site_url" name="site_url" value="<?php echo site_url();?>">
<input type="hidden" id="current_url" name="current_url" value="<?php  echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
<!-- Footer opened -->
    <footer class="footer-main">
        <div class="container">
            <div class="  mt-2 mb-2 text-center"> <?php echo $this->website->web_copy_right; ?> </div>
        </div>
    </footer>
<!-- Footer closed -->

<!-- Back-to-top --><a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
<!-- Jquery-scripts -->
  
    <script src="<?=base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
 
    <script src="<?=base_url();?>assets/plugins/moment/moment.min.js"></script>
   
    <script src="<?=base_url();?>assets/js/vendors/bootstrap.bundle.min.js"></script>
 
    <script src="<?=base_url();?>assets/js/vendors/jquery.sparkline.min.js"></script>
    
    <script src="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
   
    <script src="<?=base_url();?>assets/js/vendors/circle-progress.min.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/rating/jquery.rating-stars.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/clipboard/clipboard.min.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/clipboard/clipboard.js"></script>

    <script src="<?=base_url();?>assets/plugins/prism/prism.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/jquery-nice-select/js/jquery.nice-select.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/jquery-nice-select/js/nice-select.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/p-scroll/p-scroll.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/p-scroll/p-scroll-leftmenu.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/sidemenu/sidemenu.js"></script>
	
  
    <script src="<?=base_url();?>assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js"></script>
	<script src="<?=base_url();?>assets/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/datatable/datatable.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/jqvmap/jquery.vmap.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/jqvmap/jquery.vmap.sampledata.js"></script>

    <script src="<?=base_url();?>assets/js/apexcharts.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/chart/chart.min.js"></script>

    <script src="<?=base_url();?>assets/js/index.js"></script>

    <script src="<?=base_url();?>assets/js/index-map.js"></script>
    
    <script src="<?=base_url();?>assets/js/left-menu.js"></script>
 
    <script src="<?=base_url();?>assets/switcher/js/switcher.js"></script>
 
    <script src="<?=base_url();?>assets/plugins/sidebar/sidebar.js"></script>
    
    <script src="<?=base_url();?>assets/js/custom.js"></script>
	<script src="<?=base_url();?>assets/plugins/summernote/summernote-bs4.js"></script><script src="<?=base_url();?>assets/plugins/summernote/summernote.js"></script>
	 <script src="<?=base_url();?>assets/js/custom_query.js"></script>
        <script src="<?=base_url();?>assets/js/product.js"></script>
        <script src="<?=base_url();?>assets/plugins/date-picker/bootstrap-datepicker.min.js"></script>
   
        <!-- validation -->
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="<?=base_url();?>assets/js/customvalidation.js"></script>
    <script src="<?=base_url();?>../admin/assets/plugins/date-picker/bootstrap-datepicker.min.js"></script>
    <script src="https://rawgit.com/select2/select2/master/dist/js/select2.js"></script>
<script>
$(document).ready(function() {
$('.select2').select2({
placeholder: 'Select your Serach'
});
});
</script>
    <script type='text/javascript'>
$(function(){
$('.input-group.date').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});

</script>

<script type="text/javascript">
$(document).ready(function(){
        
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="file" name="images[]" class="col-sm-8 col-md-8" onchange="preview_image'+x+'();" accept="image/x-png,image/gif,image/jpg,image/jpeg," style="display: inline-block;" /><span id="image_preview" class="col-sm-2 col-md-2" style="display: inline-block;"></span><a href="javascript:void(0);" class="remove_button col-sm-2 col-md-2" ><i class="fa fa-minus"></i></a></div>'; 
    //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append('<div><input type="file" name="images[]" class="form-control col-sm-8 col-md-8" onchange="get_preview_image('+x+');" id="image_file'+x+'" accept="image/x-png,image/gif,image/jpg,image/jpeg," style="display: inline-block;" /><span id="image_preview'+x+'" class="col-sm-2 col-md-2" style="display: inline-block;"></span><a href="javascript:void(0);" class="remove_button col-sm-2 col-md-2" ><i class="fa fa-minus"></i></a></div>'); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
   

});

      function slug_url(get,id){
            var  data=$.trim(get);
            var string = data.replace(/[^A-Z0-9]/ig, '-')
                            .replace(/\s+/g, '-') // collapse whitespace and replace by -
                            .replace(/-+/g, '-'); // collapse dashes;
            var finalvalue=string.toLowerCase();
            document.getElementById(id).value=finalvalue;
        }

 
</script>
    
</body>

</html>




