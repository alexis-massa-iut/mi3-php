<?php

namespace POO\Figures;

abstract class AFigure
{
    private $couleur;

    public function __construct(string $couleur)
    {
        $this->couleur = $couleur;
    }

    // GETTERS AND SETTERS
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur($couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }

    /**
     * @return string
     */
    protected function getAsString() : string {
        return 'couleur : ' . $this->couleur;
    }
}
