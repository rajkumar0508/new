@extends('layouts.master')
@section('content')  
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Reports</h1>
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
                      <th>Company Name</th>
                      <th>Product Name</th>
                      <th>Unit</th>
                      <th>Total Qty</th>
                      <th>Out Qty</th>
                      <th>Available Qty</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $va=>$key)
                    <tr>
                      <td>{{ $key['company']['name'] }}</td>
                      <td>{{ $key['name'] }}</td>
                      <td>{{ $key['unit']['name'] }}</td>
                      <td>{{ $key['total_qty'] }}</td>
                      <td>{{ $key['out_qty'] }}</td>
                      <td>{{ $key['avilable_qty'] }}</td>
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