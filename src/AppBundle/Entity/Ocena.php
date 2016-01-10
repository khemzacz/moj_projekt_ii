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
     * @var integer
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
     * @param integer $ocena
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
     * @return integer
     */
    public function getOcena()
    {
        return $this->ocena;
    }
}
