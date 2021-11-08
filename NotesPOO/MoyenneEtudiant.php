<?php

namespace POO\Notes;

class MoyenneEtudiant
{
    private array $moyennes_modules;

    public function __construct()
    {
        $this->moyennes_modules = array();
    }



    /**
     * Get the value of moyennes_modules
     */
    public function getMoyennes_modules(): array
    {
        return $this->moyennes_modules;
    }

    /**
     * Set the value of moyennes_modules
     *
     * @return  self
     */
    public function setMoyennes_modules($moyennes_modules): self
    {
        $this->moyennes_modules = $moyennes_modules;

        return $this;
    }

    public function addMoyenne($moyenne_module): self
    {
        $this->moyennes_modules[] = $moyenne_module;

        return $this;
    }

    public function __toString()
    {
        return "MoyenneEtudiant={
            moyennes_modules = $this->moyennes_modules;
        }";
    }
}
