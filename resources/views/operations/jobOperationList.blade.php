@extends('layouts.main')

@section('title','Operation List')
@section('header','Operation  List')
@section('PageName','Job Operations List')
@section('content')

    <div class="panel-body">
        <!-- Display Validation Errors -->

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Job Services</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

        <table class="table table-striped">
            <thead>

            <tr>
                <th>Name</th>
                <th>Notes</th>
                <th>UnitPrice</th>
                <th>Quantity</th>
                <th>TotalPrice</th>
            </tr>
            </thead>
            <tbody>

            @foreach($Services as $Service)

                <tr>
                    <td class="col-lg-3"><p for="Name" class="col-sm-3 col-lg-12 control-label">{{$Service->service_details->name}}</p></td>
                    <td class="col-lg-4"><p for="Description" class="col-sm-3 col-lg-12 control-label">{{$Service->notes}}</p></td>
                    <td class="col-lg-2"><p for="unitprice" class="col-sm-3 col-lg-12 control-label">{{$Service->service_details->unitprice}}</p></td>
                    <td class="col-lg-1"><p for="quantity" class="col-sm-3 col-lg-12 control-label">{{$Service->quantity}} </p></td>
                    <td class="col-lg-2"><p for="totalprice" class="col-sm-3 col-lg-12 control-label">{{$Service->total_price}}</p></td>
                </tr>

            @endforeach


            </tbody>
        </table>
            </div>
        </div>


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Job Parts</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

        <table class="table table-striped">
            <thead>

            <tr>
                <th>Name</th>
                <th>Notes</th>
                <th>UnitPrice</th>
                <th>Quantity</th>
                <th>TotalPrice</th>
            </tr>
            </thead>
            <tbody>
            @foreach($PartUsages as $PartUsage)

                <tr>
                    <td class="col-lg-3"><p for="name" class="col-sm-3 col-lg-12 control-label">{{$PartUsage->sparepart->catalog->name}}</p></td>
                    <td class="col-lg-4"><p for="description" class="col-sm-3 col-lg-12 control-label">{{$PartUsage->notes}}</p></td>
                    <td class="col-lg-2><p for="unitprice" class="col-sm-3 col-lg-12 control-label">{{$PartUsage->price}} </p></td>
                    <td class="col-lg-1><p for="quantity" class="col-sm-3 col-lg-12 control-label">{{$PartUsage->quantity}}</p></td>
                    <td class="col-lg-2><p for="price" class="col-sm-3 col-lg-12 control-label">{{$PartUsage->total_price}}</p></td>
                </tr>

            @endforeach


            </tbody>
        </table>

            </div>
        </div>

        <div class="col-lg-4 col-lg-offset-2">
            <a href="/operations/OperationSelect/{{$jobid}}" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Add Operation</b></a>
        </div>

        <div class="col-lg-4">
            <a href="/jobs/{{$jobid}}" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> <b>Back to the Job</b></a>
        </div>





    </div>

@endsection