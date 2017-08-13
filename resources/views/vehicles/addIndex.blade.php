@extends('layouts.main')

@section('title','Add a new vehicle')
@section('header','Add a new vehicle')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Bootstrap Boilerplate... -->
    <link rel="stylesheet" href="{{asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css")}}">

    <div class="panel-body">
        <!-- Display Validation Errors -->
        <!-- New Task Form -->
        <form action="/vehicles/add" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="ownerid" class="col-sm-3 control-label">Owner ID</label>
                <div class="col-sm-6">
                    <input type="text" name="owneridshow" id="task-name" class="form-control" value="{{$ownerid}}"
                           disabled="disabled">
                    <input type="hidden" name="ownerid" id="task-name" class="form-control" value="{{$ownerid}}">
                </div>
            </div>

            <div class="form-group">
                <label for="model" class="col-sm-3 control-label">Model</label>
                <div class="col-sm-6">
                    <input type="text" name="model" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="plate" class="col-sm-3 control-label">Plate</label>
                <div class="col-sm-6">
                    <input type="text" name="plate" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="chassis" class="col-sm-3 control-label">Chassis Number</label>
                <div class="col-sm-6">
                    <input type="text" name="chassis" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="enginecode" class="col-sm-3 control-label">Engine Code</label>
                <div class="col-sm-6">
                    <input type="text" name="enginecode" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="kilometers" class="col-sm-3 control-label">Kilometers</label>
                <div class="col-sm-6">
                    <input type="text" name="kilometers" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="matriculation" class="col-sm-3 control-label">Matriculation</label>
                <div class="col-sm-6">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="matriculation" class="form-control pull-right" id="datepicker">
                    </div>
                </div>
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default center-block">
                        <i class="fa fa-plus"></i> Add
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="{{asset("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js")}}"></script>
    <script src="{{asset("/js/add_vehicle.js")}}"></script>
    <!-- TODO: Current Tasks -->
@endsection