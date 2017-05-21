@extends('layouts.layout')

@section('header','Ricerca Veicoli')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


    <!-- New Task Form -->
        <form action="/vehicles/search" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">ID Veicolo</label>

                <div class="col-sm-6">
                    <input type="text" name="id" id="task-name" class="form-control">
                </div>


            </div>

            <div class="form-group">
                <label for="surname" class="col-sm-3 control-label">ID Customer</label>

                <div class="col-sm-6">
                    <input type="text" name="ownerid" id="task-name" class="form-control">
                </div>


            </div>

            <div class="form-group">
                <label for="surname" class="col-sm-3 control-label">Modello</label>

                <div class="col-sm-6">
                    <input type="text" name="model" id="task-name" class="form-control">
                </div>


            </div>



            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection