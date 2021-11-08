<?php

namespace POO\Notes;

class MoyenneModule
{

    private Etudiant $etudiant;
    private Module $module;
    private float $moyenne;

    public function __construct($etudiant, $module, $moyenne)
    {
        $this->etudiant = $etudiant;
        $this->module = $module;
        $this->moyenne = $moyenne;
    }

    /**
     * Get the value of etudiant
     */
    public function getEtudiant(): Etudiant
    {
        return $this->etudiant;
    }

    /**
     * Set the value of etudiant
     *
     * @return  self
     */
    public function setEtudiant($etudiant): self
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get the value of module
     */
    public function getModule(): Module
    {
        return $this->module;
    }

    /**
     * Set the value of module
     *
     * @return  self
     */
    public function setModule($module): self
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get the value of moyenne
     */
    public function getMoyenne(): float
    {
        return $this->moyenne;
    }

    /**
     * Set the value of moyenne
     *
     * @return  self
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    public function __toString()
    {
        return "MoyenneModule={ 
            etudiant = $this->etudiant, 
            module = $this->module, 
            moyenne = $this->moyenne 
        }";
    }
}
