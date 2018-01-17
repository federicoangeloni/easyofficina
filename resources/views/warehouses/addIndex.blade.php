@extends('layouts.main')

@section('title','Add a new Warehouse')
@section('header','Add a new Warehouse')

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

    <div class="panel-body">
        <!-- Display Validation Errors -->


        <!-- New Task Form -->
        <form action="/warehouses/add" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" name="address" id="task-name" class="form-control" value="">
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

    <!-- TODO: Current Tasks -->
@endsection