<?php $__env->startSection('title'); ?> Gainloe <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>

    .checked {
      color: orange;
    }
    </style> 
    
<div id="slide_show_in_desktop_mode">
  <?php echo $__env->make('components.desktopslideshow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div id="slide_show_in_mobile_mode">
  <?php echo $__env->make('components.mobileslideshow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div> 
<!-- About Starts Here -->
<script>
    $( document ).ready(function() {
  new WOW().init();
  $( ".wow" ).addClass( "fadeInLeft" );
});
</script>
 <div id="About" class="container-fluid" style="background:white;">
    <br>
      <div class="row ">
        <div class="col-md-4 wow animated zoomIn slow">
        <img src="<?php echo e(asset('Img/1.jpg')); ?>" alt="" class="img-fluid" >
        </div>
        <div  align="center" class="col-md-8 wow animated flash slow">
            <h1 class="black-text" style="font-weight:bold;">Các mặt hàng có tại website</h1>
            <div class="col-md-3" style=" border-bottom: 2px solid #003399;"></div>
            <div class="row my-5" style="font-size:30px; font-family: 'Balsamiq Sans', cursive;">
              <div class="col-md-6" >
                    <ul align="left" style="list-style:none;">
                        <li><i class="fab fa-pagelines"></i> Áo quần thời trang Nam</li><br>
                        <li><i class="fab fa-pagelines"></i> Đa dạng mẫu mã và thương hiệu</li>
                    </ul>
              </div>
              <div class="col-md-6">
                    <ul align="left" style="list-style:none;">
                    <li><i class="fab fa-pagelines"></i> Áo quần thời trang Nữ</li><br>
                    <li><i class="fab fa-pagelines"></i> Giá cả ưu đãi và nhiều chương trình khuyến mãi</li>
                  </ul>
              </div>
            </div>
            <p  align="left" class="mx-5" style="margin-top:-30px; font-family: 'Balsamiq Sans', cursive;">
              <a href="<?php echo e(url('about')); ?>"  target="_blank" class="btn btn-dark">Know More</a>
              </p>
                                            
        </div>
      </div>
      
</div>

<!-- About completed Here -->

<?php
$Products=App\Models\Products::where('status','=','1')->get();
?>
<!-- Products Starts Here -->
<section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast" style=" font-family: 'Balsamiq Sans', cursive;">
  
    <h1 class="black-text" style="font-weight:bold;">PRODUCTS</h1> 
    <div align="center">
        <p  class="col-md-2" style=" border-bottom: 2px solid #003399;"></p>
    </div>
    <div  class="row my-4 px-4 "  style="width:100%;" >
      <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-3 px-4 my-5"  >
          <a href="<?php echo e(url('Shop/'.$item->url)); ?>">
              <img src=" <?php echo e(asset('Uploads/Products/'.$item->image1)); ?>" alt="" class="img-fluid"  >
              </a>
          <div class="py-2" style="background:white;">
            <span class="black-text my-3" style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;"><?php echo e($item->name); ?></span>
            <br>
            Price : <?php echo e($item->price); ?> đ<br> 
              <?php if($item->rating==1): ?>
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          <?php elseif($item->rating==2): ?>
                          <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            <?php elseif($item->rating==3): ?>
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          
                            <?php elseif($item->rating==4): ?>
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                          
                            <?php else: ?>
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                            <?php endif; ?>
                             
                            <br>
           
               <a href="Shop/<?php echo e($item->url); ?>" class="btn  btn-primary    "> Shop Now</a>
            
          </div>
      </div>  
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
   
    <hr class="col-md-6"> 
</section>
<!-- Products Ends Here --> 
<section  class="slideanim"  id="testimonialsdesktopmode" align="center" style="margin-top:-50px;" >
 
     <?php echo $__env->make('components.testimonialsdesktopmode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</section>
<section  class="slideanim"  id="testimonialsmobilemode" align="center"  style="margin-top:-70px;"  >
 
  <?php echo $__env->make('components.testimonialsmobilemode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</section>
 
<!--Team Starts Here-->
 <div id="Team">
<div id="teaminthedesktopmode" class="container" align="center" >
      <?php echo $__env->make('components.teamindesktopmode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div id="teaminthemobilemode" class="container"  align="center" >
      <?php echo $__env->make('components.teaminmobilemode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
 </div>
<!--Team Ends Here-->
<!-- ======= Contact Section Starts Here ======= --> 
 
  <section id="contact" class="contact" style="background:white;">
          <div class="container ">

            <div class="section-title">
            
              <h2>Contact</h2>
              <p style=" font-family: 'Balsamiq Sans', cursive;">  </p>
            </div>

            <div class="row wow animated zoomIn slow">

              <div class="col-lg-5 d-flex align-items-stretch">
                <div align="left" class="info">
                  <div class="address" >
                  <i class="fas fa-map-marker-alt"></i>
                    <h4>Location:</h4>
                    <p>  Số 1 Điện Biên Phủ</p>
                  </div>

                  <div class="email">
                  <i class="fas fa-envelope"></i>
                    <h4>Email:</h4>
                    <p>webbanhang@gmail.com</p>
                  </div>

                  <div class="phone">
                  <i class="fas fa-phone"></i>
                    <h4>Call:</h4>
                    <p>Chăm sóc khách hàng : 0122334555<br>
</p>
                  </div>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1858.7005486578928!2d107.58092174937414!3d16.458862398363237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a149931442cb%3A0x8456d5e8ca494f18!2zMSDEkGnhu4duIEJpw6puIFBo4bunLCBWxKluaCBOaW5oLCBUaMOgbmggcGjhu5EgSHXhur8sIFRo4burYSBUaGnDqm4gSHXhur8sIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1672540404456!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

              </div>

              <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="send-email" method="post" role="form" class="php-email-form">
                    <?php echo csrf_field(); ?>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                    <div class="validate"></div>
                  </div>
                 
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>

          </div>
  </section>
 
<!-- ======= Contact Section Ends Here ======= --> 
<p align="center" class="py-2"><br>
   <button class="btn btn-dark" data-toggle="modal" data-target="#modalSocial" >Subscribe to Our News Letter</button>
   </p>
   

<!--Modal: modalSocial-->
<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header  darken-3 white-text" style="background-color:#40BFD6;">
        <h4 class="title"><i class="fas fa-users"></i> Subscribe to Our Newsletter</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>

      <!--Body-->
      <div class="modal-body mb-0 text-center">
            <form method="POST" action="subscribe-news-letter">
                <?php echo csrf_field(); ?>
                <input type="text" class="form-control"  name="name" placeholder="Your Name" required><br>
                <input type="email"  class="form-control"  name="email" placeholder="Your Email Id" required>
                <button class="btn" style="background-color:#40BFD6;">Submit</button>
            </form>
      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: modalSocial-->
  
  
   <?php if(session('status')): ?>

        <script>
            $(document).ready(function () {

        $('#centralModalSuccess').modal('show');

        });
        </script>
<?php endif; ?>


<?php if($errors->any()): ?>

        <script>
            $(document).ready(function () {

        $('#centralModaldanger').modal('show');

        });
        </script>
<?php endif; ?>



 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Success</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p><?php echo e(session('status')); ?> </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         
         <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->
 
 <!-- Central Modal Medium Danger -->
 <div class="modal fade" id="centralModaldanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Form Not Submitted </p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
             
           <i class="fas fa-exclamation fa-4x mb-3 animated rotateIn"></i>
           <p><?php if($errors->any()): ?>
    <?php echo implode('', $errors->all('<div>:message</div>')); ?>

<?php endif; ?> </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         
         <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Danger-->
 
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/welcome.blade.php ENDPATH**/ ?>