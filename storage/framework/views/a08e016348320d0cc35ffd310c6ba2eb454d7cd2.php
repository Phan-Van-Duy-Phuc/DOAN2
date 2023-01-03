<?php $__env->startSection('title'); ?>
Register - Gainloe
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
 
<div align="center" class="container-fluid  my-3   animated bounceIn">

        <div class="col-md-2 animated bounceIn" >
            <a href="/">
            <img src="<?php echo e(asset('assets/img/Logo-Square.webp')); ?>" class="img-fluid px-2 py-2" style="width:200px;">
            </a>
        </div>
        <h5 class="my-2" > Create your Account</h5>
        <div class="row justify-content-center ">
                <div class="col-md-7" style="width: 100%">



                            <form    method="POST" action="<?php echo e(route('register')); ?>">
                                <?php echo csrf_field(); ?>

                                <div   class="form-group row  justify-content-center ">

                                    <div   class="col-md-6">
                                        <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" placeholder="<?php echo e(__('Name')); ?>" autofocus>

                                        <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row  justify-content-center ">

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required placeholder="<?php echo e(__('E-Mail Address')); ?>" autocomplete="email">

                                        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row  justify-content-center ">

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required placeholder="<?php echo e(__('Password')); ?>" autocomplete="new-password">

                                        <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row  justify-content-center ">

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required  placeholder="<?php echo e(__('Confirm Password')); ?>" autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0  justify-content-center ">
                                    <div class="col-md-12 ">
                                        <button type="submit" class="btaobtn btaobtn-outline-dark px-2 py-2">
                                            Create My Account
                                        </button><br><br>By Signing up! You are agreeing all the <a href="<?php echo e(url('Terms-and-Conditions')); ?>" target="_blank">Terms and Conditions</a> 
                                    </div>
                                    <div class="col-md-6 p-2">  <strong>Already Have an Account! Please <a href="login" ><u>Login</u></a></strong>
                                    </div>
                                    <div class="col-md-12 ">
                                        or
                                   <p class="my-2"> 
                                          <a class="black-text" href="/">
                                               <i class="fas fa-arrow-left"></i>
                                           <u>Back to Gainloe</u>
                                           </a>
                                   </p> 
                                 </div>
                                </div>
                            </form>


                </div>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/auth/register.blade.php ENDPATH**/ ?>