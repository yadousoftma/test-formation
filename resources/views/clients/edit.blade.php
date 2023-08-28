<h1>Création client </h1>
<form method="post" action="{{route('clients.update', $client)}}">
    @csrf
    @method('PUT')

    <label>   Nom :
    </label>
    <input type="text" name="nom_complet" value="{{$client->nom}}">

    <label>  Tél :
    </label>
    <input type="text" name="tel" value="{{$client->tel}}">

    <label>  Email :
    </label>
    <input type="email" name="email" value="{{$client->email}}">
    <label>  Adresse : </label>
    <textarea name="adresse">{{$client->adresse}}
    </textarea>

    <input type="submit" value="Sauvgarder">
</form>