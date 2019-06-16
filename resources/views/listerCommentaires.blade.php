@extends('template')

@section('titrePage')
    Commandes
@endsection

@section('titreItem')
    <h1>Commande :</h1> </br>
@endsection

@section('contenu')

    <h2>{{$laBoutique->getIntituleBout()}}</h2>

    @auth
        <a href="{{ url('Commande') }}"> <input  class="bouton4" type="button" value="Commander"></a> </br>
    @else
     <p class="pcentre">  <a href="{{ route('login') }}">Connectez-vous</a> pour commander cet article ! </p>

    @endauth
    <p class="pcentre">{{$laBoutique->getDescriptionBout()}}</p>
    <p><img src="{{ $laBoutique->getImageBout() }}" height="542" width="770" ></p>
    <h3>Commandes :</h3>
    @if($lesCommentaires)
        @foreach ($lesCommentaires as $commentaire)
            <commentaire>
                <h2>{{ $commentaire->getAuteurCom()->getAuthIdentifierName() }}</h2>
                <p>{{ $commentaire->getContenuCom() }}</p>
            </commentaire>
        @endforeach
    @else
        <strong>Pas de commande enregistré</strong>
    @endif



@endsection