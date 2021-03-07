
<?php $__env->startSection('content'); ?>

<form class="content container-fluid my-3" action="<?php echo e(URL::route('purchase.store')); ?>" method='post'>
		<div class="card">
		<div class="card-header bg-light">
			<h2>Purchase Order</h2>
		</div>
		<div class="card-body p-3">
            <div class="row">
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div class="form-group">
					<label>Purchase Order#</label>
					<input type="text" placeholder="" name="order_number" value="<?php echo e($purchaseId); ?>" readonly class="form-control">
					<span style="color:red"><?php echo e($errors->first('order_number')); ?> </span>
				</div>
			</div>
			
			<div class="col-md-6 col-lg-4 col-xl-3">
				<div class="form-group">
					<label>Order Date</label>
					<input type="text" autocomplete="off" required class="datepick form-control"  name="order_date" value="<?php echo e(old('order_date')); ?>">
					<span style="color:red"><?php echo e($errors->first('order_date')); ?> </span>
				</div>
			</div>
			<div class="col-md-12">
			<div class="table-responsive">
<table id="purchase_table" class="order-table controls table table-light table-bordered table-striped table-hover">
	<thead>
	<tr>
		<th colspan="1">Company</th>
        <th>Product</th>
		<th>Unit</th>
		<th width="100">Quantity</th>
		</tr>
	</thead>
	<tbody>
	<?php if(old('company_id') == ''): ?>
	<tr class="entry">
		<td><select id="new_brand" name="company_id[]" class="form-control company_list" onchange="getProduct(this);" required>
        <option value="">Select Company</option>
                        <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </select>
			<span style="color:red"><?php echo e($errors->first('company_id[]')); ?> </span>
		</td>
        
		<td>
			<select id="new_item"  name="product_id[]" required class="form-control product_list brand-creation" onchange="item_change(this);" >
            <option value="">Select Product</option>
			</select>
			<span style="color:red"><?php echo e($errors->first('product_id')); ?> </span>
		</td>
		<td><input type="text" readonly class="form-control unit"></td>
		<td><input type="text" id="new_qty" name="quantity[]" class="form-control quantity" placeholder="Qty"  required>
			<span style="color:red"><?php echo e($errors->first('quantity')); ?> </span>
		</td>
		
		<td><input type="button" class="add btn-adds btn-success" onclick="" value="+">
		</td>
		</tr>
		<?php else: ?>
		<?php $__currentLoopData = old('company_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va1=>$key1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr class="entry">
		<td><select id="new_brand" name="company_id[]" class="form-control company_list" onchange="getProduct(this);" >
			 <option value="">Select Company</option>
				<?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va=>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 	<option value="<?php echo e($key->id); ?>"<?php if($key1== $key->id): ?> selected <?php endif; ?> ><?php echo e($key->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </select>
			<span style="color:red"><?php echo e($errors->first('company_id.*')); ?> </span>
		</td>
		<td>
			 <?php $items =  DB::table('products')->where('company_id',old('company_id')[$va1])->get();  ?>
			<select id="new_item"  name="product_id[]" class="form-control product_list brand-creation" onchange="item_change(this);">
				<option value="">Select Product</option>
				<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va2=>$key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>			   		
				    <option value="<?php echo e($key2->id); ?>"<?php if(old('product_id')[$va1]== $key2->id): ?> selected <?php endif; ?> ><?php echo e($key2->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			<span style="color:red"><?php echo e($errors->first('product_id.*')); ?> </span>
		</td>
		<td><input type="text" readonly class="form-control unit"></td>
		<td><input type="text" id="new_qty" name="quantity[]" placeholder="Quantity" class="quantity" value="<?php echo e(old('quantity')[$va1]); ?>">
			<span style="color:red"><?php echo e($errors->first('quantity.*')); ?> </span>
		</td>
		
		<td><input type="button" class="add btn-adds" onclick="" value="Add Row">
		</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</tbody>

</table>
</div>			
		<div class="form-footer">
 
			<button class="btn btn-primary" href="#">Submit</button>
			<a class="btn btn-danger" href="<?php echo e(URL::to('admin/purchase')); ?>">Cancel</a>
			
			 <?php echo e(method_field('POST')); ?>

              <?php echo e(csrf_field()); ?>

			
		</div>	
			
			</div>
			</div>
			</div></div>
	</form>	
	
	
	
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create item</h4>
      </div>
		<form>
      <div class="modal-body">
          <div class="form-body">

			<div class="">

				<div class="form-group">

					<label>Product name</label>

					<input type="text" placeholder="" name='product_name' value="" required>
                    
				</div>

			</div>
      </div>
      </div>
      <div class="modal-footer">
		   <button type="button" class="btn btn-success" onclick="submits(this)">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	   </form>
    </div>

  </div>
</div>
<script>
	 $('.brand-create').select2({
            theme: 'bootstrap4',
        });
	$('.item-create').select2({
            theme: 'bootstrap4',
        });
	
	/*$('.brand-create')
	.select2()
	.on('select2:open', () => {
	$(".select2-results:not(:has(a))").append('<a onclick="create_item()">Create new brand</a>');
	});
	
	$('.item-create')
	.select2()
	.on('select2:open', () => {
	$(".select2-results:not(:has(a))").append('<a href="item-creation.php" style="font-size:13px;line-height:1.6;display: inline-table;">Create new item</a>');
	});*/
	
	$('.datepick').datepicker({
	language: 'en',
    dateFormat: "yyyy-mm-dd"
	})
	
	function status_change(tis)
	{
		if($(tis).val() == 2)
		{
			$('#pay_type').attr('style','display:inline');
		}
		else
		{
			$('#pay_type').attr('style','display:none');
		}
	}
    function getProduct(obj) {
        var val = obj.value;
		var base_url = "<?php echo e(URL::to('/')); ?>";
		$.ajax({
			url: base_url+'/products',
			type: 'get',
			data: { company_id: val },
			dataType: "JSON",
			success: function(response) {
				 $(obj).parents('tr').find('.product_list').html("");
				$.each(response, function(key,val){
					  if(key == 0) {
                        $(obj).parents('tr').find('.product_list').append("<option value='' selected>Select Product</option>");
                      }
					  var html ="<option value="+val['id']+">"+val['name']+"</option>";							
					  $(obj).parents('tr').find('.product_list').append(html);
				});

			}
		  });	
    }
	function brand_change(tis)
	{		
		    
		
		var val = tis.value;
		var base_url = "<?php echo e(URL::to('/')); ?>/";
		//var html ="<option  selected>Select Brand</option>";	
		$.ajax({
			url: base_url+'brand-by-item',
			type: 'get',
			data: { product_id: val },
			dataType: "JSON",
			success: function(response){ 
				var obj = response;
				// var html ="<option value="" selected>Select Brand</option>";	
				 $(tis).parents('tr').find('.item-create').html("");
				$.each(obj, function(key,val){
					  if(key == 0)
						   $(tis).parents('tr').find('.item-create').append("<option value='' selected>Select item</option>");
					  var html ="<option value="+val['id']+">"+val['name']+"</option>";							
					  $(tis).parents('tr').find('.item-create').append(html);
				});

			}
		  });	
			
	}
	function item_change(tis)
	{
		var base_url = "<?php echo e(URL::to('/')); ?>/";
		//var html ="<option  selected>Select Brand</option>";	
		var val = $(tis).val();
		$.ajax({
			url: base_url+'admin/unit-by-product',
			type: 'get',
			data: { product_id: val },
			//dataType: "JSON",
			success: function(response){ 
				 $(tis).parents('tr').find('.unit').val(response);
				 $(tis).parents('tr').find('.quantity').val(0);
			}
		  });	
	}
	
	function delivery_addr(tis)
	{
           
        if($('#vendor_id').val() =='')
		{
			alert('please select a vendor');
			$("option:selected").prop("selected", false)
			//$('#delivery_to').prop("selected",false);
			return false;
		}
		if(tis.value == 3)
		{
			   $("#address").attr('readonly',false);
			   $('#address').html('');
		}
		else
		{
			var contactId =$('#vendor_id').val();
			
				var val = tis.value;
					var base_url = "<?php echo e(URL::to('/')); ?>/";
					
					$.ajax({
						url: base_url+'address',
						type: 'get',
						data: { contactId: contactId ,address_id:val },
						//dataType: "JSON",
						success: function(response){
							 $("#address").attr('readonly',false);
							 $('#address').html('');
							$("#address").html(response);
							$("#address").attr('readonly',true);	
														//console.log(response['available']);
								//$(tis).parents('tr').find(".rate").val(parseInt(response));		
						}
					  });		
				 //$('#new_address').attr('style','display:none');
		}
	}
	$(document).on('keypress', '.quantity', function() {
		var unit = $(this).parents('tr').find(".unit").val();
		if(unit == 'Metre') {
			return isNumberDecimal();
		} else {
			return isNumber();
		}
    });
	
	function isNumberDecimal(evt, element) {
			var charCode = (evt.which) ? evt.which : evt.keyCode
			if (
				(charCode != 45 || $(element).val().indexOf('-') != -1) &&      // “-” CHECK MINUS, AND ONLY ONE.
				(charCode != 46 || $(element).val().indexOf('.') != -1) &&      // “.” CHECK DOT, AND ONLY ONE.
				(charCode < 48 || charCode > 57))
				return false;
			return true;
	} 
	function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			}
			return true;
	}
	

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u269893594/domains/easyachievers.in/public_html/universal/resources/views/admin/purchase/create.blade.php ENDPATH**/ ?>