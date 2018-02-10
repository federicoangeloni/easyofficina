@extends('layouts.main')

@section('title','Vehicles List')
@section('header','Vehicles List')
@section('PageName','Vehicles List')
@section('content')



    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{--<strong> VEHICLE LIST OF: <a href="/customers/{{$vehicles[0]->ownerid}}">{{$vehicles[0]->customer->name}}</a></strong>--}}
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Owner</th>
                <th>Model</th>
                <th>Plate</th>
                <th>Chassis</th>
                <th>Engine Code</th>
                <th>Kilometers</th>
                <th>Matriculation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehicles as $vehicle)

                <tr>

                    <td><p for="model" class="col-sm-3 col-lg-12 control-label"><a href="/customers/{{$vehicle->customer->id}}">{{$vehicle->customer->name}} {{$vehicle->customer->surname}}</a> </p></td>
                    <td><p for="model" class="col-sm-3 col-lg-12 control-label">{{$vehicle->model}}</p></td>
                    <td><p for="plate" class="col-sm-2 col-lg-12 control-label">{{$vehicle->plate}}</p></td>
                    <td><p for="chassis" class="col-sm-1 col-lg-12 control-label">{{$vehicle->chassis}}</p></td>
                    <td><p for="enginecode" class="col-sm-1 col-lg-12 control-label">{{$vehicle->enginecode}}</p></td>
                    <td><p for="kilometers" class="col-sm-2 col-lg-12 control-label">{{$vehicle->kilometers}}</p></td>
                    <td><p for="matriculation" class="col-sm-1 col-lg-12 control-label">{{$vehicle->matriculation}}</p></td>
                    <td>
                        <a href="/vehicles/{{$vehicle->id}}"><input type="button" class="btn btn-flat btn-primary"
                                                                    value="Show Details"/></a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>


    </div>

@endsection