<h1>Création produits: </h1>

<form method="post" action="{{route('devis.update', $devis)}}">
    @method('PUT')

    @csrf

    <label> Date :
    </label>
    <input type="date" name="date_devis" value="{{$devis->date}}">

    <label> Numéro de devis :
    </label>
    <input type="text" name="numero" value="{{$devis->numero_devis}}">

    <label> Client :
    </label>
    <select name="client">
        @foreach($clients as $client)
            <option value="{{$client->id}}">{{$client->nom}}</option>
        @endforeach
    </select>
    <br>

    @foreach($devis->get_element_devis as $element)
        <label>Produit 1</label>
    <input type="hidden" name="id_elemenet[]" value="{{$element->id}}">
        <select name="produit[]">
            @foreach($produits as $produit)
                <option value="{{$produit->id}}"
                        {{$element->id_produit == $produit->id ? "selected" : ''}}
                >{{$produit->nom}}</option>
            @endforeach
        </select>
        <label>Quantité</label>
        <input type="number" step="any" value="{{$element->qte}}" name="qte[]">
        <br>
    @endforeach

    <input type="submit" value="Sauvgarder">
</form>