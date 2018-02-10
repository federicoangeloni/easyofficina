@extends('layouts.main')

@section('title','Customer Details')
@section('header','Customer Details')
@section('PageName','Customer Details')

@section('content')



    <link rel="stylesheet" href="{{asset("css/customers/customer.css")}}">
    <!-- Display Validation Errors -->

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <i class="fa fa-user avatar"></i>
                    <h3 class="profile-username text-center">{{$customer->name}} {{$customer->surname}}</h3>

                    <p class="text-muted text-center">Client Type</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Nominative</b> <a class="pull-right">{{$customer->nominative}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Address</b> <a class="pull-right">{{$customer->address}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>ZipCode</b> <a class="pull-right">{{$customer->zipcode}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>City</b> <a class="pull-right">{{$customer->city}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>VatNumber</b> <a class="pull-right">{{$customer->vat_number}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Ssn</b> <a class="pull-right">{{$customer->ssn}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Telephone</b> <a class="pull-right">{{$customer->telephone}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Fax</b> <a class="pull-right">{{$customer->fax}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b> <a class="pull-right">{{$customer->email}}</a>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Edit</b></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="/vehicles/search/{{$customer->id}}" class="btn btn-primary btn-block"><i
                                        class="fa fa-list"></i> <b> List Vehicles </b> <i class="fa fa-automobile"></i></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="/vehicles/add/{{$customer->id}}" class="btn btn-primary btn-block"><i
                                        class="fa fa-plus"></i> <b> Add Vehicle</b> <i class="fa fa-automobile"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>




@endsection