<h1>Création client </h1>
<form method="post" action="{{route('clients.store')}}">
    @csrf

    <label>   Nom :
    </label>
    <input type="text" name="nom_complet">

    <label>  Tél :
    </label>
    <input type="text" name="tel">

    <label>  Email :
    </label>
    <input type="email" name="email">
    <label>  Adresse : </label>
    <textarea name="adresse">
    </textarea>

    <input type="submit" value="Sauvgarder">
</form>