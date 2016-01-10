<?php

namespace AppBundle\Entity;

/**
 * FilmProducent
 */
class FilmProducent
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Film
     */
    private $filmfilm;

    /**
     * @var \AppBundle\Entity\Producent
     */
    private $producentproducent;


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
     * Set filmfilm
     *
     * @param \AppBundle\Entity\Film $filmfilm
     *
     * @return FilmProducent
     */
    public function setFilmfilm(\AppBundle\Entity\Film $filmfilm = null)
    {
        $this->filmfilm = $filmfilm;

        return $this;
    }

    /**
     * Get filmfilm
     *
     * @return \AppBundle\Entity\Film
     */
    public function getFilmfilm()
    {
        return $this->filmfilm;
    }

    /**
     * Set producentproducent
     *
     * @param \AppBundle\Entity\Producent $producentproducent
     *
     * @return FilmProducent
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
}
