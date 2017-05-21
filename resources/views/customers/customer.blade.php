@extends('layouts.layout')

@section('header','Clienti per ID')

@section('content')


    <div class="panel-body">
        <!-- Display Validation Errors -->

        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Città</th>
                <th>Indirizzo</th>
                <th>Codice Fiscale</th>
            </tr>
            </thead>

            <tbody>
                <tr>
                    <td>  <p for="name" class="col-sm-3 control-label">{{$customer->id}}</p> </td>
                    <td>  <p for="name" class="col-sm-3 control-label">{{$customer->name}}</p> </td>
                    <td>  <p for="name" class="col-sm-3 control-label">{{$customer->surname}}</p> </td>
                    <td>  <p for="name" class="col-sm-3 control-label">{{$customer->city}}</p> </td>
                    <td>  <p for="name" class="col-sm-3 control-label">{{$customer->address}}</p> </td>
                    <td>  <p for="name" class="col-sm-3 control-label">{{$customer->ssn}}</p> </td>
                    <td>
                        <a href="/vehicles/add/{{$customer->id}}"><input type="button" value="Aggiungi Veicolo"/></a>
                    </td>
                    <td>
                        <a href="/vehicles/search/{{$customer->id}}"><input type="button" value="Elenca Veicoli"/></a>
                    </td>

                </tr>
            </tbody>

        </table>

    </div>

@endsection