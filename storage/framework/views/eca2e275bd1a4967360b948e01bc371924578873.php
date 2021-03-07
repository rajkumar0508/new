
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" method="post" action="<?php echo e(URL::route('company.update', $data->id)); ?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo e($data->name); ?>" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Company Name">
                  <span style="color:red;"><?php echo e($errors->first('name')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Company Address</label>
                  <textarea name="address" class="form-control"><?php echo e($data->address); ?></textarea>
                  <span style="color:red;"><?php echo e($errors->first('address')); ?></span>
                </div>
                <div class="form-group choose-image" >
                    <label for="exampleFormControlFile1">Choose Logo</label>
                    <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1"  accept="image/png, image/jpeg" onchange="$('#companyEdit').remove()">
                    <span style="color:red;"><?php echo e($errors->first('logo')); ?></span>
                    <?php if(!$errors->first('logo')): ?>
                        <div id="companyEdit">
                            <input type="hidden" value="<?php echo e($data->logo); ?>" name="uploadedName">
                            <img width="100px"  height="70px;" src="<?php echo e(URL::to('uploads')); ?>/<?php echo e($data->logo); ?>"><i onclick="editDelete('companyEdit')" class="fas fa-trash-alt"></i>
                        </div>
                    <?php endif; ?>
                </div>


                <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">COP number</label>
                    <input type="text" name="cop_number"  value="<?php echo e($data->cop_number); ?>" class="form-control-file" id="exampleFormControlFile1">
                    <span style="color:red;"><?php echo e($errors->first('cop_number')); ?></span>
                  </div>
                  <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Test report number</label>
                    <input type="text" name="test_report_no"  value="<?php echo e($data->test_report_no); ?>" class="form-control-file" id="exampleFormControlFile1">
                    <span style="color:red;"><?php echo e($errors->first('test_report_no')); ?></span>
                  </div>
                  <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Rear mark</label>
                    <input type="text" name="rear_mark"  value="<?php echo e($data->rear_mark); ?>" class="form-control-file" id="exampleFormControlFile1">
                    <span style="color:red;"><?php echo e($errors->first('rear_mark')); ?></span>
                  </div>
                  <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Certified By</label>
                    <input type="text" name="certified_by"  value="<?php echo e($data->certified_by); ?>" class="form-control-file" id="exampleFormControlFile1">
                    <span style="color:red;"><?php echo e($errors->first('certified_by')); ?></span>
                  </div>
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/admin/company/edit.blade.php ENDPATH**/ ?>