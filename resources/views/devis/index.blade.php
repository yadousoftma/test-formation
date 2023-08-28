@extends('layouts.index')

@section("title", "Gestion des devis")
@section("gestion", "Devis")
@section("lien_page_create", "devis/create")
@section("nouveau", "devis")
@section('table')

    <tr>
        <th>Nom</th>
        <th>Qté</th>
        <th>Prix</th>
        <th>Elements du devis</th>
    </tr>
@forelse($devis as $dev)
    <tr>
        <td>{{$dev->date}}</td>
        <td>{{$dev->id_client}}</td>
        <td>{{$dev->numero_devis}}</td>
        <td>
            <table>
                <tr>
                    <td>Produit</td>
                    <td>Quantité</td>
                </tr>
                @foreach($dev->get_element_devis as $element)
                    <tr> <td>{{$element->get_produit->nom}}</td>
                <td>{{$element->qte}}</td>  </tr>

                @endforeach
            </table>
            </td>

        <td><a href="{{route('devis.edit', ["devi" => $dev->id])}}">Modifier</a>
            <form method="post" action="{{route("devis.destroy", $dev)}}">
                @csrf
                @method('DELETE')
                <button>Suppression</button>
            </form>


        </td>


    </tr>

@empty
    <tr>
        Aucun Devis
    </tr>
@endforelse
@endsection