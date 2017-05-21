@extends('layouts.layout')


@section('header','Aggiungi un Nuovo Veicolo')

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
        <form action="/vehicles/add" method="POST" class="form-horizontal">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">ID Proprietario</label>
                <div class="col-sm-6">
                    <input type="text" name="ownerid" id="task-name" class="form-control" value="{{$ownerid}}">
                </div>
            </div>

        <!-- Task Name -->
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Modello</label>
                <div class="col-sm-6">
                    <input type="text" name="model" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="surname" class="col-sm-3 control-label">Targa</label>
                <div class="col-sm-6">
                    <input type="text" name="plate" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Numero Telaio</label>
                <div class="col-sm-6">
                    <input type="text" name="chassis" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="city" class="col-sm-3 control-label">Codice Motore</label>
                <div class="col-sm-6">
                    <input type="text" name="enginecode" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="zipcode" class="col-sm-3 control-label">Kilometraggio</label>
                <div class="col-sm-6">
                    <input type="text" name="kilometers" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="zipcode" class="col-sm-3 control-label">Immatricolazione</label>
                <div class="col-sm-6">
                    <input type="text" name="matriculation" id="task-name" class="form-control">
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