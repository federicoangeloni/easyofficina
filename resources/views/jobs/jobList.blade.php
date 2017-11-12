@extends('layouts.main')

@section('title','Jobs List')
@section('header','Jobs List')

@section('content')



    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-striped">
            <thead>
            <tr>
                {{--<th>id</th>--}}
                <th>Vehicle ID</th>
                <th>Job Date</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)

                <tr>
                    {{--<td><p for="id" class="col-sm-3 control-label">{{$job->id}}</p></td>--}}
                    <td><p for="vehicleid" class="col-sm-3 col-lg-12 control-label"><a
                                    href="/vehicles/{{$job->vehicleid}}">{{$job->vehicleid}}</a></p></td>
                    <td><p for="jobdate" class="col-sm-3 col-lg-12 control-label">{{$job->jobdate}}</p></td>
                    <td><p for="description" class="col-sm-3 col-lg-12 control-label">{{$job->description}}</p></td>
                    <td><p for="amount" class="col-sm-3 col-lg-12 control-label">{{$job->amount}}</p></td>
                    <td>
                        @if($job->completed==0)
                        <span class="badge bg-red">in progress</span>
                            @else
                            <span class="badge bg-green">completed</span>
                        @endif
                    </td>
                    <td>
                        <a href="/jobs/{{$job->id}}"><input type="button" class="btn btn-flat btn-primary"
                                                            value="Show Details"/></a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>


    </div>

@endsection