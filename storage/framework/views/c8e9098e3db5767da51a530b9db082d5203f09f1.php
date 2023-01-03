<div class="container"> 
    <h3 class="py-2 px-5">My Payments</h3>
   <div class="row px-1">
       
       <div class="col-md-12">
              
                        <?php
                            $email= Auth::user()->email;
                           $Orders=App\Models\Transaction::paginate(10);
                        ?>
                        
                        <?php $__currentLoopData = $Orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <br>
                            <div class="card ">
                            <div class=" py-3">
                                <ul style="list-style:none;width:100%;">
                                    <li> <strong>Order Id: </strong>  <?php echo e($item->Oder_No); ?></li>
                                        <li><strong>TXID: </strong><?php echo $item->TXNID?></li>
                                        
                                        <li><strong>Amount: </strong><?php echo $item->amount?></li>
                                    
                                        <li><strong>Payment Status: </strong><?php echo e($item->Status); ?></li>
                                </ul>
                                    
                                
                                    
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
                         
                         
   
                     
                   
       </div>
   </div>
   </div>
   <br>  <?php echo e($Orders->links()); ?><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/components/admin/mytransactionsinmobilemode.blade.php ENDPATH**/ ?>