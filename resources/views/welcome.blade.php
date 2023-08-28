<html>
<head><title>Pade acceuil formation</title></head>
<body>
@for($i=1; $i<16; $i++)
    @if($i % 3 == 0)
    {!! "<h1>$i</h1>"!!}

    @else
        {!! $i."<br>" !!}

    @endif
        @endfor

</body>
</html>