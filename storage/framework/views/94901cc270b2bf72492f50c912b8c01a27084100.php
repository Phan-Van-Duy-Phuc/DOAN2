<?php $__env->startSection('title'); ?> Gainloe -404 page <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 
 <style>
     
@media (min-width: 768px)
{ 
    .not_found_image
    {
        width:60%;
        margin-top:-10%;
    }
}
@media (max-width: 768px)
{ 
    .not_found_image
    {
        width:100%;
       
    }
}
 </style>
<div align="center"  style=" background-color:#DADADA;padding:10%;">
   
 
              <img src="<?php echo e(asset('public/Img/4004.png')); ?>"  class="not_found_image"   >
 
                <p>Sorry! Your Requested URL is not on the Server!! <br>If you have any queries Please Feel Free to <a href="<?php echo e(url('Contact')); ?>">ContactUS</a></p>
        
   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/errors/404.blade.php ENDPATH**/ ?>