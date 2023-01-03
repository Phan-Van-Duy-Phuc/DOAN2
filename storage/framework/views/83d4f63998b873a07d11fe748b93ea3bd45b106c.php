    <!-- ======= Header ======= -->
    <header id="header" >
        <div class="container d-flex" >
    
          <div class="logo mr-auto" >
            <!--  <h1 class="text-light"><a href="/">CompanYName</a></h1>  -->
            <a href="/"><img src=" <?php echo e(asset('assets/img/Logo3.jpg')); ?>" alt="" class="img-fluid" ></a>
            
          </div>
          <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
          <nav class="nav-menu d-none d-lg-block contentfont" >
            <ul style="margin-top:5px">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/#about">About</a></li>
              <li><a href="/#Startups">Products</a></li>
              
              <li><a href="/#Startups">Team</a></li>
              
              <li><a href="/#Startups"><i class="fas fa-headset"  ></i> Help</a></li>   
             
                <?php if(Route::has('login')): ?>

                <?php if(auth()->guard()->check()): ?>
                  <li class="drop-down"><a href="#">Dashboard <i class="fas fa-angle-down"></i></a>
                       <ul> 
                            <li><a href="<?php echo e(url('admin-all-users')); ?>" >Registered Users</a></li>
                            <li><a href="<?php echo e(url('admin-Orders')); ?>" >Orders</a></li>
                            <li><a href="<?php echo e(url('admin-Transactions')); ?>" >Transaction_Details</a></li>
                            <li><a href="<?php echo e(url('admin-products')); ?>" >Products</a></li>
                            <a   href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  <?php echo e(__('Logout')); ?></a>
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


          
             <li><a href="/#Startups" style="margin-left:15px;">   <i class="fas fa-shopping-cart fa-2x"></i></a></li>
            
            </ul>
            
          </nav><!-- .nav-menu -->
         
        </div>
      </header><!-- End Header --> 
   <?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/Reusable_components/admin/header.blade.php ENDPATH**/ ?>