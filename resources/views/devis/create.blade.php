<h1>Création produits: </h1>

<form method="post" action="{{route('devis.store')}}">
    @csrf

    <label> Date :
    </label>
    <input type="date" name="date_devis">

    <label> Numéro de devis :
    </label>
    <input type="text" name="numero">

    <label> Client :
    </label>
    <select name="client">
        @foreach($clients as $client)
            <option value="{{$client->id}}">{{$client->nom}}</option>
        @endforeach
    </select>
    <br>
    <label>Produit 1</label>
    <select name="produit[]">
        @foreach($produits as $produit)
            <option value="{{$produit->id}}">{{$produit->nom}}</option>
        @endforeach
    </select>
    <label>Quantité</label>
    <input type="number" step="any" name="qte[]">
    <br>
    <label>Produit 2</label>
    <select name="produit[]">
        @foreach($produits as $produit)
            <option value="{{$produit->id}}">{{$produit->nom}}</option>
        @endforeach
    </select>
    <label>Quantité</label>
    <input type="number" step="any" name="qte[]">
    <br>
    <label>Produit 3</label>
    <select name="produit[]">
        @foreach($produits as $produit)
            <option value="{{$produit->id}}">{{$produit->nom}}</option>
        @endforeach
    </select>
    <label>Quantité</label>
    <input type="number" step="any" name="qte[]">

    <input type="submit" value="Sauvgarder">
</form>