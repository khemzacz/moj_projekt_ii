<?php

namespace AppBundle\Entity;

/**
 * OcenaUztkownikFilm
 */
class OcenaUztkownikFilm
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Ocena
     */
    private $ocenaocena;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $fosUser;

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
     * Set ocenaocena
     *
     * @param \AppBundle\Entity\Ocena $ocenaocena
     *
     * @return OcenaUztkownikFilm
     */
    public function setOcenaocena(\AppBundle\Entity\Ocena $ocenaocena = null)
    {
        $this->ocenaocena = $ocenaocena;

        return $this;
    }

    /**
     * Get ocenaocena
     *
     * @return \AppBundle\Entity\Ocena
     */
    public function getOcenaocena()
    {
        return $this->ocenaocena;
    }

    /**
     * Set fosUser
     *
     * @param \AppBundle\Entity\FosUser $fosUser
     *
     * @return OcenaUztkownikFilm
     */
    public function setFosUser(\AppBundle\Entity\FosUser $fosUser = null)
    {
        $this->fosUser = $fosUser;

        return $this;
    }

    /**
     * Get fosUser
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getFosUser()
    {
        return $this->fosUser;
    }

    /**
     * Set filmfilm
     *
     * @param \AppBundle\Entity\Film $filmfilm
     *
     * @return OcenaUztkownikFilm
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
