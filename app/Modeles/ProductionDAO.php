<?php

namespace App\Modeles;
use DB;
use App\Metier\Production;

class ProductionDAO extends DAO
{

    public function getLesProductions()
    {
        $productions = DB::table('production')->get();
        $lesProductions = array();
        foreach ($productions as $laProduction) {
            $idProd = $laProduction->idProd;
            $lesProductions[$idProd] = $this->creerObjetMetier($laProduction);
        }
        return $lesProductions;
    }

   /* public function getConferenceById($idConf)
    {
        //On sélectionne une conference par son id.
        //La requête ne retournant qu'une seule occurrence, on utilise la méthode first de Querybuilder
        $maConference = DB::table('conference')->where('idConf', '=', $idConf)->first();
        $conference = $this->creerObjetMetier($maConference);
        return $conference;
    }*/

    //
    protected function creerObjetMetier(\stdClass $objet)
    {
        $laProduction = new Production();
        $laProduction->setIdProd($objet->idProd);
        $laProduction->setIntituleProd($objet->intituleProd);
        $laProduction->setDescriptionProd($objet->descriptionProd);
        $laProduction->setImageProd($objet->imageProd);
        //Il faut maintenant sélectionner les commentaires associés à la conférence
       /* $commentaireDAO = new CommentaireDAO();
        $lesCommentaires = $commentaireDAO->getLesCommentaires($objet->idConf);
        //Si la conférence possède des commentaires
        if($lesCommentaires){
            //On modifie l'attribut lesCommentaires de la classe Conference
            $laProduction->setLesCommentaires($lesCommentaires);
        }
        else
            $laProduction->setLesCommentaires(null);*/
        return $laProduction;
    }
/*
    public function creationConference(Conference $uneConference){
        DB::table('conference')->insert(['intituleConf'=>$uneConference->getIntituleConf(),'descriptionConf'=>$uneConference->getDescriptionConf()]);
    }*/
}