@extends('layouts.master')
@section('content')
    <div class="container-fluid">
          <div class="row">
            <form class="company-creation-form" method="post" action="{{URL::to('details/save')}}" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Distributor Name</label>
                  <input type="text" name="name" class="form-control" value="@if(isset($data->name)){{ $data->name }} @endif" id="exampleCompanyName1" aria-describedby="emailHelp" placeholder="Enter Distributor Name">
                  <span style="color:red;">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Distributor Address</label>
                  <textarea name="address" class="form-control">@if(isset($data->address)){{ $data->address }} @endif</textarea>
                  <span style="color:red;">{{ $errors->first('address') }}</span>
                </div>
                  @csrf
                  @method('post')
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
      
@endsection