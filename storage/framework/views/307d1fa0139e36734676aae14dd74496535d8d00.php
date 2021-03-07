<?php $__env->startSection('content'); ?>
<div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" action="<?php echo e(route('product.store')); ?>" method="post">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Company</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="company_id">
                    <option value="">Select Company</option>
                    <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php if(old('company_id') == $key->id): ?> selected <?php endif; ?> value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span style="color:red;"><?php echo e($errors->first('company_id')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Product Name">
                  <span style="color:red;"><?php echo e($errors->first('name')); ?></span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Unit</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="unit_id">
                    <option value="">Select Unit</option>
                    <?php $__currentLoopData = $unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if(old('unit_id') == $key->id): ?> selected <?php endif; ?> value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span style="color:red;"><?php echo e($errors->first('unit_id')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Approved number</label>
                  <input type="text" class="form-control" value="<?php echo e(old('approved_no')); ?>" name="approved_no" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter approved no">
                  <span style="color:red;"><?php echo e($errors->first('approved_no')); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="text" class="form-control" value="<?php echo e(old('price')); ?>" name="price" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter price">
                  <span style="color:red;"><?php echo e($errors->first('price')); ?></span>
                </div>
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\universal\resources\views/admin/product/create.blade.php ENDPATH**/ ?>