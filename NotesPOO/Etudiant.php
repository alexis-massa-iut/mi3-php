<?php

namespace POO\Notes;

class Etudiant
{

    private $nom_etu;
    private $prenom_etu;
    private $age_etu;

    public function __construct(string $nom_etu, string $prenom_etu, int $age_etu)
    {
        $this->nom_etu = $nom_etu;
        $this->prenom_etu = $prenom_etu;
        $this->age_etu = $age_etu;
    }




    /**
     * Get the value of nom_etu
     */
    public function getNom_etu(): string
    {
        return $this->nom_etu;
    }

    /**
     * Set the value of nom_etu
     *
     * @return  self
     */
    public function setNom_etu($nom_etu): self
    {
        $this->nom_etu = $nom_etu;

        return $this;
    }

    /**
     * Get the value of prenom_etu
     */
    public function getPrenom_etu(): string
    {
        return $this->prenom_etu;
    }

    /**
     * Set the value of prenom_etu
     *
     * @return  self
     */
    public function setPrenom_etu($prenom_etu): self
    {
        $this->prenom_etu = $prenom_etu;

        return $this;
    }

    /**
     * Get the value of age_etu
     */
    public function getAge_etu(): int
    {
        return $this->age_etu;
    }

    /**
     * Set the value of age_etu
     *
     * @return  self
     */
    public function setAge_etu($age_etu): self
    {
        $this->age_etu = $age_etu;

        return $this;
    }

    public function __toString(): string
    {
        return "Etudiant= {
            nom_etu = $this->nom_etu, 
            prenom_etu = $this->prenom_etu, 
            age = $this->age_etu
        }";
    }
}
