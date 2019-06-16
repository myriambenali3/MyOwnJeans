<?php

namespace App\Http\Controllers;


use App\Modeles\AccueilSiteDAO;

use Illuminate\Http\Request;

class AccueilSiteController extends Controller
{
    //
    public function getAccueils(){
        $accueil = new AccueilSiteDAO();
        $lesAccueils = $accueil->getLesAccueils();
        return view('accueilSite',compact('lesAccueils'));
    }
}
