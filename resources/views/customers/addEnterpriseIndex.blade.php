@extends('layouts.layout')

@section('title','Add a new Enterprise Customer')
@section('header','Add a new Enterprise Customer')

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
        <form action="/customers/add" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group hidden">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group hidden">
                <label for="surname" class="col-sm-3 control-label">Surname</label>
                <div class="col-sm-6">
                    <input type="text" name="surname" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="nominative" class="col-sm-3 control-label">Nominative</label>
                <div class="col-sm-6">
                    <input type="text" name="nominative" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group hidden">
                <label for="ssn" class="col-sm-3 control-label">SSN</label>
                <div class="col-sm-6">
                    <input type="text" name="ssn" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="vat_number" class="col-sm-3 control-label">VAT Number</label>
                <div class="col-sm-6">
                    <input type="text" name="vat_number" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" name="address" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="zipcode" class="col-sm-3 control-label">Zip Code</label>
                <div class="col-sm-6">
                    <input type="text" name="zipcode" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="city" class="col-sm-3 control-label">City</label>
                <div class="col-sm-6">
                    <input type="text" name="city" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="telephone" class="col-sm-3 control-label">Telephone</label>
                <div class="col-sm-6">
                    <input type="text" name="telephone" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="fax" class="col-sm-3 control-label">Fax</label>
                <div class="col-sm-6">
                    <input type="text" name="fax" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="task-name" class="form-control" value="">
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