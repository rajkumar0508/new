@extends('layouts.master')
@section('content')  
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">RTO</h1>
      

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List</h6>
            </div> -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>RTO Code</th>
                      <th>RTO Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $va=>$key)
                    <tr>
                      <td>{{ $key['email'] }}</td>
                      <td>{{ $key['name'] }}</td>
                      <td>
                         <a href="{{ URL::route('rto.edit',$key['id']) }}"> <button type="button" class="btn btn-success" >Edit</button></a>
                          <form action="{{ URL::route('rto.destroy',$key['id'])}}" class="d-inline-block" method="post" id="product_delete_{{ $key['id'] }}">
                          <button type="button" class="btn btn-danger" onclick="companyDelete('product_delete_{{ $key['id'] }}')">Delete</button>
                            @csrf()
                            @method('DELETE')
                          </form> 
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
@endsection