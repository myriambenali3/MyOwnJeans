<?php


namespace App\Metier;


class Boutique
{
    private $idBout;
    private $intituleBout;
    private $descriptionBout;
    private $prixBout;
    private $imageBout;
    private $lesCommentaires=array();

    public function getIdBout()
    {
        return $this->idBout;
    }

    public function setIdBout($idBout)
    {
        $this->idBout = $idBout;
    }

    public function getIntituleBout()
    {
        return $this->intituleBout;
    }

    public function setIntituleBout($intituleBout)
    {
        $this->intituleBout = $intituleBout;
    }

    public function getDescriptionBout()
    {
        return $this->descriptionBout;
    }

    public function setDescriptionBout($descriptionBout)
    {
        $this->descriptionBout = $descriptionBout;
    }

    public function getPrixBout()
    {
        return $this->prixBout;
    }

    public function setPrixBout($prixBout)
    {
        $this->prixBout = $prixBout;
    }

    public function getImageBout()
    {
        return $this->imageBout;
    }

    public function setImageBout($imageBout)
    {
        $this->imageBout = $imageBout;
    }

    public function getLesCommentaires()
    {
        return $this->lesCommentaires;
    }

    public function setLesCommentaires($commentaires)
    {
        $this->lesCommentaires=$commentaires;
    }


}