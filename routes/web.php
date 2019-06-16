<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Production','ProductionController@getProduction');
Route::get('ajoutConference','ProductionController@ajoutConference');
Route::post('saisieConference','ProductionController@postAjoutConference');
Route::get('Conference/{id}','ProductionController@getConferenceById');
Route::get('Accueil','AccueilSiteController@getAccueils');
Route::get('Contacts','ContactsController@getContact');
Route::get('Boutique','BoutiqueController@getBoutique');
Route::get('Boutique/{id}','BoutiqueController@getBoutiqueById');
Route::get('Tutoriel','TutorielController@getTutoriel');
Route::get('Commande','CommandeController@ajoutCommande');
Route::post('saisieCommande','CommandeController@postAjoutCommande');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
