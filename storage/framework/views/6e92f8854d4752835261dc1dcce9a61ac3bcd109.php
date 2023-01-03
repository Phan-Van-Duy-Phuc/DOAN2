<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Team 4</title>
        <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
        <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
        <link href="<?php echo e(asset('assets/img/Logo3.jpg')); ?>" rel="icon">
        <link href="<?php echo e(asset('assets/img/Logo3.jpg')); ?>" rel="apple-touch-icon">

         <link href="<?php echo e(asset('css/responsivecode.css')); ?>" rel="stylesheet">
         <link href="<?php echo e(asset('css/buttons.css')); ?>" rel="stylesheet">
         
         <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
            
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
            
    </head>
    <body id="body" class="contentfont" style="background:#f2f2f2;">
 
    <?php echo $__env->make('Reusable_components.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php echo $__env->yieldContent('content'); ?>
     <?php echo $__env->make('Reusable_components.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>">
    
     
       </script>
    </body>
</html>
<?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/layouts/admin.blade.php ENDPATH**/ ?>