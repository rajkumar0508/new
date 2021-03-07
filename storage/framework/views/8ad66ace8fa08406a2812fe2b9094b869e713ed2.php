
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" method="post" action="<?php echo e(URL::route('users.store')); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Role</label>
                    <select class="form-control" name="role" id="user_type" onchange="selectUser(this)" >
                        <option value="">Select Role</option>
                        <?php if(!Auth::user()->isDistributor()): ?>
                        <option value="2" <?php if(old('role') == 2): ?> selected <?php endif; ?>>Distributor</option>
                        <?php endif; ?>
                            <option value="3" <?php if(old('role') == 3): ?> selected <?php endif; ?> >Dealer</option>
                    </select>
                    <span style="color:red;"><?php echo e($errors->first('role')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter your Name">
                  <span style="color:red;"><?php echo e($errors->first('name')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="number" class="form-control" value="<?php echo e(old('mobile_no')); ?>" name="mobile_no" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Mobile number">
                  <span style="color:red;"><?php echo e($errors->first('mobile_no')); ?></span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" value="<?php echo e(old('email')); ?>"  autocomplete="off" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                    <span style="color:red;"><?php echo e($errors->first('email')); ?></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control"  autocomplete="off" name="password" id="exampleInputPassword1" placeholder="Password">
                    <span style="color:red;"><?php echo e($errors->first('password')); ?></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password"  autocomplete="off" id="exampleInputPassword1" placeholder="Confirm Password">
                    <span style="color:red;"><?php echo e($errors->first('confirm_password')); ?></span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"><?php echo e(old('address')); ?></textarea>
                    <span style="color:red;"><?php echo e($errors->first('address')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">RTO</label>
                  <select class="form-control" name="rto_id[]" id="rto_id"  multiple="multiple" >
                    <!-- <option>Select RTO</option> -->
                    <?php $__currentLoopData = $rto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>" <?php if(old('rto_id') == $key->id): ?> selected <?php endif; ?>><?php echo e($key->email); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                    </select>
                    <span style="color:red;"><?php echo e($errors->first('rto_id')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" class="form-control"  value="<?php echo e(old('company_name')); ?>" name="company_name" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Company Name">
                  <span style="color:red;"><?php echo e($errors->first('company_name')); ?></span>
                </div>
                <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Choose Logo</label>
                    <input type="file" class="form-control-file"  name="company_logo" id="exampleFormControlFile1">
                    <span style="color:red;"><?php echo e($errors->first('company_logo')); ?></span>
                  </div> 
                         <?php echo csrf_field(); ?> 
                         <?php echo method_field('post'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
      <script>
      $('#rto_id').multiselect({
        buttonWidth: '249px',
            buttonText: function(options, select) {
                if (options.length === 0) {
                    return 'Select';
                }
                 else {
                     var labels = [];
                     options.each(function() {
                         if ($(this).attr('label') !== undefined) {
                             labels.push($(this).attr('label'));
                         }
                         else {
                             labels.push($(this).html());
                         }
                     });
                     return labels.join(', ') + '';
                 }
            }
    });
   
    function selectUser(obj) {
       if($(obj).val() == 3) {
            $("#rto_id").multiselect('destroy');
            $('#rto_id').prop('multiple', "");
            $("#rto_id").multiselect();
       } else {
            $("#rto_id").multiselect('destroy');
            $('#rto_id').attr('multiple', 'multiple');
            $("#rto_id").multiselect();
       }
       
    }
      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/admin/user/create.blade.php ENDPATH**/ ?>