
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" method="post" action="<?php echo e(URL::route('company.store')); ?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Company Name">
                  <span style="color:red;"><?php echo e($errors->first('name')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Company Address</label>
                  <textarea name="address" class="form-control"><?php echo e(old('address')); ?></textarea>
                  <span style="color:red;"><?php echo e($errors->first('address')); ?></span>
                </div>
                <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Choose Logo</label>
                    <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1"  accept="image/png, image/jpeg">
                    <span style="color:red;"><?php echo e($errors->first('logo')); ?></span>
                  </div>
                  <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">COP number</label>
                    <input type="text" name="cop_number" class="form-control-file" id="exampleFormControlFile1">
                    <span style="color:red;"><?php echo e($errors->first('cop_number')); ?></span>
                  </div>
                  <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Test report number</label>
                    <input type="text" name="test_report_no" class="form-control-file" id="exampleFormControlFile1">
                    <span style="color:red;"><?php echo e($errors->first('test_report_no')); ?></span>
                  </div>
                  <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Rear mark</label>
                    <input type="text" name="rear_mark" class="form-control-file" id="exampleFormControlFile1">
                    <span style="color:red;"><?php echo e($errors->first('rear_mark')); ?></span>
                  </div>
                  <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Certified By</label>
                    <input type="text" name="certified_by" class="form-control-file" id="exampleFormControlFile1">
                    <span style="color:red;"><?php echo e($errors->first('certified_by')); ?></span>
                  </div>
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('post'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/admin/company/create.blade.php ENDPATH**/ ?>