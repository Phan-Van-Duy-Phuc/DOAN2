<?php $__env->startSection('title'); ?> Gainloe <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div align="center" style="background:#1CD5E8;padding:20px;">
  <h3  class="black-text" style="font-weight:bold;"><a href="<?php echo e(url('admin-dash')); ?>">Admin Dashboard</a></h3>
<p class="white-text" style="font-weight:bold;">

   <a href="" class="badge badge-pill btn-dark disabled px-3 py-2">   <i class="fas fa-users"></i>  All Users</a> 
    <a href="<?php echo e(url('admin-bin-users')); ?>" class="badge badge-pill btn-outline-danger px-3 py-2"><i class="fas fa-dumpster"></i> Recycle Bin</a>
    </p>
<?php if(session('status')): ?>
  <div class="alert alert-danger" role="alert">
      <?php echo e(session('status')); ?>

  </div>
  <?php endif; ?>
  

</div>


 

<div class="container py-2">

   <p align="left">
        <i class="fas fa-users"></i> Registerd Users
   </p>
     <!--Grid column-->
     <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">

        <!--Card content-->
        <div class="card-body">

            <!-- Table  -->
            <table  class="table table-hover">
            <!-- Table head -->
            <thead class="blue-grey lighten-4">
                <tr>
                <th>#Id</th>
                <th>Name</th>
                <th>EmailId</th>
                <th>Role</th>
              
                <th>Action</th>
                </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($data->id); ?></td>
                <td><?php echo e($data->name); ?></td>
                <td><?php echo e($data->email); ?></td>
                <td><?php echo e($data->role); ?></td>
                <td>
                    <a href="<?php echo e(url('admin/role-edit/'.$data->id)); ?>" class="badge badge-pill btn-primary px-3 py-2">Edit</a>
                        <a href="<?php echo e(url('admin/delete-user/'.$data->id)); ?>" class="badge badge-pill btn-danger px-3 py-2">Delete</a>
                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
            <!-- Table body -->
            </table>
            <!-- Table  -->
          <!-- Feteching Pagination  Links-->
          <?php echo e($users->links()); ?>


        </div>

        </div>
        <!--/.Card-->

    </div>
<!--Grid column-->

</div>
<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/dashboards/admin/users.blade.php ENDPATH**/ ?>