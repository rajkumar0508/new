
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" action="<?php echo e(route('rto.update', $user->id)); ?>" method="post">
               
                <div class="form-group">
                  <label for="exampleInputEmail1">RTO code</label>
                  <input type="text" class="form-control" value="<?php echo e($user->email); ?>" name="email" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter RTO code">
                  <span style="color:red;"><?php echo e($errors->first('email')); ?></span>
                </div>
                
                  <div class="form-group">
                  <label for="exampleInputEmail1">RTO name</label>
                  <input type="text" class="form-control" value="<?php echo e($user->name); ?>" name="name" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter RTO name">
                  <span style="color:red;"><?php echo e($errors->first('name')); ?></span>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" class="form-control" value="" name="password" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Password">
                  <span style="color:red;"><?php echo e($errors->first('password')); ?></span>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Confim Password</label>
                  <input type="password" class="form-control" value="" name="confirm_password" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Confirm Password">
                  <span style="color:red;"><?php echo e($errors->first('confirm_password')); ?></span>
                </div>
               
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/admin/rto/edit.blade.php ENDPATH**/ ?>