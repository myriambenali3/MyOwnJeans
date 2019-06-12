@extends('template')

@section('titrePage')
    La collection
@endsection

@section('titreItem')
    <h1>La collection</h1>
@endsection

@section('contenu')
    @foreach ($lesFormations as $formation)
        <formation>
          <?php  /*<h2>{{ $formation->getIdForm() }} {{ $formation->getIntituleForm() }}</h2> */?>
              <h2> {{ $formation->getIntituleForm() }}</h2>
            <p>{{ $formation->getDescriptionForm() }}</p>
        </formation>
    @endforeach
@endsection