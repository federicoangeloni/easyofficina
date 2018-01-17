@extends('layouts.main')

@section('title','List all parts in the catalog')
@section('header','List all parts in the catalog')

@section('content')


    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-hover table-striped">

            <thead>
            <tr>
                <th>Part Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Unit Price</th>
            </tr>
            </thead>

            <tbody>
            @foreach($catalog as $catalog)
                <tr>
                    <td><p for="name" class="col-sm-3 control-label">{{$catalog->partid}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$catalog->name}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$catalog->description}}</p></td>
                    <td><p for="name" class="col-sm-3 col-lg-12 control-label">{{$catalog->unitprice}}</p></td>
                    <td>
                        <a href="/catalog/{{$catalog->partid}}"><input type="button" class="btn btn-flat btn-primary"
                                                                      value="Show Details"/></a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
@endsection