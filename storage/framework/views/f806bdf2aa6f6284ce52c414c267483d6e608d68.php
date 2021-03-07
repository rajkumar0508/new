<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" method="post" action="<?php echo e(URL::route('course.store')); ?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Course Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Company Name">
                  <span style="color:red;"><?php echo e($errors->first('name')); ?></span>
                </div>
              
                <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Choose Logo</label>
                    <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1"  accept="image/png, image/jpeg">
                    <span style="color:red;"><?php echo e($errors->first('logo')); ?></span>
                  </div>
                 
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('post'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\universal\resources\views/admin/course/create.blade.php ENDPATH**/ ?>