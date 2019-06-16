@extends('template')

@section('titrePage')
    Contacts
@endsection

@section('titreItem')
    <h1>Contacts de l'équipe MyOwnJeans</h1>
    </br>
@endsection

@section('contenu')
    <div class="col-md-12 col-sm-10 col-xs-8">
        <div class="card">
            <div class="card-header">Pour contacter l'équipe MyOwnJeans</div>
            <div class="card-body">
                Notre équipe MyOwnJeans est là pour vous aider !
                </br>
                </br>
                <h3> Myriam BENALI : </h3>  Adresse mail : myriam.benali@moj.fr </br> Telephone : (+33) 6 12 23 34 45
                </br>
                </br>
                <h3> Cécile BESSON : </h3>  Adresse mail : cecile.besson@moj.fr </br> Telephone : (+33) 6 98 87 76 65

            </div>
        </div>
    </div>
    </br>
    <a href="{{ url('https://www.google.com/maps/place/Bellecour+-+H%C3%B4tel+Dieu,+Lyon/@45.7563779,4.8291833,16z/data=!3m1!4b1!4m5!3m4!1s0x47f4ea52244ab879:0xb0956981fd027394!8m2!3d45.7555696!4d4.8348122') }}"> <img src="images/plan.png" height="542" width="570" > </a></p>
    <p></p>
@endsection