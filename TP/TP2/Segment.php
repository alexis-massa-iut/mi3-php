<?php

namespace POO\Figures;

class Segment
{

    private $start;
    private $end;

    public function __construct(Point $start, Point $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

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

    public function __toString(): string
    {
        return "Segment { start: " . $this->getStart() . ", end: " . $this->getEnd() . " }";
    }
}
