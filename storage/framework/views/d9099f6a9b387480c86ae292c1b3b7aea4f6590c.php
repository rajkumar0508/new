<?php $__env->startSection('content'); ?>
<div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" action="<?php echo e(route('lessions.update', $data['id'])); ?>" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Lession Name</label>
                  <input type="text" class="form-control" value="<?php echo e($data['name']); ?>" name="name" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Product Name">
                  <span style="color:red;"><?php echo e($errors->first('name')); ?></span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Course</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="company_id">
                    <option value="">Select Course</option>
                    <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php if($data['company_id'] == $key->id): ?> selected <?php endif; ?> value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span style="color:red;"><?php echo e($errors->first('company_id')); ?></span>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea  class="form-control"  name="description" ><?php echo e($data['description']); ?></textarea>
                  <span style="color:red;"><?php echo e($errors->first('description')); ?></span>
                </div>
               <div class="table-responsive">
				<table id="purchase_table" class="order-table controls table table-light table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th colspan="1">Youtube Link</th>					   
						</tr>
					</thead>
					<tbody>
					<?php if(count($data['youtube'] )== 0): ?>
					<tr class="entry">						
						<td><input type="text"  name="youtube[]" class="form-control unit"></td>					
						<td><input type="button" class="add btn-adds btn-success" onclick="" value="+">
						</td>
					</tr>
					<?php else: ?>
					<?php $__currentLoopData = $data['youtube']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va1=>$key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr class="entry">						
						<td><input type="text" name="youtube[]" value="<?php echo e($key1['youtube']); ?>"  class="form-control unit"></td>						
						<td>
							 <?php if(count($data['youtube']) == $va1+1): ?>
							 <input type="button" class="add btn-adds btn-success" onclick="" value="+">
							 <?php else: ?>
							<input type="button" class="add btn-removes btn-danger" onclick="" value="-">
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					</tbody>
				</table>
				</div>	
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
	  <script>
	  	$(document).on('click', '.btn-adds',function(e)
 {
	
		 $(".brand-create").select2('destroy');
		 $(".item-create").select2('destroy');
		
	var controlForm = $(this).parents('form').find('.controls tbody'),
		currentEntry = $(this).parents('.entry:first'),
		newEntry = $(currentEntry.clone()).appendTo(controlForm.parent());
    newEntry.find('select').eq(1).html('');
		 newEntry.find('select').eq(0).val("");
	newEntry.find('input').val('');
    newEntry.find('.btn-success').val('+');
	controlForm.find('.entry:not(:last) .btn-adds')
		.removeClass('btn-adds').addClass('btn-removes')
		.removeClass('btn-success').addClass('btn-danger')
		.val('-');

       // controlForm.find('.entry:last .btn-adds').html('<i class="fa fa-fw fa-minus"></i>');
		
		//$(this).parents('tr').find('.item-create').html('');
		$('.brand-create').select2({
            theme: 'bootstrap4',
        });
	$('.brand-create').select2({
            theme: 'bootstrap4',
        });
		//.select2()
		//.on('select2:open', () => {
		//$(".select2-results:not(:has(a))").append('<a onclick="create_item()">Create new brand</a>');
	//});
		$('.item-create').select2({
            theme: 'bootstrap4',
        });
		
		//.on('select2:open', () => {
		//$(".select2-results:not(:has(a))").append('<a href="item-creation.php" style="font-size:13px;line-height:1.6;display: inline-table;">Create new item</a>');
	//});
}).on('click', '.btn-removes', function(e)
{
	$(this).parents('.entry:first').remove();
	
	e.preventDefault();
	return false;
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\universal\resources\views/admin/lession/edit.blade.php ENDPATH**/ ?>