<div class="container">
    <h3 class="py-2 px-2">My Transactions</h3>
<div class="row p-2">
   <div class="col-md-12">
           <div class="card">
               <div class="card-body">
                   <table class="table table-striped table-bordered">
                       <thead>
                        <th>TXID</th>
                           <th>Order_Id</th>
                         
                           <th>Amount</th>
 
                           <th>Status</th>

                       </thead>
                       <?php
                       $email= Auth::user()->email;
                       $Orders=App\Models\Transaction::where('email','=',$email)->get();
                     ?>
                       <tbody>
                           <?php $__currentLoopData = $Orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <tr>

                         
                           <td><?php echo e($item->TXNID); ?></td>
                           <td><?php echo e($item->Oder_No); ?></td>

                           <td><?php echo e($item->amount); ?></td>
                           <td><?php echo e($item->status); ?></td>

                          




                       </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                       </tbody>

                   </table>
               </div>
           </div>
   </div>
</div>
</div><br><?php /**PATH D:\XAMPP\htdocs\ecommerce\resources\views/components/user/mytransactionsindesktopmode.blade.php ENDPATH**/ ?>