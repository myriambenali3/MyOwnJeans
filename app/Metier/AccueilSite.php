<?php


namespace App\Metier;


class AccueilSite
{
    private $idAcc;
    private $intituleAcc;
    private $descriptionAcc;
    private $imageAcc;

    public function getIdAcc()
    {
        return $this->idAcc;
    }

    public function setIdAcc($idAcc)
    {
        $this->idAcc = $idAcc;
    }

    public function getIntituleAcc()
    {
        return $this->intituleAcc;
    }

    public function setIntituleAcc($intituleAcc)
    {
        $this->intituleAcc = $intituleAcc;
    }

    public function getDescriptionAcc()
    {
        return $this->descriptionAcc;
    }

    public function setDescriptionAcc($descriptionAcc)
    {
        $this->descriptionAcc = $descriptionAcc;
    }

    public function getImageAcc()
    {
        return $this->imageAcc;
    }

    public function setImageAcc($imageAcc)
    {
        $this->imageAcc = $imageAcc;
    }


}