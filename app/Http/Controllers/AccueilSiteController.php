<?php

namespace App\Http\Controllers;


use App\Modeles\AccueilSiteDAO;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    //
    public function getFormations(){
        $formation = new AccueilSiteDAO();
        $lesFormations = $formation->getLesFormations();
        return view('listerFormations',compact('lesFormations'));
    }
}
