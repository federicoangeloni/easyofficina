@extends('layouts.main')

@section('title','Search Vehicles')
@section('header','Search Vehicles')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


        <!-- New Task Form -->
        <form action="/vehicles/search" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="ownerid" class="col-sm-3 control-label">Owner ID</label>
                <div class="col-sm-6">
                    <input type="text" name="ownerid" id="task-name" class="form-control">
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
                    <input type="text" name="matriculation" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default center-block">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
            </div>

        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection