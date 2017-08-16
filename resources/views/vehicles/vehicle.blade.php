@extends('layouts.main')

@section('title','Vehicles Details')
@section('header','Vehicles Details')

@section('content')

    <!-- Display Validation Errors -->

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <h3 class="profile-username text-center">{{$vehicle->model}}</h3>

                    <p class="text-muted text-center">{{$vehicle->customer}}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Plate</b> <a class="pull-right">{{$vehicle->plate}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Chassis</b> <a class="pull-right">{{$vehicle->chassis}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>EngineCode</b> <a class="pull-right">{{$vehicle->enginecode}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kilometers</b> <a class="pull-right">{{$vehicle->kilometers}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Matriculation</b> <a class="pull-right">{{$vehicle->matriculation}}</a>
                        </li>

                    </ul>

                    <div class="row">
                        <div class="col-lg-3">
                            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Edit</b></a>
                        </div>
                        <div class="col-lg-3">
                            <a href="/jobs/search/{{$vehicle->id}}" class="btn btn-primary btn-block"><i
                                        class="fa fa-list"></i> <b> List Jobs</b> <i class="fa fa-wrench"></i></a>
                        </div>
                        <div class="col-lg-3">
                            <a href="/jobs/add/{{$vehicle->id}}" class="btn btn-primary btn-block"><i
                                        class="fa fa-plus"></i> <b> Add Job</b> <i class="fa fa-wrench"></i> </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="/vehicles/delete/{{$vehicle->id}}" class="btn btn-primary btn-block"><i
                                        class="fa fa-plus"></i> <b> Delete Vehicle</b> <i class="fa fa-wrench"></i> </a>
                        </div>


                    </div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>


@endsection