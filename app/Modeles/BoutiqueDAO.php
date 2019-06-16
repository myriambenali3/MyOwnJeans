<?php


namespace App\Modeles;

use DB;
use App\Metier\Boutique;


class BoutiqueDAO extends DAO
{
    public function getLesBoutiques()
    {
        $boutiques = DB::table('boutique')->get();
        $lesBoutiques = array();
        foreach ($boutiques as $laboutique) {
            $idBout = $laboutique->idBout;
            $lesBoutiques[$idBout] = $this->creerObjetMetier($laboutique);
        }
        return $lesBoutiques;
    }

    public function getBoutiqueById($idBout)
    {
        //On sélectionne un article par son id.
        //La requête ne retournant qu'une seule occurrence, on utilise la méthode first de Querybuilder
        $maBoutique = DB::table('boutique')->where('idBout', '=', $idBout)->first();
        $boutique = $this->creerObjetMetier($maBoutique);
        return $boutique;
    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        $laboutique = new Boutique();
        $laboutique->setIdBout($objet->idBout);
        $laboutique->setIntituleBout($objet->intituleBout);
        $laboutique->setDescriptionBout($objet->descriptionBout);
        $laboutique->setPrixBout($objet->prixBout);
        $laboutique->setImageBout($objet->imageBout);
        return $laboutique;
    }
}