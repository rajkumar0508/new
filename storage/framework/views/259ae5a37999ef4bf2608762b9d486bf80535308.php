<?php $__env->startSection('content'); ?>
<div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" action="<?php echo e(URL::to('/')); ?>/update-password" method="post">
               
                <div class="form-group">
                  <label for="exampleInputEmail1">Old Password</label>
                  <input type="password" class="form-control"  name="current_password" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Old Password">
                  <span style="color:red;"><?php echo e($errors->first('current_password')); ?></span>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" class="form-control"  name="new_password" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Password">
                  <span style="color:red;"><?php echo e($errors->first('new_password')); ?></span>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Confim Password</label>
                  <input type="password" class="form-control" name="confirm_password" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Confirm Password">
                  <span style="color:red;"><?php echo e($errors->first('confirm_password')); ?></span>
                </div>
               
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\universal\resources\views/auth/passwords/reset.blade.php ENDPATH**/ ?>