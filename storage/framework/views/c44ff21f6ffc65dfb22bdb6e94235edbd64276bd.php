
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" method="post" action="<?php echo e(URL::to('details/save')); ?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Distributor Name</label>
                  <input type="text" name="name" class="form-control" value="<?php if(isset($data->name)): ?><?php echo e($data->name); ?> <?php endif; ?>" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Distributor Name">
                  <span style="color:red;"><?php echo e($errors->first('name')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Distributor Address</label>
                  <textarea name="address" class="form-control"><?php if(isset($data->address)): ?><?php echo e($data->address); ?> <?php endif; ?></textarea>
                  <span style="color:red;"><?php echo e($errors->first('address')); ?></span>
                </div>
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('post'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/customer/detail.blade.php ENDPATH**/ ?>