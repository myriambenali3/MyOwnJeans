@extends('template')

@section('titrePage')
    La Boutique
@endsection

@section('titreItem')
    <h1>La Boutique</h1>
@endsection

@section('contenu')
    </br>
    <p class="pcentregrasitalique">Connectez vous pour passez commande auprès de nous ! Avant de commander, merci de prendre vos mensurations ! Afin de vous aider, l'équipe MyOwnJeans a réalisé un tutoriel. Pour y accéder, cliquez sur l'onglet "Notre Tutoriel" !</p></br>

    @auth
        <a href="{{ url('Commande') }}"> <input  class="bouton4" type="button" value="Commander"></a> </br>
    @else
        <p class="pcentregrascolor">  <a class="pcentregrascolor" href="{{ route('login') }}">Connectez-vous</a> pour commander chez nous ! </p>
        @endauth

    </br>
    @foreach ($lesBoutiques as $boutique)
        <boutique>
            <?php  /*<h2>{{ $boutique->getIdBout() }} {{ $boutique->getIntituleBout() }}</h2> */?>
            <h2> <a href="{{ url('/Boutique') }}/{{ $boutique->getIdBout() }}">
                {{ $boutique->getIntituleBout() }}</a></h2>
            <p class="pcentre">{{ $boutique->getDescriptionBout() }}</p>
                <h5> {{ $boutique->getPrixBout() }}</h5>
                <p> <a href="{{ url('/Boutique') }}/{{ $boutique->getIdBout() }}"><img src="{{ $boutique->getImageBout() }}" height="542" width="770" > </a></p>
            </br>
        </boutique>
    @endforeach
@endsection


