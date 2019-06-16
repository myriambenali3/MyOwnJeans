<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Modeles\BoutiqueDAO;

class BoutiqueController extends Controller
{
    //
    public function getBoutique()
    {
        $boutique = new BoutiqueDAO();
        $lesBoutiques = $boutique->getLesBoutiques();
        return view('boutique', compact('lesBoutiques'));
    }

    //Selection d'un article par son id
    public function getBoutiqueById($idBout)
    {
        $boutique = new BoutiqueDAO();
        $laBoutique = $boutique->getBoutiqueById($idBout);
        $lesCommentaires = $laBoutique->getLesCommentaires();
        //pour simplifier l'accès aux données dans la vue "ListerCommentaire', on passe deux objets
        //laBoutique représente l''article qui a été sélectionné
        //lesCommentaires représente la liste des commentaires associés à cet article
        return view('listerCommentaires',compact('laBoutique','lesCommentaires'));
    }
}


