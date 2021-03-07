
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <form method="post" action="<?php echo e(URL::to('/')); ?>/status/update" id="statusForm">
      <h5 class="text-center">View </h5> 
     
          <div class="row company-creation-form shadow">
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Date</h6>
                <p><?php echo e($data->date); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Vehicle RegNo:</h6>
                <p><?php echo e($data->vehicle_no); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Vehicle Manufacturing Year:</h6>
                <p><?php echo e($data->vehicle_year); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Classis No:</h6>
                <p><?php echo e($data->class_no); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Engine No:</h6>
                <p><?php echo e($data->engine_no); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Vechicle Make:  </h6>
                <p><?php echo e($data->vehicle_make); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Vechicle Model:</h6>
                <p><?php echo e($data->vehicle_model); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Owner Name</h6>
                <p><?php echo e($data->owner_name); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Phone</h6>
                <p><?php echo e($data->phone); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>Address</h6>
                <p><?php echo e($data->address); ?></p>
            </div>
            <div class="company-data-list d-flex justify-content-between w-100">
                <h6>RTO</h6>
                <p><?php echo e($data->rto->email); ?></p>
            </div>

            <div class="border-bottom mb-3 w-100">
               <h6 class="text-center"> Reflective Tape details </h6>
            </div>

            <?php $__currentLoopData = $data->tapes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="company-data-list d-flex justify-content-between w-100">
                    <h6><?php echo e($key->product->name); ?>:</h6>
                    <p><?php echo e($key->qty); ?> <?php echo e($key->product->unit->name); ?></p>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="border-bottom mb-5 w-100">
               <h6 class="text-center"> Images </h6>
            </div>

            <div class="row">
                <div class="col-lg-4  mb-3"> 
                <p class="text-center">Front Image</p>
                    <img src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->front_image); ?>" class="w-50" alt="images" value=""/>
                </div>
                <div class="col-lg-4  mb-3"> 
                <p class="text-center">Left Image</p>
                    <img src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->left_image); ?>" class="w-50" alt="images"/>
                </div>
                <div class="col-lg-4  mb-3"> 
                <p class="text-center">Right Image</p>
                    <img src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->right_image); ?>" class="w-50" alt="images"/>
                </div>
                <div class="col-lg-4  mb-3"> 
                <p class="text-center">Back Image</p>
                    <img src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->back_image); ?>" class="w-50" alt="images"/>
                </div>
            </div>
            <input type="hidden" value="" name="status" id="status">
            <input type="hidden" name="customer_id" value="<?php echo e($data->id); ?>">
            <div class=" d-flex justify-content-center w-100">
                    <?php if($data->status == 0): ?>
                        <button type="button" class="btn btn-success mr-2" onclick="statusChange(1)"> Accept </button>
                        <button type="button" class="btn btn-danger" onclick="statusChange(2)"> Reject </button>
                    <?php endif; ?>
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
            </div>

            
          </div>
      </div>
      <script>
      function statusChange(id) {
            $('#status').val(id);
            $('#statusForm').submit();
      }
      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/customer/view.blade.php ENDPATH**/ ?>