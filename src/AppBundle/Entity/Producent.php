<?php

namespace AppBundle\Entity;

/**
 * Producent
 */
class Producent
{
    /**
     * @var integer
     */
    private $idproducent;

    /**
     * @var string
     */
    private $nazwa;


    /**
     * Get idproducent
     *
     * @return integer
     */
    public function getIdproducent()
    {
        return $this->idproducent;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Producent
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
}
