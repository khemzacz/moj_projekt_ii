<?php

namespace AppBundle\Entity;

/**
 * Ocena
 */
class Ocena
{
    /**
     * @var integer
     */
    private $idocena;

    /**
     * @var string
     */
    private $ocena;


    /**
     * Get idocena
     *
     * @return integer
     */
    public function getIdocena()
    {
        return $this->idocena;
    }

    /**
     * Set ocena
     *
     * @param string $ocena
     *
     * @return Ocena
     */
    public function setOcena($ocena)
    {
        $this->ocena = $ocena;

        return $this;
    }

    /**
     * Get ocena
     *
     * @return string
     */
    public function getOcena()
    {
        return $this->ocena;
    }
}
