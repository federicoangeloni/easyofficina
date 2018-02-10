@extends('layouts.main')
{{--@extends('layouts.layout')--}}

@section('title','Dashboard')
@section('header','Dashboard')
@section('PageName','Main Dashboard')
@section('content')

    <link rel="stylesheet" href="{{asset("css/dashboard.css")}}">


    <div class="row">
        <div class="col-lg-6">
            <div id="start_job" class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-wrench"></i></span>

                <div class="info-box-content">

                    <span class="info-box-number">Start a new job</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                    Start the wizard for the creation of a new job
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>

        </div>


    </div>

    <script src="{{asset("js/dashboard.js")}}"></script>

@endsection