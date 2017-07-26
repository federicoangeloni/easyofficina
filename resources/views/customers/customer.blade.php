@extends('layouts.layout')

@section('title','Customer Details')
@section('header','Customer Details')

@section('content')


    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Nominative</th>
                <th>Address</th>
                <th>ZIP Code</th>
                <th>City</th>
                <th>VAT Number</th>
                <th>SSN</th>
                <th>Telephone</th>
                <th>Fax</th>
                <th>Email</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->id}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->name}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->surname}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->nominative}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->address}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->zipcode}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->city}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->vat_number}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->ssn}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->telephone}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->fax}}</p></td>
                <td><p for="name" class="col-sm-3 control-label">{{$customer->email}}</p></td>
                <td>
                    <a href="/vehicles/add/{{$customer->id}}"><input type="button" value="Add Vehicle"/></a>
                </td>
                <td>
                    <a href="/vehicles/search/{{$customer->id}}"><input type="button" value="List Vehicles"/></a>
                </td>
            </tr>
            </tbody>

        </table>

    </div>

@endsection