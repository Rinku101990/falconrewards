 <link rel="stylesheet" href="<?=base_url('assets/css/all.css');?>" />
  <style type="text/css">
     
.loading-circle-container {
   border: 3px solid #111;
   margin: 78px auto auto auto;
    background: #f2f2f2;
    width: 193px;
    height: 190px;
    padding: 39px 4px;
    border-radius: 100%;
}
.loading-circle{
   padding: 5px 0;
}
.loading-circle svg{
        border: 2px solid #111;
   background: white;
    border-radius: 100%;
    padding: 7px;
}
.loading-circle .remaining .sold-label {
    letter-spacing: 0;
    margin-top: 1px;
    margin-bottom: 0px;
}.loading-circle .remaining .small-text{
   margin-bottom: 0px;

}
   </style>



   <!-- game-section start-->
<div class="reward-section" style="padding-bottom:40px">
      <div class="section_bg_gray">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-md-8">
                   
                  
                  <div class="single_what_we_do">
                     <div class="top_line"></div>
                     <div class="what_we_do_figure">
                        <img src="<?=base_url('admin/uploads/coming-soon-product/').$product->img;?>" alt="" class="img-responsive" >
                     </div>
                     <h4 class="what_we_do_title"><?=$product->name;?></h4>
                     <p align="justify"><?=$product->desc;?></p>
                  </div>
                  
               </div>
              
               <div class="col-sm-4 col-md-4">
                   <?php if($coming_product==true){
                       foreach($coming_product as $c_val){?>
                      <a class="" href="<?=base_url('product/').encode($c_val->id);?>">
                       
                  <div class="single_what_we_do" style="    margin-bottom: 10px;">
                     <div class="top_line"></div>
                     <div class="what_we_do_figure" style=" display: inline-flex; width: 100px;">
                        <img src="<?=base_url('admin/uploads/coming-soon-product/').$c_val->img;?>" alt="" class="img-responsive" >
                     </div>
                     <h4 class="what_we_do_title" style=" display: inline-block;vertical-align: text-bottom;    width: 190px;"><?=$c_val->name;?></h4>
                  </div>
                  </a>
                  <?php }}?>
               </div>
            </div>
         </div>
      </div>
   </div>