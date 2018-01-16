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
                <th>Service Name</th>
                <th>Service Description</th>
                <th>Unit</th>
                <th>Price</th>
                <th>Quantity</th>

            </tr>
            </thead>
            <tbody>


            @foreach($services as $service)

                <form action="/operations/AddService" method="POST" class="form-horizontal">

                    {{ csrf_field() }}
                    <input type="hidden" name="jobid" id="task-name" class="form-control" value="{{$jobid}}">
                    <input type="hidden" name="serviceid" id="task-name" class="form-control" value="{{$service->id}}">
                    <input type="hidden" name="servicecode" id="task-name" class="form-control" value="{{$service->code}}">
                <tr>
                    {{--<td><p for="id" class="col-sm-3 control-label">{{$job->id}}</p></td>--}}
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$service->name}}</p></td>
                    <td><p for="description" class="col-sm-3 col-lg-12 control-label">{{$service->description}}</p></td>
                    <td><p for="unit" class="col-sm-3 col-lg-12 control-label">{{$service->unit}}</p></td>
                    <td><p for="unitprice" class="col-sm-3 col-lg-12 control-label">{{$service->unitprice}}</p></td>

                    <td>
                        <input type="number" name="quantity" id="task-name" class="col-sm-3 col-lg-3" value="1">
                    </td>

                    <td>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default center-block">
                                    <i class="fa fa-plus"></i> Add
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
                </form>

            @endforeach
            </tbody>
        </table>


    </div>

@endsection