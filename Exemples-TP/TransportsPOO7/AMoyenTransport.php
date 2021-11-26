<?php
namespace POO\transports;

require_once('IDisplayable.php');

abstract class AMoyenTransport implements IDisplayable {

    // PHP 7.4
    /*private string $modele;
    private string $capaciteMaxPassagers;*/
    private $modele;
    private $capaciteMaxPassagers;

    /**
     * AMoyenTransport constructor.
     * @param string $modele Modele du moyen de transport
     * @param string $capaciteMaxPassagers
     */
    public function __construct(string $modele, string $capaciteMaxPassagers)
    {
        $this->modele = $modele;
        $this->capaciteMaxPassagers = $capaciteMaxPassagers;
    }

    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return string
     */
    public function getCapaciteMaxPassagers(): string
    {
        return $this->capaciteMaxPassagers;
    }

    /**
     * @param string $capaciteMaxPassagers
     */
    public function setCapaciteMaxPassagers(string $capaciteMaxPassagers): void
    {
        $this->capaciteMaxPassagers = $capaciteMaxPassagers;
    }


    /**
     * @return string
     */
    protected function getAsString() : string {
        return 'modele : ' . $this->modele . ', capacité passagers : ' .
            $this->capaciteMaxPassagers;
    }

    //public abstract function __toString() : string;
}
?>