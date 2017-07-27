<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>


<body>
<div>
    <h1>Gestione Clienti</h1>
    <a href="{{ url('/customers') }}">Elenca tutti i clienti</a><br>
    <a href="{{ url('/customers/search') }}">Cerca un cliente (filtri)</a><br>
    <a href="{{ url('/customers/addPrivate') }}">Aggiungi un nuovo cliente privato</a><br>
    <a href="{{ url('/customers/addEnterprise') }}">Aggiungi un nuovo cliente enterprise</a><br>
    <a href="{{ url('/customers/1') }}">Visualizza cliente (per id)</a><br>
    <hr>
    <h1>Gestione Veicoli</h1>
    <a href="{{ url('/vehicles') }}">Elenca tutti i veicoli</a><br>
    <a href="{{ url('/vehicles/search') }}">Cerca un veicolo (filtri)</a><br>
    <a href="{{ url('/vehicles/search/1') }}">Visualizza veicoli di un cliente(id cliente)</a><br>
    <a href="{{ url('/vehicles/1') }}">Visualizza dettagli veicolo (id veicolo)</a><br>
    <a href="{{ url('/vehicles/add/1') }}">Aggiungi un nuovo veicolo (relazionato con un cliente)</a><br>
    <hr>
    <h1>Gestione Intervento</h1>
    <a href="{{ url('/jobs') }}">Elenca tutti gli interventi</a><br>
    <a href="{{ url('/jobs/search') }}">Cerca un intervento</a><br>
    <a href="{{ url('/jobs/search/1') }}">Visualizza interventi relativi a un veicolo(id veicolo)</a><br>
    <a href="{{ url('/jobs/1') }}">Visualizza dettagli intervento(id intervento)</a><br>
    <a href="{{ url('/jobs/add/1') }}">Crea un nuovo intervento (relazionato con un veicolo)</a><br>
    <hr>
</div>

</body>
</html>
