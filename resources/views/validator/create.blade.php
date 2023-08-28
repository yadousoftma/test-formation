<html>
<h1>TP de validation </h1>
<ul>
    @foreach($errors->all() as $error)

        <li>{{$error}} </li>

    @endforeach
</ul>
<form method="post" action="{{route("validator.store")}}">
    @csrf
    <label> Validation accepted
    </label>
    <input type="checkbox" name="validation_accepted">
    <br>
    <label> Votre site
    </label>
    <input type="text" name="url">
    <br>
    <label> Date après 2023
    </label>
    <input type="date" name="date_2024">
    <br>
    <label> Champ alphabet seulement
    </label>
    <input type="text" name="alpha">
    <br>
    <label> Champ alpha numérique
    </label>
    <input type="text" name="alpha_num">
    <br>
    <label> Champ alpha dash
    </label>
    <input type="text" name="alphadash">
    <br>
    </label>
    <input type="text" name="alphadash">
    <br>
    <label> Champ Boolean
    </label>
    True <input type="radio" name="boolean" value="1">
    False<input type="radio" name="boolean" value="0">
    Autres<input type="radio" name="boolean" value="2" checked>

    <br>
    <label> Entre 10 et 20
    </label>
    <input type="number" name="nombre" >

    <br>

    <label> Date avant 2023
    </label>
    <input type="date" name="date_2022">
    <br>

    <label> Un tableau
    </label>
    <select multiple name="tableau[]">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    </select>
        <br>



    <input type="submit">



</form>
</html>