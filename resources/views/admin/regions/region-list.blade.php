
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
            <i class="glyphicon glyphicon-plus"></i> Add New Region</a>
            </span>
            <br>
            <br>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Region List</h4>
                  <h4 class="card-title pull-right">Today is: {{ date('d-m-Y', time()) }}</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  @if ( count($region) > 0 ) 
                    <table class="table">
                      <thead class=" text-primary">
                      <th>Action</th>
                      <th>ID</th>
                    <th>Region Name</th>
                    <th>Region Code</th>
                    <th>Status</th>
                    <th>Created Date</th>
                    </thead>
                    <tbody>
                    @foreach ( $region as $data )
                      <tr>
                      <td>
                        <form method="post" action="{{route('region.destroy',$data->region_id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        </td>
                        <td>{{ $data->region_id }}</td>
                        <td><a data-toggle="modal" data-target="#exampleModalCenterviewOperator
                            {{$data->reagion_id}}"data-toggle="tooltip">{{ $data->region_name }}</a></td>
                        <td>{{ $data->region_code }}</td>
                        <td>{{ $data->status }} 
                             {{-- echo" In Active"
                            @else
                            echo" Active" 
                            @endif --}}
                        </td>
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
            @include('admin.regions.add-region')
            @include('admin.regions.add-region')
@endsection