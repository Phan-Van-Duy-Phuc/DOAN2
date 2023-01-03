<?php if(session('status')): ?>
  
      <script>
          $(document).ready(function () {
           alertify.set('notifier','position','top-right');
                
  
                alertify.alert("Status","Item Removed Succesfully");
          });
     </script>
     
<?php endif; ?>  

<?php if(session('cartclear')): ?>
  
      <script>
          $(document).ready(function () {
           alertify.set('notifier','position','top-right');
                
  
                alertify.alert("Status","All Items are Removed from the Cart!");
          });
     </script>
     
<?php endif; ?>  
<div class="px-5" style="margin-top:-4%;">
    <div class="shopping-cart">
        <?php $total = 0 ?>
        <?php if(session('cart')): ?>
        
            <div class="shopping-cart-table">
                <div class="table-responsive">
                    <div class="col-md-12 text-right mb-3" style="margin-top:15px;">
                            <a href="clear-cart" class="  font-weight-bold ">Clear Cart</a>
                    </div>
                        <table class="table my-auto  text-center">
                            <thead  class="table-bordered" style="background: white;border-style:solid;">
                            <tr>
                            <th class="cart-image">Image</th>
                            <th class="cart-product-name">Product Name</th>
                            <th class="cart-qty">Quantity</th>
                            <th class="cart-total">Price</th>
                            <th class="cart-romove">Remove</th>
                            </tr>
                            </thead>
                            
                            <tbody class="my-auto">
                                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $total += $details['Final_Price'] * $details['item_quantity'] ?>
                                
                                    <tr class="cartpage">
                                        <td class="cart-image">
                                        <a class="entry-thumbnail" href="javascript:void(0)">
                                        <img src="<?php echo e(asset('Uploads/Products/'.$details['item_image'].'')); ?>" width="100px" >
                                        </a>
                                        </td>
                                        <td class="cart-product-name-info">
                                            <h4 class='cart-product-description'>
                                            <a href="javascript:void(0)"><?php echo e($details['item_name']); ?></a>
                                            </h4>
                                            
                                        </td>
                                        <td class="cart-product-quantity">
                                            
                                        <input type="hidden" class="product_id" value="<?php echo e($details['item_id']); ?>">
                                            <div class="modify_quantity">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                  ><i class="fas fa-minus"></i></button>
                                                <input class="quantity" min="1" name="quantity" value="<?php echo e($details['item_quantity']); ?>" type="number" style="width:50px;margin:0px;">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                   ><i class="fas fa-plus"></i></button>
                                              </div>
                                        </td>
                                        <td class="cart-product-grand-total">
                                            <strong>
                                                <span class="cart-grand-total-price">
                                                <strike class="red-text" style="font-size:20px;"><?php echo e($details['item_price']  * $details['item_quantity']); ?>/-</strike> </span>
                                                <span class="green-text" style="font-size:25px;"><?php echo e($details['Final_Price'] * $details['item_quantity']); ?> /- </span><br>
                                                <span><?php echo e($details['contentforofferprice']); ?></span>
                                            </strong>
                                        </td>
                                        <td style="font-size: 20px;color:black;">
                                            <form action="delete-from-cart" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden"  name="id" value="<?php echo e($id); ?>">
                                          
                                        <button type="submit" class="  badge badge-pill btn-danger px-2 py-2" data-id="<?php echo e($id); ?>" ><i class="fas fa-trash" ></i> </button>
                                    </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            </table>
                </div>
            </div>
    
      
            <div class="row">
                <div class="col-md-8 col-sm-12 estimate-ship-tax">
                    <div>
                    <a href="/" class="btaobtn btaobtn-upper btaobtn-primary outer-left-xs mx-5">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 ">
                    <div class="cart-shopping-total">
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="cart-grand-name">Grand Total</h6>
                        </div>
                        <div class="col-md-6">
                            <h6 class="cart-grand-price">
                            Rs.
                            <span class="cart-grand-price-viewajax"><?php echo e($total); ?></span>
                            </h6>
                        </div>
                    </div>
                        <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-checkout-btn text-center">
                                <?php if(Auth::user()): ?>
                                     <a href="<?php echo e(url('checkout')); ?>" class="btn btn-outline-success   checkout-btn text-dark">PROCCED TO CHECKOUT</a>
                                <?php else: ?>
                                    <a href="<?php echo e(url('login')); ?>" class="btn btn-outline-success  checkout-btn text-dark">PROCCED TO CHECKOUT</a>
                                    
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-md-12 mycard py-5 text-center">
                    <div class="mycards">
                        <h4>Your cart is currently empty.</h4>
                        <a href="<?php echo e(url('/')); ?>" class="btn btn-upper btn-primary outer-left-xs mt-5" style="border-radius:30px;">Continue Shopping</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        


    </div>

</div><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/components/cartindesktopmode.blade.php ENDPATH**/ ?>