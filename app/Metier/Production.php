<?php


namespace App\Metier;


class Production
{
    private $idProd;
    private $intituleProd;


    public function getIdProd()
    {
        return $this->idProd;
    }

    public function setIdProd($idProd)
    {
        $this->idProd = $idProd;
    }

    public function getIntituleProd()
    {
        return $this->intituleProd;
    }

    public function setIntituleProd($intituleProd)
    {
        $this->intituleProd = $intituleProd;
    }

    public function getDescriptionProd()
    {
        return $this->descriptionProd;
    }

    public function setDescriptionProd($descriptionProd)
    {
        $this->descriptionProd = $descriptionProd;
    }

    public function getImageProd()
    {
        return $this->imageProd;
    }

    public function setImageProd($imageProd)
    {
        $this->imageProd = $imageProd;
    }


}