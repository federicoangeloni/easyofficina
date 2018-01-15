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
                <th>SparePart Name</th>
                <th>WareHouse Name</th>
                <th>Quantity</th>
                <th>Price</th>

            </tr>
            </thead>
            <tbody>
            @foreach($spareparts as $sparepart)

                <tr>
                    {{--<td><p for="id" class="col-sm-3 control-label">{{$job->id}}</p></td>--}}
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$sparepart->catalog['name']}}</p></td>
                    <td><p for="warehouse" class="col-sm-3 col-lg-12 control-label">{{$sparepart->warehouse['name']}}</p></td>
                    <td><p for="quantity" class="col-sm-3 col-lg-12 control-label">{{$sparepart->quantity}}</p></td>
                    <td><p for="price" class="col-sm-3 col-lg-12 control-label">{{$sparepart->catalog['unitprice']}}</p></td>

                    <td>
                        <a href="/operations/AddSparePart/{{$jobid}}/{{$sparepart->warehouse['id']}},{{$sparepart->quantity}},{{$sparepart->id}}"><input type="button" class="btn btn-flat btn-primary"
                                                            value="Add Item to Job"/></a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>


    </div>

@endsection