@extends('layouts.layout')

<h1 class="text-center">Aggiungi un Nuovo Cliente</h1>

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
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="surname" class="col-sm-3 control-label">Cognome</label>
                <div class="col-sm-6">
                    <input type="text" name="surname" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="city" class="col-sm-3 control-label">Città</label>
                <div class="col-sm-6">
                    <input type="text" name="city" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="zipcode" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" name="address" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="zipcode" class="col-sm-3 control-label">CAP</label>
                <div class="col-sm-6">
                    <input type="text" name="zipcode" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="ssn" class="col-sm-3 control-label">Codice Fiscale</label>
                <div class="col-sm-6">
                    <input type="text" name="ssn" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="telephone" class="col-sm-3 control-label">Telefono</label>
                <div class="col-sm-6">
                    <input type="text" name="telephone" id="task-name" class="form-control">
                </div>
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Aggiungi
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection