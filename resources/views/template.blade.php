<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        {!! Html::style('lib/bootstrap/bootstrap.min.css') !!}
        {!! Html::style('css/formaweb.css') !!}
        <title>@yield('titrePage')</title>
    </head>
    <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">

            <a class="navbar-brand" href="{{url('/Accueil')}}">
                <img class="logo"src="/web/FormawebV4/public/images/logo.png" height="100" width="100" >
                <span>MyOwnJeans - Le Jeans sur-mesure</span>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/Accueil')}}">Accueil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/Production')}}">La Production
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/Tutoriel')}}">Notre Tutoriel
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/Boutique')}}">La Boutique
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/Contacts')}}">Contacts
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>


                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                                Bonjour,  {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else

                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('login')}}">Se connecter
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('register')}}">Nouveau Compte
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                    @endauth


                </ul>
            </div>
        </div>
    </nav>
    <header>
        <h1>@yield('titreItem')</h1>
    </header>
    @yield('contenu')

    <footer class="footer">
        <p>MyOwnJeans © 2019</p>
        <p>Tous droits réservés</p>
        <p>Myriam Benali et Cécile Besson</p>
    </footer>
    {!! Html::script('lib/jquery/jquery-3.3.1.slim.min.js') !!}
    {!! Html::script('lib/js/bootstrap.bundle.js') !!}
    {!! Html::script('lib/js/bootstrap.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')!!}
    </body>
</html>