<?php

namespace AppBundle\Entity;

/**
 * FilmRezyser
 */
class FilmRezyser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Rezyser
     */
    private $rezyserrezyser;

    /**
     * @var \AppBundle\Entity\Film
     */
    private $filmfilm;


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
     * Set rezyserrezyser
     *
     * @param \AppBundle\Entity\Rezyser $rezyserrezyser
     *
     * @return FilmRezyser
     */
    public function setRezyserrezyser(\AppBundle\Entity\Rezyser $rezyserrezyser = null)
    {
        $this->rezyserrezyser = $rezyserrezyser;

        return $this;
    }

    /**
     * Get rezyserrezyser
     *
     * @return \AppBundle\Entity\Rezyser
     */
    public function getRezyserrezyser()
    {
        return $this->rezyserrezyser;
    }

    /**
     * Set filmfilm
     *
     * @param \AppBundle\Entity\Film $filmfilm
     *
     * @return FilmRezyser
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
}
