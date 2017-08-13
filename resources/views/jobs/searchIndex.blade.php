@extends('layouts.main')

@section('title','Search Jobs')
@section('header','Search Jobs')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


        <!-- New Task Form -->
        <form action="/jobs/search" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="vehicleid" class="col-sm-3 control-label">Vehicle ID</label>
                <div class="col-sm-6">
                    <input type="text" name="vehicleId" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="jobdate" class="col-sm-3 control-label">Job Date</label>
                <div class="col-sm-6">
                    <input type="text" name="jobdate" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="amount" class="col-sm-3 control-label">Amount</label>
                <div class="col-sm-6">
                    <input type="text" name="amount" id="task-name" class="form-control">
                </div>
            </div>


            <div class="form-group">
                <label for="completed" class="col-sm-3 control-label">Completed</label>
                <div class="col-sm-6">
                    <select name="completed" class="form-control">
                        <option value="0" selected>False</option>
                        <option value="1">True</option>
                    </select>
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