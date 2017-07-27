@extends('layouts.layout')

@section('title','Job Details')
@section('header','Job Details')

@section('content')



    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Vehicle ID</th>
                <th>Job Date</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Completed</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td><p for="id" class="col-sm-3 control-label">{{$job->id}}</p></td>
                <td><p for="vehicleid" class="col-sm-3 control-label"><a
                                href="/vehicles/{{$job->vehicleid}}">{{$job->vehicleid}}</a></p></td>
                <td><p for="jobdate" class="col-sm-3 control-label">{{$job->jobdate}}</p></td>
                <td><p for="description" class="col-sm-3 control-label">{{$job->description}}</p></td>
                <td><p for="amount" class="col-sm-3 control-label">{{$job->amount}}</p></td>
                <td><p for="completed" class="col-sm-3 control-label">{{$job->completed}}</p></td>
            </tr>
            </tbody>
        </table>

    </div>

@endsection