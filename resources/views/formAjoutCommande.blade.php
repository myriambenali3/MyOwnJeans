@extends('template')

@section('titrePage')
    Prendre une commande
@endsection

@section('titreItem')
    <h1>Prendre une commande</h1>
@endsection

@section('contenu')
    <div class="col-md-12 col-sm-10 col-xs-8">
        <div class="card">
            <div class="card-header">Commander</div>
            <div class="card-body">
                {!! Form::open(['url' => 'saisieCommande']) !!}
                <div class="form-group {!! $errors->has('nomCom') ? 'has-error' : '' !!}">
                    {!! Form::text('nomCom', null, ['class' => 'form-control', 'placeholder' => '* Nom']) !!}
                    {!! $errors->first('nomCom', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('prenomCom') ? 'has-error' : '' !!}">
                    {!! Form::text('prenomCom', null, ['class' => 'form-control', 'placeholder' => '* Prénom']) !!}
                    {!! $errors->first('prenomCom', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('mailCom') ? 'has-error' : '' !!}">
                    {!! Form::text('mailCom', null, ['class' => 'form-control', 'placeholder' => '* Adresse Email']) !!}
                    {!! $errors->first('mailCom', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('numCom') ? 'has-error' : '' !!}">
                    {!! Form::text('numCom', null, ['class' => 'form-control', 'placeholder' => 'Numéro de téléphone']) !!}
                    {!! $errors->first('numCom', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('descriptionCom') ? 'has-error' : '' !!}">
                    {!! Form::textarea ('descriptionCom', null, ['class' => 'form-control', 'placeholder' => '* Merci de nous détailler vos mensurations, la couleur et la forme du jeans que vous voulez commander !']) !!}
                    {!! $errors->first('descriptionCom', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <p></p>
@endsection
