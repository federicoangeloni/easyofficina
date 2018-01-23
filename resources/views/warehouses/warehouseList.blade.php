@extends('layouts.main')

@section('title','List all Customers')
@section('header','List all Customers')

@section('content')


    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-hover table-striped">

            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Description</th>
            </tr>
            </thead>

            <tbody>
            @foreach($warehouses as $warehouse)
                <tr>
                    <td><p for="name" class="col-sm-3 control-label">{{$warehouse->id}}</p></td>-
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$warehouse->name}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$warehouse->address}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$warehouse->description}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$warehouse->address}}</p></td>
                    <td>
                        <a href="/warehouses/{{$warehouse->id}}"><input type="button" class="btn btn-flat btn-primary"
                                                                      value="Show Details"/></a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
@endsection