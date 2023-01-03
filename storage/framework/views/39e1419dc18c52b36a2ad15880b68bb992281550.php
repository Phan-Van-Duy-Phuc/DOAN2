<?php $__env->startSection('title'); ?> Gainloe <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div align="center" style="background:#1CD5E8;padding:20px;">
  <h3  class="black-text" style="font-weight:bold;"><a href="<?php echo e(url('admin-dash')); ?>">Admin Dashboard</a></h3>
<p class="white-text" style="font-weight:bold;">Order Details </p>
<?php if(session('status')): ?>
  <div class="alert alert-danger" role="alert">
      <?php echo e(session('status')); ?>

  </div>
  <?php endif; ?>
  

</div>


<!-- Orders Section Starts Here-->
<div id="ordersindesktopmode">
    <?php echo $__env->make('components.admin.ordersindesktopmode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div id="ordersinmobilemode">
      <?php echo $__env->make('components.admin.ordersinmobilemode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

 <!-- Orders Section Ends Here-->
 <?php if(session('Order_Status')): ?>
    <?php echo $__env->make('components.admin.orderstatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(document).ready(function ()
        {
            $('#show_Order_Status_Modal').modal('show');
        });
    </script>
 <?php endif; ?>

  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/dashboards/admin/orders.blade.php ENDPATH**/ ?>