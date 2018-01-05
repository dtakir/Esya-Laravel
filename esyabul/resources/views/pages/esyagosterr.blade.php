<html>
<head></head><body>
<br>
@foreach ($produc as $pro)
    {{$pro->name}}
    {{$pro->baslik}}
    {{$pro->ozellik}}

@endforeach
</body>
</html>