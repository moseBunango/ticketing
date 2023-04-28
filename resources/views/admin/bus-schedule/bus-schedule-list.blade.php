
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
                      <th>Operator</th>
                    <th>Bus</th>
                    <th>From</th>
                    <th>To</th>
                    <th>depart Date</th>
                    <th>depart time</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach ( $scheduleData as $name )
                   
                      <tr>
                        <td>{{$name->operator_name}}</td>
                        <td>{{$name->bus_name}}</a></td>
                        <td>{{$name->region_name}}</td>
                        <td>{{$name->to_region}}</td>
                        <td>everyday</td>
                        <td>{{$name->depart_time}}</td>
                        <td>
                      
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
            <!-- @include('admin.bus-schedule.add-bus-schedule')
            @include('admin.bus-schedule.add-bus-schedule') -->
@endsection