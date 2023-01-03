<?php $__env->startSection('title'); ?> Gainloe <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 

<div class="px-5 py-2" style="background:#1CD5E8;margin-top:5px; ">
      

 <p class="my-2"> <span class="fas fa-bars fa-1x" style="font-size:20px;cursor:pointer;color:black;" onclick="openNav()"></span> <a href="/" class="black-text">Home></a><a href="<?php echo e(url('dashboard')); ?>" class="black-text">Dashboard></a> <strong class="black-text"> <a href="" class="black-text" >Payments </a> </strong> </p>
            
    
</div>

<div id="mySidenav" class="sidenav">
    <br><br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color:white;font-size:30px;margin-left:20px;margin-top:80px;">x</a>
  <a href="<?php echo e(url('dashboard')); ?>"> <i class="fas fa-tachometer-alt"></i>  Dashboard</a>
  <a href="<?php echo e(url('profile')); ?>" > <i class="fas fa-user"></i>   Profile</a>
  <a href="<?php echo e(url('Orders')); ?>"> <i class="fas fa-table"></i>  Orders</a>
  <a href="<?php echo e(url('Payments')); ?>"> <i class="fas fa-receipt"></i>  Payments</a>
     <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fas fa-sign-in-alt"></i> <?php echo e(__('Logout')); ?></a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   <!-- Payments Section Starts Here-->
   <section id="mytransactionsindesktopmode">

    <?php echo $__env->make('components.user.mytransactionsindesktopmode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
 <section id="mytransactionsinmobilemode">

    <?php echo $__env->make('components.user.mytransactionsinmobilemode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </section>

<!-- Payments Section Ends Here-->

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/dashboards/user/transactions.blade.php ENDPATH**/ ?>