<?php $__env->startSection('title'); ?> Gainloe <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<style>
    
    @media (min-width: 768px)
    {
           #cartindesktopmode
        {
            display: block;
        }
        #cartinmobilemode
        {
            display:none;
        }
    }
        
    @media (max-width: 768px)
    {
           #cartindesktopmode
        {
            display: none;
        }
        #cartinmobilemode
        {
            display:block;
        }
    }
    </style>
    
<div  class="px-5 py-2" style="background:#1CD5E8;margin-top:5px;" >
      <h5 class="my-2">  <a href="/" class="black-text">Home></a> <strong class="black-text"> <a href="" class="white-text" >Cart </a> </strong> </h5>
               
</div>
    
 
           <!-- Cart Section Starts Here-->
                            <section id="cartindesktopmode">
                                    <?php echo $__env->make('components.cartindesktopmode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </section>
     
      <section id="cartinmobilemode">
                                    <?php echo $__env->make('components.cartinmobilemode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </section>
     
                                <!-- Cart Section Ends Here-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/Product-Order-Screens/Cart.blade.php ENDPATH**/ ?>