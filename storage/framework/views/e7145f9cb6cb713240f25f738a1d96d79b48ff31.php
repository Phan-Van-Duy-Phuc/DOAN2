<style>
    
@media (min-width: 768px)
{
     #Gainaloe_Logo
    {
        margin-left:-75px;
    }
}

#SearchIcon:hover
{
    cursor:pointer;
}
</style> 
<script>
$(document).ready(function (){
        $('#SearchIcon').click(function (e)
        {
            var searchstring = $('.searchstring').val();
                // window.alert(searchstring);
                if(searchstring=='')
                {
                    window.location.replace("/");
                }
                else
                {
                    window.location.replace("/Shop/"+searchstring);   
                }
                 
 
        });
});
</script>
<!-- ======= Header ======= -->
    <header id="header" class="z-depth-1"  style="position:fixed;top:0px;width:100%;font-family: 'Balsamiq Sans', cursive;">
        <div class="container d-flex" >
    
          <div id="Gainaloe_Logo" class="logo mr-auto" >
            <!--  <h1 class="text-light"><a href="/">CompanYName</a></h1>  -->
            <a href="/" ><img src=" <?php echo e(asset('assets/img/Logo3.jpg')); ?>" alt="" class="img-fluid" ></a>
            
          </div>
          <div class="col-md-4"  >
              <div class="input-group md-form form-sm  " style="width:100%;">
                <input class="form-control my-0 py-1 red-border searchstring" list="plists" name="plist" id="plist" type="text" placeholder="Search" aria-label="Search" >
                <datalist id="plists">
                    <?php
                       $Products=App\Models\Products::where('status','=','1')->get();
                    ?>
                        <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->url); ?>"><?php echo e($item->name); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </datalist>
                
                <div class="input-group-append" id="SearchIcon">
                    <span class="input-group-text  lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                aria-hidden="true"    ></i></span>
                </div>
            </div>
            </div>
          <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
          <nav class="nav-menu d-none d-lg-block contentfont" >
              
            <ul style="margin-top:5px;">
                
              <li class="active"><a href="/" >Home</a></li>
              <li><a href="/#About">About</a></li>
              <li><a href="/#Products">Products</a></li>
              
              <li><a href="/#Team">Team</a></li>
              
              <li><a href="<?php echo e(url('Help')); ?>"><i class="fas fa-headset"  ></i> Help</a></li>   
             
                <?php if(Route::has('login')): ?>

                <?php if(auth()->guard()->check()): ?>
                  <li class="drop-down"><a href="#">  <i class="far fa-user-circle "></i>  My Account  <i class="fas fa-angle-down"></i></a> 
                       <ul>
                            <li><a href="<?php echo e(url('dashboard')); ?>" ><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
                            <li><a href="<?php echo e(url('profile')); ?>" ><i class="fas fa-user"></i>  Profile</a></li>
                            <li><a href="<?php echo e(url('Orders')); ?>" > <i class="fas fa-table"></i> Orders</a></li>
                            <li><a href="<?php echo e(url('Payments')); ?>" ><i class="fas fa-receipt"></i>  Transactions</a></li>
                             <a   href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  <i class="fas fa-sign-in-alt"></i> <?php echo e(__('Logout')); ?></a>
                              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                  <?php echo csrf_field(); ?>
                              </form>
                            </li>
                        </ul>
                  </li>

                <?php else: ?>
                <li> <a href="<?php echo e(route('login')); ?>">Login</a> </li>

                    <?php if(Route::has('register')): ?>
                    <li> <a href="<?php echo e(route('register')); ?>">Register</a> </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php endif; ?>


          
             <li><a href="<?php echo e(url('cart')); ?>" style="margin-left:15px;">   <i class="fas fa-shopping-cart fa-2x"></i>
              <span class="basket-item-count" style="margin-left:-4px;">
                <span class="badge badge-pill red"> <?php echo e(count((array) session('cart'))); ?>  </span>
                </span></a></li>
            
            </ul>
            
          </nav><!-- .nav-menu -->
         
        </div>
      </header><!-- End Header --> 
   <br><br><br><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/Reusable_components/user/header.blade.php ENDPATH**/ ?>