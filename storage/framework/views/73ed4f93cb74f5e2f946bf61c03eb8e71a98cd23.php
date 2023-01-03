<div  id="events" class="container slideanim" >
    <h2 align="center" class="h1-responsive font-weight-bold " style="font-family: 'Josefin Sans', sans-serif;color:#330033;margin-top:-30px;">My Previous Orders</h2> 
    <div class="row d-flex justify-content-center" style="margin-top:-30px;"> 
                        <?php
                        $email= Auth::user()->email;
                        $Orders=App\Models\Order::where('Customer_Emailid','=',$email)->get();
                        ?>
                        
                        <?php $__currentLoopData = $Orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="card-body text-white text-center py-5 px-5 my-5" style="background:hsl(252, 100%, 4%);border-radius:20px;">
                    
                                  <h3 style="color:green;font-family: Righteous, cursive;">
                                         <strong>OID: <?php echo e($item->id); ?></strong>
                                             <hr class="hr-light">
                                        </h3>
                                        
                                                
                                            
                                                 <h6 align="left" style="color:white;font-family: 'Balsamiq Sans', cursive;" >
                              <strong style="color:yellow;">Order Details: </strong><?php echo $item->Order_Details?>  
                            </h6>
                          
                     
                          <p align="left"><strong style="color:yellow;">Amount: </strong> <?php echo e($item->Amount); ?> INR<br>
                          <strong style="color:yellow;">Delivery Address: </strong> <br><?php echo $item->Delivery_Address ?></p>
                  
                      <a href="<?php echo e(url('admin-Order-Status/'.$item->id.'')); ?>" class="badge btaobtn btaobtn-primary px-2 py-2 ">Check Status</a>
                                 
                               
                                  
                                
                                 <?php if($item->Delivery_Status!='pending' || $item->Order_Cancel_Status==1): ?>
                                  <a href="<?php echo e(url('admin-Order-Status/'.$item->id.'')); ?>"    class="badge btaobtn btaobtn-danger px-2 py-2 disabled">Cancel Order</a>
                                  <?php else: ?>
                                      <a href="<?php echo e(url('admin-Order-Cancel/'.$item->id.'')); ?>" class="badge btaobtn btaobtn-danger px-2 py-2">Cancel Order</a>
                               
                                 <?php endif; ?>
                        
                                              
                                    </div>
                                    </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
                
</div><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/components/admin/ordersinmobilemode.blade.php ENDPATH**/ ?>