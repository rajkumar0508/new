@extends('layouts.master')
@section('content')
<div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" action="{{ route('lessions.update', $data['id']) }}" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Lession Name</label>
                  <input type="text" class="form-control" value="{{ $data['name'] }}" name="name" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Product Name">
                  <span style="color:red;">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Course</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="company_id">
                    <option value="">Select Course</option>
                    @foreach($company as $va=>$key)
                    <option @if($data['company_id'] == $key->id) selected @endif value="{{ $key->id }}">{{ $key->name }}</option>
                    @endforeach
                    </select>
                    <span style="color:red;">{{ $errors->first('company_id') }}</span>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea  class="form-control"  name="description" >{{ $data['description'] }}</textarea>
                  <span style="color:red;">{{ $errors->first('description') }}</span>
                </div>
               <div class="table-responsive">
				<table id="purchase_table" class="order-table controls table table-light table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th colspan="1">Youtube Link</th>					   
						</tr>
					</thead>
					<tbody>
					@if(count($data['youtube'] )== 0)
					<tr class="entry">						
						<td><input type="text"  name="youtube[]" class="form-control unit"></td>					
						<td><input type="button" class="add btn-adds btn-success" onclick="" value="+">
						</td>
					</tr>
					@else
					@foreach($data['youtube'] as $va1=>$key1)
					<tr class="entry">						
						<td><input type="text" name="youtube[]" value="{{ $key1['youtube'] }}"  class="form-control unit"></td>						
						<td>
							 @if(count($data['youtube']) == $va1+1)
							 <input type="button" class="add btn-adds btn-success" onclick="" value="+">
							 @else
							<input type="button" class="add btn-removes btn-danger" onclick="" value="-">
							@endif
						</td>
					</tr>
					@endforeach
					@endif
					</tbody>
				</table>
				</div>	
                @csrf
                @method('PUT')
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
@endsection