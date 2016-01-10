<?php

namespace AppBundle\Entity;

/**
 * Recenzja
 */
class Recenzja
{
    /**
     * @var integer
     */
    private $idrecenzja;

    /**
     * @var string
     */
    private $tresc;


    /**
     * Get idrecenzja
     *
     * @return integer
     */
    public function getIdrecenzja()
    {
        return $this->idrecenzja;
    }

    /**
     * Set tresc
     *
     * @param string $tresc
     *
     * @return Recenzja
     */
    public function setTresc($tresc)
    {
        $this->tresc = $tresc;

        return $this;
    }

    /**
     * Get tresc
     *
     * @return string
     */
    public function getTresc()
    {
        return $this->tresc;
    }
}
