<?php

namespace POO\Figures;

require_once('AFigure.php');

class Segment extends AFigure
{
    private $start;
    private $end;

    public function __construct(String $couleur, Point $start, Point $end)
    {
        parent::__construct($couleur);
        $this->start = $start;
        $this->end = $end;
    }

    // GETTERS AND SETTERS
    public function getStart(): Point
    {
        return $this->start;
    }

    public function setStart(Point $start): self
    {
        $this->start = $start;
        return $this;
    }

    public function getEnd(): Point
    {
        return $this->end;
    }

    public function setEnd(Point $end): self
    {
        $this->each = $end;
        return $this;
    }

    /**
     * @return float longueur du segment
     */
    public function getLongueur(): float
    {
        $Lx = $this->start->getX() - $this->end->getX();
        $Ly = $this->start->getY() - $this->end->getY();
        $Ax = abs($Lx);
        $Ay = abs($Ly);
        $pow = pow($Ax, 2) + pow($Ay, 2);
        $length = sqrt($pow);
        return $length;
    }

    public function __toString(): string
    {
        return "Segment { start: " . $this->getStart() . ", end: " . $this->getEnd() . " }";
    }
}
