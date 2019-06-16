<?php


namespace App\Metier;


class Commande
{
    private $idCom;
    private $nomCom;
    private $prenomCom;
    private $mailCom;
    private $numCom;
    private $descriptionCom;


    public function getIdCom()
    {
        return $this->idCom;
    }

    public function setIdConf($idCom)
    {
        $this->idCom = $idCom;
    }

    public function getNomCom()
    {
        return $this->nomCom;
    }

    public function setNomCom($nomCom)
    {
        $this->nomCom = $nomCom;
    }

    public function getPrenomCom()
    {
        return $this->prenomCom;
    }

    public function setPrenomCom($prenomCom)
    {
        $this->prenomCom = $prenomCom;
    }

    public function getMailCom()
    {
        return $this->mailCom;
    }

    public function setMailCom($mailCom)
    {
        $this->mailCom = $mailCom;
    }

    public function getNumCom()
    {
        return $this->numCom;
    }

    public function setNumCom($numCom)
    {
        $this->numCom = $numCom;
    }

    public function getDescriptionCom()
    {
        return $this->descriptionCom;
    }

    public function setDescriptionCom($descriptionCom)
    {
        $this->descriptionCom = $descriptionCom;
    }


}