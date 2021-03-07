
<?php $__env->startSection('content'); ?>  
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Company</h1>
      

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
                      <th>Name</th>
                      <th>Logo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($key['name']); ?></td>
                      <td><img width="100px" height="70px;" src="<?php echo e(URL::to('uploads')); ?>/<?php echo e($key['logo']); ?>"></td>
                      <td>
                         <a href="<?php echo e(URL::route('company.edit',$key['id'])); ?>"> <button type="button" class="btn btn-success" >Edit</button></a>
                          <form action="<?php echo e(URL::route('company.destroy',$key['id'])); ?>" class="d-inline-block" method="post" id="company_delete_<?php echo e($key['id']); ?>">
                          <button type="button" class="btn btn-danger" onclick="companyDelete('company_delete_<?php echo e($key['id']); ?>')">Delete</button>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/admin/company/index.blade.php ENDPATH**/ ?>