<?php $__env->startSection('content'); ?>  
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Product</h1>
      

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
                      <th>Product Name</th>
                      <th>Company Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($key['name']); ?></td>
                      <td><?php echo e($key['company']['name']); ?></td>
                      <td>
                         <a href="<?php echo e(URL::route('product.edit',$key['id'])); ?>"> <button type="button" class="btn btn-success" >Edit</button></a>
                          <form action="<?php echo e(URL::route('product.destroy',$key['id'])); ?>" class="d-inline-block" method="post" id="product_delete_<?php echo e($key['id']); ?>">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\universal\resources\views/admin/product/index.blade.php ENDPATH**/ ?>