<?php

namespace App\Http\Controllers;
use App\Http\Requests\InsertionConfRequest;
use App\Metier\Conference;

use App\Modeles\ProductionDAO;
//use Illuminate\Http\Request;

class ProductionController extends Controller
{
    //
    //Selection de toutes les productions
    public function getProduction(){
        $production = new ProductionDAO();
        $lesProductions = $production->getLesProductions();
        return view('production',compact('lesProductions'));
    }

    //Selection d'une production par son id
  /*  public function getConferenceById($idConf)
    {
        $conference = new ProductionDAO();
        $laConference = $conference->getConferenceById($idConf);
        $lesCommentaires = $laConference->getLesCommentaires();
        //pour simplifier l'accès aux données dans la vue "ListerCommentaire', on passe deux objets
        //laConference représente la conférence qui a été sélectionnée
        //lesCommentaires représente la liste des commentaires associés à cette conférence
        return view('listerCommentaires',compact('laConference','lesCommentaires'));
    }*/
/*
    public function ajoutConference(){
        return view('formAjoutConference');
    }

    public function postAjoutConference(InsertionConfRequest $request){
        $maConference = new Conference();
        $maConference->setIntituleConf($request->input('intituleConf'));
        $maConference->setDescriptionConf($request->input('descriptionConf'));
        $maConferenceDAO = new ProductionDAO();
        $maConferenceDAO->creationConference($maConference);
        return view('insertionOK');
    }*/
}
