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

            <a class="navbar-brand" href="{{url('/Conferences')}}">MyOwnJeans - Le jean sur-mesure</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/Conferences')}}">Accueil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/Formations')}}">Collection
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Notre Tutoriel
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contacts
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">La Boutique
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                            Collection
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/Conferences')}}">Présentation</a>
                            <a class="dropdown-item" href="{{url('/ajoutConference')}}">Boutique</a>
                        </div>                         
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">

                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/Formations')}}">Liste des formations</a>
                        </div>
                    </li>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                                Bienvenue,  {{ Auth::user()->name }}
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                                Se connecter
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ route('login') }}">Se Connecter</a>
                            </div>
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
        <p>MyOwnJeans est un petit site web construit comme exemple de développement moderne en php</p>
    </footer>
    {!! Html::script('lib/jquery/jquery-3.3.1.slim.min.js') !!}
    {!! Html::script('lib/js/bootstrap.bundle.js') !!}
    {!! Html::script('lib/js/bootstrap.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')!!}
    </body>
</html>