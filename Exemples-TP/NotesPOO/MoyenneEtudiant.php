<?php

namespace POO\Notes;

class MoyenneEtudiant
{
    private array $moyennes_modules;
    private int $moyenne_generale;

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

    public function calcMoyenneGenerale(): float
    {
        $total_notes = 0;
        $total_coef = 0;
        $moyenne = 0;
        foreach ($this->moyennes_modules as $moyenne_module) {
            $total_coef += $moyenne_module->getModule()->getcoef_mod();
            $total_notes += $moyenne_module->getMoyenne() * $moyenne_module->getModule()->getcoef_mod();
        }
        $moyenne = $total_notes / $total_coef;
        return $moyenne;
    }

    public function __toString()
    {
        return "MoyenneEtudiant={
            moyennes_modules = <br>{<br> " . implode("<br>", $this->moyennes_modules) . "<br>},
            <br> moyenne_generale = " . $this->calcMoyenneGenerale() . "
        }";
    }
}
