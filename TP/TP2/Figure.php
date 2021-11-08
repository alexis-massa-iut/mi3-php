<?php

namespace POO\Figures;

class Figure
{
    private $couleur;

    public function __construct(string $couleur)
    {
        $this->couleur = $couleur;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur($couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }

    public function draw()
    {
    }
}
