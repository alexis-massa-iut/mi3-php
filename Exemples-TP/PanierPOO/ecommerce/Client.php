<?php

namespace ecommerce;

class Client
{
    private $_num;
    private $_nom;
    private $_prenom;

    /**
     * Client constructor.
     * @param $_num
     * @param $_nom
     * @param $_prenom
     */
    public function __construct($_num, $_nom, $_prenom)
    {
        $this->_num = $_num;
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->_num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num): void
    {
        $this->_num = $num;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->_prenom = $prenom;
    }

    public function __toString()
    {
        return 'Client : num='.$this->_num;
    }

}