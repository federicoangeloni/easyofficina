@extends('layouts.main')

@section('title','Catalog Details')
@section('header','Catalog Details')

@section('content')



    <link rel="stylesheet" href="{{asset("css/customers/customer.css")}}">
    <!-- Display Validation Errors -->

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <i class="fa fa-user avatar"></i>
                    <h3 class="profile-username text-center">{{$catalog->name}}</h3>

                    <p class="text-muted text-center">Client Type</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Id</b> <a class="pull-right">{{$catalog->partid}}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Name</b> <a class="pull-right">{{$catalog->name}}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Description</b> <a class="pull-right">{{$catalog->description}}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Unit Price</b> <a class="pull-right">{{$catalog->unitprice}}</a>
                        </li>

                    </ul>


                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>




@endsection