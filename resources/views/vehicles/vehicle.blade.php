@extends('layouts.layout')

@section('header','Veicoli per ID Veicolo')

@section('content')



    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-striped">
            <thead>
            <tr>
                <th>id Veicolo</th>
                <th>id Customer</th>
                <th>Modello</th>

            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>  <p for="name" class="col-sm-3 control-label">{{$vehicle->id}}</p> </td>
                    <td>  <p for="name" class="col-sm-3 control-label">{{$vehicle->ownerid}}</p> </td>
                    <td>  <p for="name" class="col-sm-3 control-label">{{$vehicle->model}}</p> </td>
                </tr>
            </tbody>
        </table>

    </div>

@endsection