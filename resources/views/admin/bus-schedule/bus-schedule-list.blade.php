
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
            <i class="glyphicon glyphicon-plus"></i> Generate new bus schedual</a>
            </span>
            <br>
            <br>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Bus Shedual List</h4>
                  <h4 class="card-title pull-right">Today is: {{ date('d-m-Y', time()) }}</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  @if ( count($busschedule) > 0 ) 
                    <table class="table">
                      <thead class=" text-primary">
                      <th>ID</th>
                    <th>Bus ID</th>
                    <th>Region</th>
                    <th>depart Date</th>
                    <th>depart time</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach ( $busschedule as $data )
                      <tr>
                        <td>{{ $data->operator_id }}</td>
                        <td>{{ $data->bus_id }}</a></td>
                        <td>{{ $data->reagion_id }}</td>
                        <td>{{ $data->depart_date }}</td>
                        <td>{{ $data->depart_time }}</td>
                        <td>
                          <form action="{{route('bus-schedule.destroy',$data->schedule_id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger" />
                            <input type="submit" name="submit" value="Edit" class="btn btn-sm btn-info" />
                            
                          </form>
                        </td>
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
            @include('admin.bus-schedule.add-bus-schedule')
            @include('admin.bus-schedule.add-bus-schedule')
@endsection