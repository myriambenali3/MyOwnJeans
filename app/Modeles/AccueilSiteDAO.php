<?php


namespace App\Modeles;
use DB;
use App\Metier\AccueilSite;


class AccueilSiteDAO extends DAO
{
    public function getLesAccueils()
    {
        $accueils = DB::table('accueilSite')->get();
        $lesAccueils = array();
        foreach ($accueils as $laccueil) {
            $idAcc = $laccueil->idAcc;
            $lesAccueils[$idAcc] = $this->creerObjetMetier($laccueil);
        }
        return $lesAccueils;
    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        $laccueil = new AccueilSite();
        $laccueil->setIdAcc($objet->idAcc);
        $laccueil->setIntituleAcc($objet->intituleAcc);
        $laccueil->setDescriptionAcc($objet->descriptionAcc);
        $laccueil->setImageAcc($objet->imageAcc);
        return $laccueil;
    }
}