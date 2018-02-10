@extends('layouts.main')

@section('title','Search Parts in the Catalog')
@section('header','Search Parts in the Catalog')
@section('PageName','Search Spare Parts')
@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->

        <link rel="stylesheet" href="{{asset('css/customers/searchIndex.css')}}">
        <!-- New Task Form -->
        <form action="/spareparts/search" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="">
                </div>
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default center-block">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="{{asset('bower_components/AdminLTE/plugins/jQueryUI/jquery-ui.min.js')}}"></script>

    {{--<script src="{{asset('js/customers/searchIndex.js')}}"></script>--}}

    <!-- TODO: Current Tasks -->
@endsection