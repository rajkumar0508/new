
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
      <h5 class="text-center">New Entry </h5> 
      <?php if($errors->any()): ?>
         <span style="color:red"><?php echo e($errors->first()); ?></span>
      <?php endif; ?>
      <div class="stock">
            <p>Available Stock </p>
            <ul>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($key->product->name); ?> <span class="my-2">:</span><span><?php echo e($key->avilable_qty); ?> <?php if($key->product->unit->name != 'Number'): ?> <?php echo e($key->product->unit->name); ?> <?php endif; ?></span> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- <li>Red 20mm <span class="my-2">:</span><span>0.00 Mtrs</span> </li>
            <li>Red 20mm <span class="my-2">:</span><span>0.00 Mtrs</span> </li>
            <li>Red 20mm <span class="my-2">:</span><span>0.00 Mtrs</span> </li>
            <li>Red 20mm <span class="my-2">:</span><span>0.00 Mtrs</span> </li>
            <li>Red 20mm <span class="my-2">:</span><span>0.00 Mtrs</span> </li>
            <li>Red 20mm <span class="my-2">:</span><span>0.00 Mtrs</span> </li> -->
      </div>
          <div class="row">
         
            <form class="company-creation-form" action="<?php echo e(URL::route('customer.store')); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="text" class="form-control datepick" id="exampleCompanyName1" autocomplete="off" name="date" aria-describedby="emailHelp">
                  <span style="color:red"><?php echo e($errors->first('date')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Vehicle RegNo:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="vehicle_no" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('vehicle_no')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> Vehicle Manufacturing Year:</label>
                  <input type="number" class="form-control" id="exampleCompanyName1" name="vehicle_year" aria-describedby="emailHelp" placeholder="">
                  <span style="color:red"><?php echo e($errors->first('vehicle_year')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Chassis No:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="class_no" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('class_no')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> Engine No:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="engine_no" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('engine_no')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> Vechicle Make:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="vehicle_make" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('vehicle_make')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Vechicle Model:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="vehicle_model" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('vehicle_model')); ?> </span>
                </div>
              
                <div class="form-group">
                  <label for="exampleInputEmail1"> Owner Name</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="owner_name" aria-describedby="emailHelp" placeholder="Enter Name">
                  <span style="color:red"><?php echo e($errors->first('owner_name')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="number" class="form-control" id="exampleCompanyName1" name="phone" aria-describedby="emailHelp" placeholder="Enter Mobile number">
                  <span style="color:red"><?php echo e($errors->first('phone')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                  <span style="color:red"><?php echo e($errors->first('address')); ?> </span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">RTO</label>
                    <input type="text" class="form-control"  value="<?php echo e($rto->rto->email); ?>" id="exampleFormControlInput1" placeholder="" readonly>
                    <input type="hidden" class="form-control" name="rto_id" value="<?php echo e($rto->rto->id); ?>" id="exampleFormControlInput1" placeholder="" readonly>
                </div>
                
            <div class="border-bottom mb-3">
               <h6 class="text-center"> Reflective Tape details </h6>
            </div>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><?php echo e($key->product->name); ?>:</label>
                <div class="col-sm-8 parentclass">
                    <input type="text" class="form-control quantity-enter company-<?php echo e($key->product->company->id); ?>" id="" placeholder="" autocomplete="off" name="quantity[]" onkeyup="qtyCheck(this, 0 , <?php echo e($key->avilable_qty); ?>, <?php echo e($key->product->company->id); ?>)">
                    <input type="hidden" class="form-control" name="product[]" value="<?php echo e($key->product->id); ?>" placeholder="" value="<?php echo e($key->avilable_qty); ?>">
                    <span style="color:green" >Avilable count: <span class="availability"><?php echo e($key->avilable_qty); ?></span></span>
                </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
            <!-- <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Class 3:</label>
              <div class="col-sm-8">
                <input type="" class="form-control" id="" placeholder="" name="class_3">
                <span style="color:red"><?php echo e($errors->first('class_3')); ?> </span>
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Class 4:</label>
              <div class="col-sm-8">
                <input type="" class="form-control" id="" placeholder="" name="class_4">
                <span style="color:red"><?php echo e($errors->first('class_4')); ?> </span>
              </div>
            </div> -->
            <div class="border-bottom mb-3">
               <h6 class="text-center"> Images</h6>
            </div>
            <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Front Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="front_image">
                    <span style="color:red"><?php echo e($errors->first('front_image')); ?> </span> 
            </div>
            <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Left Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="left_image">
                    <span style="color:red"><?php echo e($errors->first('left_image')); ?> </span>
            </div>
            <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Right  Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="right_image">
                    <span style="color:red"><?php echo e($errors->first('right_image')); ?> </span>
            </div>
            <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Back Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="back_image">
                    <span style="color:red"><?php echo e($errors->first('back_image')); ?> </span>
            </div>    
            <div class="text-center">
            <button type="submit" class="btn btn-primary w-50">Save</button>
            </div>
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
              
              </form>
          </div>
      </div>
      <script>

function qtyCheck(obj, enteredQty, avilableQty, companyId) {
          var val = $(obj).val();
          if(val > enteredQty + avilableQty) {
              swal('Alert', 'Quantity Exceeds');
              $(obj).val(enteredQty);
              $(obj).parents('div.parentclass').find('.availability').html(avilableQty); 
          } else {
            var minus = val - enteredQty;
            $(obj).parents('div.parentclass').find('.availability').html(avilableQty-minus); 
          }

           var value = 0;
          $( ".quantity-enter" ).each(function( index ) {
                if($(this).val() != '') {
                  value = 1;
                }
               if(!$(this).hasClass('company-'+companyId)) {
                  $(this).attr('readonly','readonly');
               }
          });
         if(value == 0) {
            $('.quantity-enter').removeAttr('readonly');
         }
      }


      $('.datepick').datepicker({
	language: 'en',
    dateFormat: "yyyy-mm-dd"
	})
      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/customer/create.blade.php ENDPATH**/ ?>