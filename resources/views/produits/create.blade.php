<h1>Création produits: </h1>
<form method="post" action="{{route('produits.store')}}">
    @csrf

    <label>   Nom :
    </label>
    <input type="text" name="nom_complet" required>

    <label>  Quantité :
    </label>
    <input type="number" name="qte" step="any" >

    <label>  Prix :
    </label>
    <input type="number" name="prix" step="any">
    <input type="submit" value="Sauvgarder">
</form>