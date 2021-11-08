<?php

namespace ecommerce;

class LignePanier {
    
    private $_produit;
    private $_quantite;
    
    public function __construct($_produit, $_quantite) {
        $this->_produit = $_produit;
        $this->_quantite = $_quantite;
    }

    public function get_produit() {
        return $this->_produit;
    }

    public function get_quantite() {
        return $this->_quantite;
    }

    public function set_produit($_produit) {
        $this->_produit = $_produit;
    }

    public function set_quantite($_quantite) {
        $this->_quantite = $_quantite;
    }

    public function getMontant() {
        /*$prod = $this->_produit;
        $prix = $prod->get_prix();
        return $prix * $this->_quantite;*/
        return $this->_produit->get_prix()* $this->_quantite;
    }
}
