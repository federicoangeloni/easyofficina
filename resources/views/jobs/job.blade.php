@extends('layouts.main')

@section('title','Job Details')
@section('header','Job Details')
@section('PageName','View Job')
@section('content')

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <h3 class="profile-username text-center"><a href="/vehicles/{{$job->vehicle->id}}">{{$job->vehicle->model}}</a></h3>

                    <p class="text-muted text-center"><a href="/customers/{{$job->vehicle->customer->id}}">{{$job->vehicle->customer->name}} {{$job->vehicle->customer->surname}} </a></p>

                    <ul class="list-group list-group-unbordered">
                        {{--<li class="list-group-item">--}}
                            {{--<b>Job Id</b> <a class="pull-right">{{$job->id}}</a>--}}
                        {{--</li>--}}
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

                            <b>Status</b>  @if($job->completed==0)
                                <span class="badge bg-red">in progress</span>
                            @else
                                <span class="badge bg-green">completed</span>
                            @endif
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