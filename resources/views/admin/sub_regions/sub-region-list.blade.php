
@extends('layouts.header')
@section('content') 
<!-- <div class="navbar-wrapper">
<a class="navbar-brand text-black " href="#pablo">Bus List</a>
 </div> -->
@include('admin.message')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <span class="pull-center">
            <a href="#" data-toggle="modal" data-target="#exampleModalCenteraddbus" 
            data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
            <i class="glyphicon glyphicon-plus"></i> Add New Sub Region</a>
            </span>
            <br>
            <br>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Sub Region List</h4>
                  <h4 class="card-title pull-right">Today is: {{ date('d-m-Y', time()) }}</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  @if ( count($sub_region) > 0 ) 
                    <table class="table">
                      <thead class=" text-primary">
                      <th>Action</th>
                      <th>ID</th>
                    <th>Region Name</th>
                    <th>Sub Region Name</th>
                    <th>Sub Region Code</th>
                    <th>Created Date</th>
                    </thead>
                    <tbody>
                    @foreach ( $sub_region as $key => $data )
                      <tr>
                      <td>
                        <form method="post" action="{{route('sub-region.destroy',$data->sub_region_id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        </td>
                        <td>{{ ++$key }}</td>
                        <td>{{ $data->reagion_id }}</td>
                        <td><a data-toggle="modal" data-target="#exampleModalCenterviewOperator
                            {{$data->sub_reagion_id}}"data-toggle="tooltip">{{ $data->sub_reagion_name }}</a></td>
                        <td>{{ $data->sub_reagion_code }}</td>
                        <td>{{ $data->created_at }}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              @endif 
                 </div>
                </div>
              </div>
            </div>
            </div>
            </div>
            </div>
            @include('admin.sub_regions.add-sub-region')
            @include('admin.sub_regions.add-sub-region')
@endsection