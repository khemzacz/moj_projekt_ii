<?php

namespace AppBundle\Entity;

/**
 * GraDeweloper
 */
class GraDeweloper
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Gra
     */
    private $gragra;

    /**
     * @var \AppBundle\Entity\Deweloper
     */
    private $deweloperdeweloper;


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
     * Set gragra
     *
     * @param \AppBundle\Entity\Gra $gragra
     *
     * @return GraDeweloper
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

    /**
     * Set deweloperdeweloper
     *
     * @param \AppBundle\Entity\Deweloper $deweloperdeweloper
     *
     * @return GraDeweloper
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
}
