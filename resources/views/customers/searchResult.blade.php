@extends('layouts.layout')

@section('content')



    <div class="panel-body">
        <!-- Display Validation Errors -->


@foreach($customers as $customer)

            <div class="">
                <p for="name" class="col-sm-3 control-label">{{$customer->id}}</p>
                <p for="name" class="col-sm-3 control-label">{{$customer->name}}</p>
                <p for="name" class="col-sm-3 control-label">{{$customer->surname}}</p>

            </div>
        @endforeach



    </div>

@endsection