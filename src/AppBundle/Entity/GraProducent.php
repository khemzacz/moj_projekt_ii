<?php

namespace AppBundle\Entity;

/**
 * GraProducent
 */
class GraProducent
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Producent
     */
    private $producentproducent;

    /**
     * @var \AppBundle\Entity\Gra
     */
    private $gragra;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set producentproducent
     *
     * @param \AppBundle\Entity\Producent $producentproducent
     *
     * @return GraProducent
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
     * Set gragra
     *
     * @param \AppBundle\Entity\Gra $gragra
     *
     * @return GraProducent
     */
    public function setGragra(\AppBundle\Entity\Gra $gragra = null)
    {
        $this->gragra = $gragra;

        return $this;
    }

    /**
     * Get gragra
     *
     * @return \AppBundle\Entity\Gra
     */
    public function getGragra()
    {
        return $this->gragra;
    }
}
