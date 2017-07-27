@extends('layouts.layout')

@section('title','Vehicles Details')
@section('header','Vehicles Details')

@section('content')



    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Owner ID</th>
                <th>Model</th>
                <th>Plate</th>
                <th>Chassis</th>
                <th>Engine Code</th>
                <th>Kilometers</th>
                <th>Matriculation</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td><p for="id" class="col-sm-3 control-label">{{$vehicle->id}}</p></td>
                <td><p for="ownerid" class="col-sm-3 control-label"><a
                                href="/customers/{{$vehicle->ownerid}}">{{$vehicle->ownerid}}</a></p></td>
                <td><p for="model" class="col-sm-3 control-label">{{$vehicle->model}}</p></td>
                <td><p for="plate" class="col-sm-3 control-label">{{$vehicle->plate}}</p></td>
                <td><p for="chassis" class="col-sm-3 control-label">{{$vehicle->chassis}}</p></td>
                <td><p for="enginecode" class="col-sm-3 control-label">{{$vehicle->enginecode}}</p></td>
                <td><p for="kilometers" class="col-sm-3 control-label">{{$vehicle->kilometers}}</p></td>
                <td><p for="matriculation" class="col-sm-3 control-label">{{$vehicle->matriculation}}</p></td>
                <td>
                    <a href="/jobs/add/{{$vehicle->id}}"><input type="button" value="New Job"/></a>
                </td>
                <td>
                    <a href="/jobs/search/{{$vehicle->id}}"><input type="button" value="List Job"/></a>
                </td>
            </tr>
            </tbody>
        </table>

    </div>

@endsection