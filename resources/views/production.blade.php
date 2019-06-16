@extends('template')

@section('titrePage')
    MyOwnJeans
@endsection

@section('titreItem')
    <h1>Notre Production</h1>
    </br>
@endsection

@section('contenu')
    @foreach ($lesProductions as $production)
        <production>
            <!-- <h2><a href="{{ url('/Production') }}/{{ $production->getIdProd() }}"> -->
                <!-- {{ $production->getIdProd() }} -->
                <h2>
                    {{ $production->getIntituleProd() }}

                </a>
            </h2>
            </br>
            <p> {{ $production->getDescriptionProd() }}" </p>
            <p> <img src="{{ $production->getImageProd() }}" height="352" width="470" ></p>

            </br></br>
        </production>


    @endforeach
@endsection
