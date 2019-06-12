@extends('template')

@section('titrePage')
    MyOwnJeans
@endsection

@section('titreItem')
    <h1>MyOwnJeans</h1>
@endsection

@section('contenu')
    @foreach ($lesConferences as $conference)
        <conference>
                <h2><a href="{{ url('/Conference') }}/{{ $conference->getIdConf() }}">{{ $conference->getIdConf() }} {{ $conference->getIntituleConf() }}</a></h2>
                <p>{{ $conference->getDescriptionConf() }}</p>
        </conference>
    @endforeach
@endsection