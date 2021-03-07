
<?php $__env->startSection('content'); ?>  
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Reports</h1>
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
                      <th>Company Name</th>
                      <th>Product Name</th>
                      <th>Unit</th>
                      <th>Total Qty</th>
                      <th>Out Qty</th>
                      <th>Available Qty</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($key['company']['name']); ?></td>
                      <td><?php echo e($key['name']); ?></td>
                      <td><?php echo e($key['unit']['name']); ?></td>
                      <td><?php echo e($key['total_qty']); ?></td>
                      <td><?php echo e($key['out_qty']); ?></td>
                      <td><?php echo e($key['avilable_qty']); ?></td>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/reports/index.blade.php ENDPATH**/ ?>