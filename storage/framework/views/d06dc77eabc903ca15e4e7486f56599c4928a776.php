
<?php $__env->startSection('content'); ?>  
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?php if(Auth::user()->isAdmin()): ?>
            <h1 class="h3 mb-2 text-gray-800">Dealer & Distributor</h1>
          <?php else: ?> 
          <h1 class="h3 mb-2 text-gray-800">Dealers</h1>
          <?php endif; ?>
      

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
                      <th>Role</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile No</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td>
                        <?php if($key->role == 2): ?>
                            Distributor
                        <?php else: ?>
                            Dealer
                        <?php endif; ?>
                      </td>
                      <td><?php echo e($key['name']); ?></td>
                      <td><?php echo e($key['email']); ?></td>
                      <td><?php echo e($key->details['mobile_no']); ?></td>
                      <td>
                         <a href="<?php echo e(URL::route('users.edit',$key['id'])); ?>"> <button type="button" class="btn btn-success" >Edit</button></a>
                          <form action="<?php echo e(URL::route('users.destroy',$key['id'])); ?>" method="post" class="d-inline-block" id="product_delete_<?php echo e($key['id']); ?>">
                          <button type="button" class="btn btn-danger" onclick="companyDelete('product_delete_<?php echo e($key['id']); ?>')">Delete</button>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                          </form> 
                      </td>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/admin/user/index.blade.php ENDPATH**/ ?>