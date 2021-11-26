<?php

namespace POO\Notes;

class Module
{

    private string $nom_mod;
    private int $coef_mod;

    public function __construct($nom_mod, $coef_mod)
    {
        $this->nom_mod = $nom_mod;
        $this->coef_mod = $coef_mod;
    }

    /**
     * Get the value of nom_mod
     */
    public function getnom_mod(): string
    {
        return $this->nom_mod;
    }

    /**
     * Set the value of nom_mod
     *
     * @return  self
     */
    public function setnom_mod($nom_mod): self
    {
        $this->nom_mod = $nom_mod;

        return $this;
    }

    /**
     * Get the value of coef_mod
     */
    public function getcoef_mod(): int
    {
        return $this->coef_mod;
    }

    /**
     * Set the value of coef_mod
     *
     * @return  self
     */
    public function setcoef_mod($coef_mod): self
    {
        $this->coef_mod = $coef_mod;

        return $this;
    }

    public function __toString(): string
    {
        return "Module={
            nom_mod = $this->nom_mod,
            coef_mod = $this->coef_mod
        }";
    }
}
