<html>
<head>
    <title>@yield('title')</title>
</head>

<h1>Gestion de @yield('gestion')</h1>
<li>
    <ul><a href="clients">Gestion de clients</a></ul>
    <ul><a href="produits">Gestion de produits</a></ul>
    <ul><a href="devis">Gestion de devis</a></ul>
</li>
<a href="@yield("lien_page_create")">Nouveau @yield('nouveau')</a>
<table>
@yield('table')

</table>
</html>