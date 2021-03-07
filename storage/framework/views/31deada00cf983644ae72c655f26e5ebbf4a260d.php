
<?php $__env->startSection('content'); ?>  
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Customer</h1>
      

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List</h6>
            </div> -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Owner name</th>
                      <th>Vehicle Number</th>
                      <th>Phone</th>
                      <th>Vehicle Modal</th>
                   
                        <th>Status</th>

                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($key['owner_name']); ?></td>
                      <td><?php echo e($key['vehicle_no']); ?></td>
                      <td><?php echo e($key['phone']); ?></td>
                      <td><?php echo e($key['vehicle_model']); ?></td>
                       
                         <td>
                            <?php if($key['status'] == 0 ): ?>
                              Pending
                            <?php elseif($key['status'] == 1): ?>
                              Accepted
                            <?php else: ?>
                              Rejected
                            <?php endif; ?>
                          </td>

                      <?php if(!Auth::user()->isRto()): ?>
                      <td>
                         <?php if($key['status'] == 0 ): ?>
                              <a href="<?php echo e(URL::route('customer.edit',$key['id'])); ?>"> <button type="button" class="btn btn-success" >Edit</button></a>
                                <form action="<?php echo e(URL::route('customer.destroy',$key['id'])); ?>" class="d-inline-block" method="post" id="company_delete_<?php echo e($key['id']); ?>">
                                <button type="button" class="btn btn-danger" onclick="companyDelete('company_delete_<?php echo e($key['id']); ?>')">Delete</button>
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('DELETE'); ?>
                                </form> 
                          <?php else: ?>

                          <a href="<?php echo e(URL::route('customer.show',$key['id'])); ?>"> <button type="button" class="btn btn-success" >View</button></a>

                           <?php endif; ?>
                             <?php if(Auth::user()->isDealer()): ?>
                          <a href="<?php echo e(URL::to('/')); ?>/pdf/<?php echo e($key['id']); ?>" target="_blank"> <button type="button" class="btn btn-success" >PDF</button></a>
                          <?php endif; ?>
                      </td>
                        <?php else: ?>
                          <td>
                          <a href="<?php echo e(URL::route('customer.show',$key['id'])); ?>"> <button type="button" class="btn btn-success" >View</button></a>
                          <a href="<?php echo e(URL::to('/')); ?>/pdf/<?php echo e($key['id']); ?>" target="_blank"> <button type="button" class="btn btn-success" >PDF</button></a>
                        </td>
                        <?php endif; ?>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/customer/index.blade.php ENDPATH**/ ?>