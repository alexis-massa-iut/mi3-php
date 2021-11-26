<?php

namespace POO\Figures;

require_once('AFigure.php');

class Point extends AFigure
{
    private $x;
    private $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // GETTERS AND SETTERS
    public function setX(int $x): self
    {
        $this->x = $x;
        return $this;
    }

    public function getX(): int
    {
        return $this->x;
    }


    public function setY(int $y): self
    {
        $this->y = $y;
        return $this;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function __toString(): string
    {
        return parent::getAsString() . "[" . $this->getX() . "; " . $this->getY() . "]";
    }
}
