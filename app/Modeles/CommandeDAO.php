<?php


namespace App\Modeles;


use DB;
use App\Metier\Commande;


class CommandeDAO
{
    public function creationCommande(Commande $uneCommande){
        DB::table('commande')->insert(['nomCom'=>$uneCommande->getNomCom(),'prenomCom'=>$uneCommande->getPrenomCom(), 'mailCom'=>$uneCommande->getMailCom(),'numCom'=>$uneCommande->getNumCom(), 'descriptionCom'=>$uneCommande->getDescriptionCom()]);
    }

}
