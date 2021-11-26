<?php

namespace ecommerce;

class Panier {
    
    private $_refClient;
    private $_lignesPanier;

    public function __construct($_refClient, $_lignesPanier) {
        $this->_refClient = $_refClient;
        $this->_lignesPanier = $_lignesPanier;
    }

    public function get_refClient() {
        return $this->_refClient;
    }

    public function get_lignesPanier() {
        return $this->_lignesPanier;
    }

    public function set_refClient($_refClient) {
        $this->_refClient = $_refClient;
    }

    public function set_lignesPanier($_lignesPanier) {
        $this->_lignesPanier = $_lignesPanier;
    }

    public  function ajouterLigne($uneLignePanier) {
        $this->_lignesPanier[]=$uneLignePanier;
    }

    public function getMontantTotal() {
        
        $montantTotal=0;
        
        foreach ($this->_lignesPanier as $lPanier) {
            $montantTotal += $lPanier->getMontant();
        }
        
        return $montantTotal;
    }
}
