<?php

namespace AppBundle\Entity;

/**
 * Deweloper
 */
class Deweloper
{
    /**
     * @var integer
     */
    private $iddeweloper;

    /**
     * @var string
     */
    private $nazwa;


    /**
     * Get iddeweloper
     *
     * @return integer
     */
    public function getIddeweloper()
    {
        return $this->iddeweloper;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Deweloper
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
