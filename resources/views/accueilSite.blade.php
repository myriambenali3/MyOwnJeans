@extends('template')

@section('titrePage')
    Notre collection
@endsection

@section('titreItem')
    <h1>Accueil</h1>
@endsection

@section('contenu')
    <p></p>
    </br>
    @foreach ($lesAccueils as $accueil)
        <accueil>
            <?php  /*<h2>{{ $formation->getIdForm() }} {{ $formation->getIntituleForm() }}</h2> */?>
            <h2> {{ $accueil->getIntituleAcc() }}</h2>
            <p class="pcentre">{{ $accueil->getDescriptionAcc() }}</p>
            <p> <img src="{{ $accueil->getImageAcc() }}" height="542" width="770" ></p>
            </br>
        </accueil>
    @endforeach
@endsection