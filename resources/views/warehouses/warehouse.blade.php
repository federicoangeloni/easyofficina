@extends('layouts.main')

@section('title','Warehouse Details')
@section('header','Warehouse Details')
@section('PageName','Warehouse Details')
@section('content')



    <link rel="stylesheet" href="{{asset("css/customers/customer.css")}}">
    <!-- Display Validation Errors -->

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <i class="fa fa-user avatar"></i>
                    <h3 class="profile-username text-center">{{$warehouse->name}}</h3>

                    <p class="text-muted text-center">Client Type</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Name</b> <a class="pull-right">{{$warehouse->name}}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Address</b> <a class="pull-right">{{$warehouse->address}}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Description</b> <a class="pull-right">{{$warehouse->description}}</a>
                        </li>

                    </ul>

                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Edit</b></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="/spareparts" class="btn btn-primary btn-block"><i
                                        class="fa fa-list"></i> <b> List Spare Parts </b> <i class="fa fa-automobile"></i></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="btn btn-primary btn-block"><i
                                        class="fa fa-plus"></i> <b> Add Spare Part</b> <i class="fa fa-automobile"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>




@endsection