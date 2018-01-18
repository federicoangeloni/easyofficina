@extends('layouts.main')

@section('title','Operation List')
@section('header','Operation  List')

@section('content')



    <div class="panel-body">
        <!-- Display Validation Errors -->

        {{--<table class="table table-striped">--}}
            {{--<thead>--}}

            {{--<tr>--}}
                {{--<th>id</th>--}}
                {{--<th>Name</th>--}}
                {{--<th>Description</th>--}}
                {{--<th>Quantity</th>--}}
                {{--<th>UnitPrice</th>--}}
                {{--<th>TotalPrice</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@foreach($operations as $operation)--}}

                {{--<tr>--}}
                    {{--<td><p for="id" class="col-sm-3 control-label">{{$job->id}}</p></td>--}}
                    {{--<td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$operation->name}}</p></td>--}}
                    {{--<td><p for="description" class="col-sm-3 col-lg-12 control-label">{{$operation->description}}</p></td>--}}
                    {{--<td><p for="quantity" class="col-sm-3 col-lg-12 control-label">{{$operation->quantity}} {{$operation->unit}}</p></td>--}}
                    {{--<td><p for="unitprice" class="col-sm-3 col-lg-12 control-label">{{$operation->unitprice}} </p></td>--}}
                    {{--<td><p for="price" class="col-sm-3 col-lg-12 control-label">{{$operation->totalprice}}</p></td>--}}
                {{--</tr>--}}

            {{--@endforeach--}}


            {{--</tbody>--}}
        {{--</table>--}}

        <div class="col-lg-4 col-lg-offset-2">
            <a href="/operations/OperationSelect/{{$jobid}}" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Add Operation</b></a>
        </div>

        <div class="col-lg-4">
            <a href="/jobs/{{$jobid}}" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Back to the Job</b></a>
        </div>





    </div>

@endsection