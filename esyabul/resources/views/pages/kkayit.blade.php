@extends('welcome')
@section('content')
    <head>

        <link rel="stylesheet" type="text/css" href="css/giris.css">

    </head>
    {!! Form::open() !!}

    {!! Form::close() !!}
    <form action="/kayitol" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="container">
            <label><b>Email</b></label>
            <input type="text"  name="email" required>

            <label><b>Password</b></label>
            <input type="password"  name="psw" required>

            <label><b>Name</b></label>
            <input type="text" name="name">
            <button type="submit"  >Sign Up</button>

        </div>
    </form>
@stop