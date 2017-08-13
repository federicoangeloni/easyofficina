@extends('layouts.main')

@section('title','Job Details')
@section('header','Job Details')

@section('content')

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <h3 class="profile-username text-center">{{$job->vehicleid}}</h3> //ci va il modello del veicolo

                    <p class="text-muted text-center">Client Type</p> //ci va il nome del cliente

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Vehicle Id</b> <a class="pull-right">{{$job->vehicleid}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Job Date</b> <a class="pull-right">{{$job->jobdate}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Description</b> <a class="pull-right">{{$job->description}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Amount</b> <a class="pull-right">{{$job->amount}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Completed</b> <a class="pull-right">{{$job->completed}}</a>
                        </li>

                    </ul>

                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-2">
                            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Edit</b></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="/jobs/search/{{$job->id}}" class="btn btn-primary btn-block"><i
                                        class="fa fa-trash"></i> <b> Delete</b></a>
                        </div>

                    </div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

@endsection