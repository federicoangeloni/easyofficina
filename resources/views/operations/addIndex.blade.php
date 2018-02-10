@extends('layouts.main')

@section('title','Select an Operation')
@section('header','Select an Operation')
@section('PageName','Add an Operation to the Job')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Bootstrap Boilerplate... -->






    <div class="row">
        <div class="col-lg-6">
            <div id="add_sp_job" class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-gears"></i></span>
                <div class="info-box-content">
                    <span class="info-box-number">Add Spare Part to Job</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                    Seleziona Un Pezzo di ricambio dai Magazzini
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>

            <div id="add_serv_job" class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-plus-square"></i></span>
                <div class="info-box-content">
                    <span class="info-box-number">Add a Service to Job</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                    Seleiona un Servizio tra quelli disponibili
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>

        </div>


    </div>

    <div class="col-sm-6">

        <input type="hidden" name="vehicleId" id="task-name" class="form-control" value="{{$jobid}}">
    </div>




    <!-- TODO: Current Tasks -->

    <script>var data = {jobid:"{{$jobid}}"};</script>

    <script src="{{asset("js/operations/addSelectType.js")}}"></script>
@endsection