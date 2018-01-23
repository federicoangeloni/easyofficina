@extends('layouts.main')

@section('title','Job Details')
@section('header','Job Details')

@section('content')

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <h3 class="profile-username text-center">{{$job->vehicle}}</h3>

                    <p class="text-muted text-center">{{$job->customer}}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Job Id</b> <a class="pull-right">{{$job->id}}</a>
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
                        <div class="col-lg-3">
                            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Edit</b></a>
                        </div>
                        <div class="col-lg-3">
                            <a href="/jobs/delete/{{$job->id}}" class="btn btn-primary btn-block"><i
                                        class="fa fa-trash"></i> <b> Delete</b></a>
                        </div>
                        <div class="col-lg-3">
                            <a href="/jobs/{{$job->id}}/operations" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Operations</b></a>
                        </div>
                        <div class="col-lg-3">
                            <a href="/jobs/close/{{$job->id}}" class="btn btn-primary btn-block"><i
                                        class="fa fa-trash"></i> <b> Close</b></a>
                        </div>

                    </div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

@endsection