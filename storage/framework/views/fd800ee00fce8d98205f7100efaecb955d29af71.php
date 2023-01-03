<?php $__env->startSection('title'); ?> Gainloe <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 
<div align="left" class="px-5 py-2" style="background:#1CD5E8;margin-top:5px; ">
 
<p class="my-2 "  style="font-weight:bold; "><a href="<?php echo e(url('/')); ?>" class="black-text">Home </a>/ <?php echo e($Product->name); ?> </p>
 

</div>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/xzoom.css')); ?>">
<script src="<?php echo e(asset('assets/js/srcforimagezoomingeffects.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/xzoom.min.js')); ?>"></script>




<script>
    $(document).ready(function() {
        $("#main_image, .xzoom-gallery").xzoom({fadeIn:true;fadeOut:true;position:inside;});

    });
</script> 
<style>

    .checked {
      color: orange;
    }
    </style>
<div class="container py-5">
    
  <div class="product_data px-3 py-5  "  >

      <div class="row  d-flex align-items-center ">
          <div class="col-md-4  animated fadeInRight fast" style="width: 100%;">
                  <!-- Main image, on which xzoom will be applied -->
                  <img class="xzoom img-fluid" id="main_image"  src="<?php echo e(asset('Uploads/Products/'.$Product->image1)); ?>" xoriginal="<?php echo e(asset('Uploads/Products/'.$Product->image1)); ?>" style="width:70%">
                  <!-- Thumbnails -->
                  <br>       <br>
                  <?php if($Product->image2 == '' && $Product->image3 == '' && $Product->image4 == ''): ?>
                  <?php else: ?>
                  <a href="<?php echo e(asset('Uploads/Products/'.$Product->image1)); ?>">
                      <img class="xzoom-gallery" width="80" src="<?php echo e(asset('Uploads/Products/'.$Product->image1)); ?>">
                  </a>
                   <?php endif; ?>
                  <?php if($Product->image2 == ''): ?>
                  <?php else: ?>
                  <a href="<?php echo e(asset('Uploads/Products/'.$Product->image2)); ?>">
                      <img class="xzoom-gallery" width="80" src="<?php echo e(asset('Uploads/Products/'.$Product->image2)); ?>" xpreview="<?php echo e(asset('Uploads/Products/'.$Product->image2)); ?>">
                  </a>
                  <?php endif; ?>
                  
                    <?php if($Product->image3 == ''): ?>
                  <?php else: ?>
                          <a href="<?php echo e(asset('Uploads/Products/'.$Product->image3)); ?>">
                              <img class="xzoom-gallery" width="80" src="<?php echo e(asset('Uploads/Products/'.$Product->image3)); ?>">
                          </a>
                    <?php endif; ?>
                    <?php if($Product->image3 == ''): ?>
                    <?php else: ?>
                          <a href="<?php echo e(asset('Uploads/Products/'.$Product->image4)); ?>">
                              <img class="xzoom-gallery" width="80" src="<?php echo e(asset('Uploads/Products/'.$Product->image4)); ?>">
                          </a>
                  <?php endif; ?>
          </div>


                      <div id="product_data" class="col-md-7 animated fadeInLeft fast">
                          <?php echo csrf_field(); ?>

                              <h3 style="font-weight:bold;"><?php echo e($Product->name); ?></h3>
                          <?php if($Product->rating==1): ?>
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          <?php elseif($Product->rating==2): ?>
                          <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            <?php elseif($Product->rating==3): ?>
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          
                            <?php elseif($Product->rating==4): ?>
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                          
                            <?php else: ?>
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                            <?php endif; ?>
                          
                          
                            
                              <p><?php echo e($Product->description); ?></p>
                              

                                <input type="hidden"   name="product_id"   min=0 value="<?php echo e($Product->id); ?>" required class="form-control product_id">
                                   <p> Price : <strong style="font-size:20px;font-family: 'Balsamiq Sans', cursive;"><?php echo e($Product->price); ?> đ</strong></p>
                                      <?php echo $Product->additional_info;?>
                                <div class="col-md-6" style="margin-left:-20px;">  
                                  <input type="number" class="form-control quantity" name="quantity" placeholder="Quantity">
                                </div>
                              <div class="col-md-12 my-3"  id="changethebuttons">


                                      <button class="btaobtn btaobtn-primary px-2 py-2 book-now-btn" >Book Now</button>
                                      <button   class="btaobtn btaobtn-light px-2 py-2 add-to-cart-btn">Add to Cart </button>
                                    <div id="showloading"> </div>
                                      <div align="left" class="alert alert-danger" id="msg_diverr2" style="display: none;">
                                          <span id="triggererrors"></span>
                                      </div>
                              </div>

                            </div>


      </div>
  </div>
</div>
<hr>

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/Product-Order-Screens/Product_Page.blade.php ENDPATH**/ ?>