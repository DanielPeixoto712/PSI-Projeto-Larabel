<!DOCTYPE html>
<html>
<head>
     @yield('titulo-pagina')
    <meta charset="utf-8">
    <meta content="width=device=width, initial-scale=1.0" name="viewport">
    <title>Repro Power</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link  rel="stylesheet" type="text/css" href="{{('jumbotrom.css')}}">
    <title>Repro Power</title>

</head>

@yield('navbar')
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="welcome">Repro Power</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('mostrar.form')}}">Contactos<span class="sr-only">(actual)</span></a>
                </li>
               
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{('http://example.com')}}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver Mais</a>
                    <div class="dropdown-menu" aria-labelledy="dropdown01">
                        <a class="dropdown-item" href="criacaosites.html">Preparção Turbos</a>
                        <a class="dropdown-item" href="marktingdig.html">Manutenção geral</a>
                        <a class="dropdown-item" href="desing.html">Linhas Escape</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('login.form')}}">Login<span class="sr-only">(actual)</span></a>
                </li>
            </ul>

        </div>
    </nav>

  

@yield('menupr')
    <main role="main">
        <div class="jumbotrom " >
            <div class="container u2" >
                <div class="container" align="center">
            <h1 class="display-3 " ><br><br></h1>
            <p style="color:white;" class="te"></p>
            <p><a class="" href="" target="blank"></a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Temos os melhores preços</h2>
                    <p>TESTE</p>
                    <p><a class="btn btn-secondary " href="criacaosites.html" role="button">Ver detalhes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Trabalhamos com os melhores</h2>
                    <p>TESTE</p>
                    <p><a class="btn btn-secondary " href="marktingdig.html" role="button">Ver detalhes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>DMSADIODFD</h2>
                    <p>TESTE</p>
                    <p><a class="btn btn-secondary " href="design.html" role="button">Ver detalhes &raquo;</a></p>
                </div>



<br><br><br><br><br><br><br><br><br><br>

@yield('menuindex')


@yield('rodape')

<br>

<br><br>
    <footer class="container">
        <p>&copy;Repro Power 2020-2021</p>
    </footer>

    <script src="js/jquery.min.js" ></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>
