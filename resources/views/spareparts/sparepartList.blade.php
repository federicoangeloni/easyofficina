@extends('layouts.main')

@section('title','List all Spare Parts from all warehouses')
@section('header','List all Spare Parts from all warehouses')

@section('content')


    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-hover table-striped">

            <thead>
            <tr>
                <th>id</th>
                <th>Catalog Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Warehouse Id</th>
                <th>Warehouse Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
            </tr>
            </thead>

            <tbody>
            @foreach($spareparts as $sparepart)
                <tr>
                    <td><p for="name" class="col-sm-3 control-label">{{$sparepart->id}}</p></td>-
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$sparepart->catalogid}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$sparepart->catalog->name}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$sparepart->catalog->description}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$sparepart->warehouseid}}</p></td>
                    <td><p for="name" class="col-sm-3 control-label">{{$sparepart->warehouse->name}}</p></td>-
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$sparepart->quantity}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$sparepart->catalog->unitprice}}</p></td>
                    <td>
                        <a href="/spareparts/{{$sparepart->id}}"><input type="button" class="btn btn-flat btn-primary"
                                                                      value="Show Details"/></a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
@endsection