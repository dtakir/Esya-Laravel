<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf_token" id="csrf_token" content="{{ csrf_token() }}" />
    <title>Eşya Arıyorum</title>
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/bs-override.css">
    <link rel="stylesheet" type="text/css" href="lib/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/giris.css">
    <script type="text/javascript" src="lib/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header" >
            <a class="navbar-brand" href="/">Eşya Arıyorum.com</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(session('oturum')==true)
                <li><a href="/ilanver" name="a" id="a">İlan Ver <span class="sr-only">(current)</span></a></li>
                <li><a href="/esyaara">Eşya Ara</a></li>
                @endif</ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"  >
                        @if(session('oturum')!==true)
                        Giriş yap
                        @else
                        {{ session()->get('username')}} @endif<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu"  >
                        @if(session('oturum')!==true)
                            <li><a href="/kayit">Kaydol</a> </li>
                            <li><a href="/signin">Giriş Yap</a></li>
                        @else
                            <li><a href="/profil">Panel</a></li>
                            <li><a href="/uye/cikis">Çıkış Yap</a></li>
                         @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body>

</html>