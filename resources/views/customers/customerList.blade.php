@extends('layouts.main')

@section('title','List all Customers')
@section('header','List all Customers')

@section('content')


    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-hover table-striped">

            <thead>
            <tr>
                {{--<th>id</th>--}}
                <th>Name</th>
                <th>Surname</th>
                <th>Nominative</th>
                <th>Address</th>
                {{--<th>ZIP Code</th>--}}
                {{--<th>City</th>--}}
                <th>VAT Number</th>
                <th>SSN</th>
                {{--<th>Telephone</th>--}}
                {{--<th>Fax</th>--}}
                {{--<th>Email</th>--}}
            </tr>
            </thead>

            <tbody>
            @foreach($customers as $customer)
                <tr>
                    {{--<td><p for="name" class="col-sm-3 control-label">{{$customer->id}}</p></td>--}}
                    <td><p for="name" class="col-sm-3 control-label">{{$customer->name}}</p></td>
                    <td><p for="name" class="col-sm-3 control-label">{{$customer->surname}}</p></td>
                    <td><p for="name" class="col-sm-3 control-label">{{$customer->nominative}}</p></td>
                    <td><p for="name" class="col-sm-12 control-label">{{$customer->address}}</p></td>
                    {{--<td><p for="name" class="col-sm-3 control-label">{{$customer->zipcode}}</p></td>--}}
                    {{--<td><p for="name" class="col-sm-3 control-label">{{$customer->city}}</p></td>--}}

                    <td><p for="name" class="col-sm-3 control-label">{{$customer->vat_number}}</p></td>
                    <td><p for="name" class="col-sm-3 control-label">{{$customer->ssn}}</p></td>
                    {{--<td><p for="name" class="col-sm-3 control-label">{{$customer->telephone}}</p></td>--}}
                    {{--<td><p for="name" class="col-sm-3 control-label">{{$customer->fax}}</p></td>--}}
                    {{--<td><p for="name" class="col-sm-3 control-label">{{$customer->email}}</p></td>--}}
                    <td>
                        <a href="/customers/{{$customer->id}}"><input type="button" class="btn btn-flat btn-primary"
                                                                      value="Show Details"/></a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
@endsection