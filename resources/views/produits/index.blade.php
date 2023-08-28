@extends('layouts.index')

@section("title", "Gestion des produits")
@section("gestion", "Produit")
@section("lien_page_create", "produits/create")
@section("nouveau", "Produit")
@section('table')

    <tr>
        <th>Nom</th>
        <th>Qté</th>
        <th>Prix</th>
        <th>Action</th>
    </tr>
@forelse($produits as $produit)
    <tr>
        <td>{{$produit->nom}}</td>
        <td>{{$produit->qte}}</td>
        <td>{{$produit->prix}}</td>
        <td><a href="{{route('produits.show', $produit)}}">Afficher</a></td>

    </tr>

@empty
    <tr>
        Aucun Produit
    </tr>
@endforelse
@endsection