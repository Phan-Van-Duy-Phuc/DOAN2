<?php $__env->startSection('title'); ?> Gainloe <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div align="center" style="background:#1CD5E8;padding:20px;">
  <h3  class="black-text" style="font-weight:bold;"><a href="<?php echo e(url('admin-dash')); ?>">Admin Dashboard</a></h3>
  <a href="<?php echo e(url('admin-all-users')); ?>" class="btn btn-outline-dark" style="color:white">Back</a> 
<?php if(session('status')): ?>
  <div class="alert alert-danger" role="alert">
      <?php echo e(session('status')); ?>

  </div>
  <?php endif; ?>
  

</div>


 

<div class="container py-2">
   <p align="left">
    <i class="fas fa-edit"></i> Edit User Role
   </p>
     
    <!--Grid column-->
    <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">

        <!--Card content-->
        <div class="card-body">
            <h3>Current Role:<?php echo e($userroles->role); ?></h3>
        <form action="<?php echo e(url('admin/role-update/'.$userroles->id)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>


                <div class="form-group">
                <input type="text" class="form-control" name="name"  placeholder="User Name" readonly value="<?php echo e($userroles->name); ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" readonly value="<?php echo e($userroles->email); ?>">
                    </div>

                        <div class="form-group">
                            <select class="form-control" name="role">
                                <option value=""  disabled >Select--Role</option>
                                <option value="user">Default</option>
                                <option value="admin">Admin</option>
                            </select>
                            </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                         </div>

            </form>


        </div>

    </div>
    <!--/.Card-->

</div>
<!--Grid column-->

</div>
<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/dashboards/admin/edituserrole.blade.php ENDPATH**/ ?>