<?php

namespace AppBundle\Entity;

/**
 * Gra
 */
class Gra
{
    /**
     * @var integer
     */
    private $idgra;

    /**
     * @var \AppBundle\Entity\Deweloper
     */
    private $deweloperdeweloper;

    /**
     * @var \AppBundle\Entity\Producent
     */
    private $producentproducent;

    /**
     * @var \AppBundle\Entity\Gatunek
     */
    private $gatunekgatunek1;


    /**
     * Get idgra
     *
     * @return integer
     */
    public function getIdgra()
    {
        return $this->idgra;
    }

    /**
     * Set deweloperdeweloper
     *
     * @param \AppBundle\Entity\Deweloper $deweloperdeweloper
     *
     * @return Gra
     */
    public function setDeweloperdeweloper(\AppBundle\Entity\Deweloper $deweloperdeweloper = null)
    {
        $this->deweloperdeweloper = $deweloperdeweloper;

        return $this;
    }

    /**
     * Get deweloperdeweloper
     *
     * @return \AppBundle\Entity\Deweloper
     */
    public function getDeweloperdeweloper()
    {
        return $this->deweloperdeweloper;
    }

    /**
     * Set producentproducent
     *
     * @param \AppBundle\Entity\Producent $producentproducent
     *
     * @return Gra
     */
    public function setProducentproducent(\AppBundle\Entity\Producent $producentproducent = null)
    {
        $this->producentproducent = $producentproducent;

        return $this;
    }

    /**
     * Get producentproducent
     *
     * @return \AppBundle\Entity\Producent
     */
    public function getProducentproducent()
    {
        return $this->producentproducent;
    }

    /**
     * Set gatunekgatunek1
     *
     * @param \AppBundle\Entity\Gatunek $gatunekgatunek1
     *
     * @return Gra
     */
    public function setGatunekgatunek1(\AppBundle\Entity\Gatunek $gatunekgatunek1 = null)
    {
        $this->gatunekgatunek1 = $gatunekgatunek1;

        return $this;
    }

    /**
     * Get gatunekgatunek1
     *
     * @return \AppBundle\Entity\Gatunek
     */
    public function getGatunekgatunek1()
    {
        return $this->gatunekgatunek1;
    }
}
