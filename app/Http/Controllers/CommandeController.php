<?php

namespace App\Http\Controllers;

use App\Metier\Commande;
//use Illuminate\Http\Request;

use App\Http\Requests\InsertionComRequest;

use App\Modeles\CommandeDAO;


class CommandeController extends Controller
{
    //
    public function ajoutCommande(){
        return view('formAjoutCommande');
    }

    public function postAjoutCommande(InsertionComRequest $request){
        $maCommande = new Commande();
        $maCommande->setNomCom($request->input('nomCom'));
        $maCommande->setPrenomCom($request->input('prenomCom'));
        $maCommande->setMailCom($request->input('mailCom'));
        $maCommande->setDescriptionCom($request->input('descriptionCom'));
        $maCommandeDAO = new CommandeDAO();
        $maCommandeDAO->creationCommande($maCommande);
        return view('insertionOK');
    }
}
