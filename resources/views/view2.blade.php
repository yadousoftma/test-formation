<html>
<head><title>Pade acceuil formation</title></head>
<body>

<h1>Bonjour tout le monde</h1>
@for($i=1; $i<=15; $i++)
    @if($i % 3 ==0)
    {!! "<h1>$i</h1>" !!}
    @else
        {!! $i."<br>" !!}
    @endif

@endfor
</body>
</html>