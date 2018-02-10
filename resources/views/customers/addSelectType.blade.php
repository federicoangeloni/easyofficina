@extends('layouts.main')

@section('title','Add a new customer')
@section('header','Add a new customer')
@section('PageName','Add a new Customer')
@section('content')

    <link rel="stylesheet" href="{{asset("css/customers/addSelectType.css")}}">


    <div class="row">
        <div class="col-lg-6">
            <div id="add_private_customer" class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-user-plus"></i></span>
                <div class="info-box-content">
                    <span class="info-box-number">Add a new private customer</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                    Avvia il wizard per la creazione di un nuovo intervento
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>

            <div id="add_enterprise_customer" class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-industry"></i></span>
                <div class="info-box-content">
                    <span class="info-box-number">Add a new enterprise customer</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                    Avvia il wizard per la creazione di un nuovo intervento
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>

        </div>


    </div>

    <script src="{{asset("js/customers/addSelectType.js")}}"></script>

@endsection