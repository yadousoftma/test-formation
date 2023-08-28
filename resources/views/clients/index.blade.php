@extends('layouts.index')

@section("title", "Gestion des clients")
@section("gestion", "clients")
@section("lien_page_create", "clients/create")
@section("nouveau", "Client")
@section('table')

    <tr>
        <th>Nom</th>
        <th>Tél</th>
        <th>Email</th>
        <th>Adresse</th>
        <th>Action</th>
    </tr>
@forelse($clients as $client)
    <tr>
        <td>{{$client->nom}}</td>
        <td>{{$client->tel}}</td>
        <td>{{$client->eamil}}</td>
        <td>{{$client->adresse}}</td>
        <td><a href="{{route('clients.edit', $client->id)}}">Modifier</a>
        <form method="post" action="{{route("clients.destroy", $client)}}">
            @csrf
            @method('DELETE')
            <button>Suppression</button>
        </form>


        </td>


    </tr>

@empty
    <tr>
        Aucun client
    </tr>
@endforelse
@endsection