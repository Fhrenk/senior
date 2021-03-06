<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="Senior Assessoria Jurídica">
    <title>Senior Assessoria Jurídica @yield('titulo-pg')</title>
    <base href="{{ asset('/') }}"/>
    <link rel="icon" href="imagens/favicon.ico"/>
    <!-- inline ../../../public/build/css/inline.css
        <link href='/build/css/inline.css' rel='stylesheet' inline type='text/css'>-->
</head>
<body class="@yield('classe-pg')">
<header id="topo-principal">
    <div class="container central">
        <a id="logo" class="col-xs-4 col-md-3" href="{{route('home')}}"><img class="img-responsive" src="img/logo.png"
                                                                             alt=""/></a>
        <button id="btn-menu-rpsv" type="button">menu</button>
        <nav id="menu-principal" class="col-xs-8 col-md-9">
            <div class="seta-menu"></div>
            <ul>
                <li><a class="lnk-menu lnk-home" href="{{route('home')}}">Home</a></li>
                <li><a class="lnk-menu lnk-escritorio" href="{{route('escritorio')}}">Escritório</a></li>
                <li><a class="lnk-menu lnk-equipe" href="{{route('equipe')}}">Equipe</a></li>
                <li><a class="lnk-menu lnk-solucoes" href="{{route('solucoes')}}">Soluções</a></li>
                <li><a class="lnk-menu lnk-contato" href="{{route('contato')}}">Contato</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
@yield('conteudo')
<footer id="rodape" class="bg-black">
    <span class="contact-info">{{$contato->telefone}}&nbsp;&nbsp;&nbsp;{{$contato->email}}</span>
    <span class="copyright">Senior Assessoria Juridica - Copyright 2017. Todos os direitos reservados.</span>
</footer>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="build/css/all.css" type="text/css">
<link href='build/css/inline.css' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
@yield('css')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
@yield('javascript')
<script src="build/js/menu.js"></script>
</body>
</html>