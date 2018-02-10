@extends('layouts.main')

@section('title','Jobs List')
@section('header','Jobs List')
@section('PageName','List of Available SpareParts')
@section('content')



    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-striped">
            <thead>
            <tr>
                {{--<th>id</th>--}}
                <th>SparePart Name</th>
                <th>WareHouse Name</th>
                <th>Quantity</th>
                <th>Price</th>

            </tr>
            </thead>
            <tbody>
            @foreach($spareparts as $sparepart)


                <form action="/operations/AddSparePart" method="POST" class="form-horizontal">

                    {{ csrf_field() }}
                    <input type="hidden" name="jobid" id="task-name" class="form-control" value="{{$jobid}}">
                    <input type="hidden" name="warehouseid" id="task-name" class="form-control" value="{{$sparepart->warehouseid}}">
                    <input type="hidden" name="sparepartid" id="task-name" class="form-control" value="{{$sparepart->id}}">
                <tr>
                    {{--<td><p for="id" class="col-sm-3 control-label">{{$job->id}}</p></td>--}}
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label"><strong>{{$sparepart->catalog['name']}}</strong></p></td>
                    <td><p for="warehouse" class="col-sm-3 col-lg-12 control-label">{{$sparepart->warehouse['name']}}</p></td>
                    <td><p for="quantity" class="col-sm-3 col-lg-12 control-label">{{$sparepart->quantity}}</p></td>
                    <td><p for="price" class="col-sm-3 col-lg-12 control-label">{{$sparepart->catalog['unitprice']}}</p></td>


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