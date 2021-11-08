<?php

namespace ecommerce;

class Produit {
    
    private $_nom;
    private $_prix;

    function __construct($_nom, $_prix) {
        $this->_nom = $_nom;
        $this->_prix = $_prix;
    }

    function get_nom() {
        return $this->_nom;
    }

    function get_prix() {
        return $this->_prix;
    }

    function set_nom($_nom) {
        $this->_nom = $_nom;
    }

    function set_prix($_prix) {
        $this->_prix = $_prix;
    }

    function __toString()
    {
        return 'Prod : référence='.$this->_nom.', prix='.$this->_prix;
    }
}
