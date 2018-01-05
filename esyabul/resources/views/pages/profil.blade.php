
@foreach($user as $user)
    adi:{{$user->name}}
    <br>
    mail:{{$user->email}}
    <br>
{{$user->baslik}}
    @endforeach <br>
satılık eşyaları:
@foreach($product as $product)
    {{$product->name}},
    @endforeach