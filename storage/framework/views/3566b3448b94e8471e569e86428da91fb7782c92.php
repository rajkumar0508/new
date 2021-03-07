
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
      <h5 class="text-center">New Entry </h5> 
      <div class="stock">
            <p>Available Stock </p>
            <ul>
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
         
            <form class="company-creation-form" action="<?php echo e(URL::route('customer.update', $data->id)); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="text" class="form-control datepick" id="exampleCompanyName1" autocomplete="off" value="<?php echo e($data->date); ?>" name="date" aria-describedby="emailHelp">
                  <span style="color:red"><?php echo e($errors->first('date')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Vehicle RegNo:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" value="<?php echo e($data->vehicle_no); ?>" name="vehicle_no" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('vehicle_no')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> Vehicle Manufacturing Year:</label>
                  <input type="number" class="form-control" id="exampleCompanyName1" name="vehicle_year" value="<?php echo e($data->vehicle_year); ?>" aria-describedby="emailHelp" placeholder="">
                  <span style="color:red"><?php echo e($errors->first('vehicle_year')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Chassis No:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="class_no"  value="<?php echo e($data->class_no); ?>" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('class_no')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> Engine No:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="engine_no" value="<?php echo e($data->engine_no); ?>" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('engine_no')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> Vechicle Make:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="vehicle_make" value="<?php echo e($data->vehicle_make); ?>" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('vehicle_make')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Vechicle Model:</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="vehicle_model" value="<?php echo e($data->vehicle_model); ?>" aria-describedby="emailHelp" placeholder="Enter Vehicle Number">
                  <span style="color:red"><?php echo e($errors->first('vehicle_model')); ?> </span>
                </div>
              
                <div class="form-group">
                  <label for="exampleInputEmail1"> Owner Name</label>
                  <input type="text" class="form-control" id="exampleCompanyName1" name="owner_name" value="<?php echo e($data->owner_name); ?>" aria-describedby="emailHelp" placeholder="Enter Name">
                  <span style="color:red"><?php echo e($errors->first('owner_name')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="number" class="form-control" id="exampleCompanyName1" name="phone" value="<?php echo e($data->phone); ?>" aria-describedby="emailHelp" placeholder="Enter Mobile number">
                  <span style="color:red"><?php echo e($errors->first('phone')); ?> </span>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"><?php echo e($data->address); ?></textarea>
                  <span style="color:red"><?php echo e($errors->first('address')); ?> </span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">RTO</label>
                    <input type="text" class="form-control"  value="<?php echo e($data->rto->email); ?>" id="exampleFormControlInput1" placeholder="" readonly>
                    <input type="hidden" class="form-control" name="rto_id" value="<?php echo e($data->rto->id); ?>" id="exampleFormControlInput1" placeholder="" readonly>
                </div>
                
            <div class="border-bottom mb-3">
               <h6 class="text-center"> Reflective Tape details </h6>
            </div>
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $qty = 0 ; ?>
                <?php $__currentLoopData = $data->tapes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va1=>$key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key1->product_id == $key->product_id): ?>
                       <?php 
                       if($key1->qty == null || $key1->qty == '') {
                           $qty = 0;
                       } else {
                          $qty = $key1->qty;  
                       }
                        ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label"><?php echo e($key->product->name); ?>:</label>
                        <div class="col-sm-8 parentclass">
                            <input type="text" class="form-control quantity-enter company-<?php echo e($key->product->company->id); ?>"  <?php if($qty == 0 || $qty == NULL): ?> readonly <?php endif; ?> value="<?php echo e($qty); ?>" id="" placeholder="" autocomplete="off" name="quantity[]" onkeyup="qtyCheck(this, <?php echo e($qty); ?>, <?php echo e($key->avilable_qty); ?>, <?php echo e($key->product->company->id); ?>)">
                            <input type="hidden" class="form-control" name="product[]" value="<?php echo e($key->product->id); ?>" placeholder="" value="<?php echo e($key->avilable_qty); ?>">
                            <span style="color:green" >Avilable count: <span class="availability"><?php echo e($key->avilable_qty); ?></span></span>
                        </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
            <!-- <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Class 3:</label>
              <div class="col-sm-8">
                <input type="" class="form-control" id="" placeholder="" name="class_3" value="<?php echo e($data->class_3); ?>">
                <span style="color:red"><?php echo e($errors->first('class_3')); ?> </span>
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Class 4:</label>
              <div class="col-sm-8">
                <input type="" class="form-control" id="" placeholder="" name="class_4" value="<?php echo e($data->class_4); ?>">
                <span style="color:red"><?php echo e($errors->first('class_4')); ?> </span>
              </div>
            </div> -->
            <div class="border-bottom mb-3">
               <h6 class="text-center"> Images</h6>
            </div>

            <div class="form-group choose-image" >
                    <label for="exampleFormControlFile1">Front Image</label>
                    <input type="file" name="front_image" class="form-control-file" id="exampleFormControlFile1"  accept="image/png, image/jpeg" onchange="$('#frontEdit').remove()">
                    <span style="color:red;"><?php echo e($errors->first('front_image')); ?></span>
                    <?php if(!$errors->first('front_image')): ?>
                        <div id="frontEdit">
                            <input type="hidden" value="<?php echo e($data->images->front_image); ?>" name="frontUploadedName">
                            <img width="100px"  height="70px;" src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->front_image); ?>"><i onclick="editDelete('frontEdit')" class="fas fa-trash-alt"></i>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group choose-image" >
                    <label for="exampleFormControlFile1">Left Image</label>
                    <input type="file" name="left_image" class="form-control-file" id="exampleFormControlFile1"  accept="image/png, image/jpeg" onchange="$('#leftEdit').remove()">
                    <span style="color:red;"><?php echo e($errors->first('left_image')); ?></span>
                    <?php if(!$errors->first('left_image')): ?>
                        <div id="leftEdit">
                            <input type="hidden" value="<?php echo e($data->images->left_image); ?>" name="leftUploadedName">
                            <img width="100px"  height="70px;" src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->left_image); ?>"><i onclick="editDelete('leftEdit')" class="fas fa-trash-alt"></i>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group choose-image" >
                    <label for="exampleFormControlFile1">Back Image</label>
                    <input type="file" name="back_image" class="form-control-file" id="exampleFormControlFile1"  accept="image/png, image/jpeg" onchange="$('#backEdit').remove()">
                    <span style="color:red;"><?php echo e($errors->first('back_image')); ?></span>
                    <?php if(!$errors->first('back_image')): ?>
                        <div id="backEdit">
                            <input type="hidden" value="<?php echo e($data->images->back_image); ?>" name="backUploadedName">
                            <img width="100px"  height="70px;" src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->back_image); ?>"><i onclick="editDelete('backEdit')" class="fas fa-trash-alt"></i>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group choose-image" >
                    <label for="exampleFormControlFile1">Right Image</label>
                    <input type="file" name="right_image" class="form-control-file" id="exampleFormControlFile1"  accept="image/png, image/jpeg" onchange="$('#rightEdit').remove()">
                    <span style="color:red;"><?php echo e($errors->first('right_image')); ?></span>
                    <?php if(!$errors->first('right_image')): ?>
                        <div id="rightEdit">
                            <input type="hidden" value="<?php echo e($data->images->right_image); ?>" name="rightUploadedName">
                            <img width="100px"  height="70px;" src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->right_image); ?>"><i onclick="editDelete('rightEdit')" class="fas fa-trash-alt"></i>
                        </div>
                    <?php endif; ?>
                </div>


            <!-- <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Front Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="front_image">
                    <img src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->front_image); ?>">
                    <span style="color:red"><?php echo e($errors->first('front_image')); ?> </span> 
            </div> -->
            <!-- <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Left Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="left_image">
                    <img src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->front_image); ?>">
                    <span style="color:red"><?php echo e($errors->first('left_image')); ?> </span>
            </div> -->
            <!-- <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Right  Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="right_image">
                    <img src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->front_image); ?>">
                    <span style="color:red"><?php echo e($errors->first('right_image')); ?> </span>
            </div> -->
            <!-- <div class="form-group choose-image">
                    <label for="exampleFormControlFile1">Back Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="back_image">
                    <img src="<?php echo e(URL::to('uploads/customer')); ?>/<?php echo e($data->images->front_image); ?>">
                    <span style="color:red"><?php echo e($errors->first('back_image')); ?> </span>
            </div>     -->
            <div class="text-center">
            <button type="submit" class="btn btn-primary w-50">Update</button>
            </div>
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
              
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
                if($(this).val() != '' && $(this).val() != 0) {
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/customer/edit.blade.php ENDPATH**/ ?>