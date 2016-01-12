<?php

namespace AppBundle\Entity;

/**
 * Gatunek
 */
class Gatunek
{
    /**
     * @var integer
     */
    private $idgatunek;

    /**
     * @var string
     */
    private $nazwa;


    /**
     * Get idgatunek
     *
     * @return integer
     */
    public function getIdgatunek()
    {
        return $this->idgatunek;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Gatunek
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    public function __toString()
    {
        return $this->getNazwa();
    }
}
