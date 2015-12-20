<?php

namespace AppBundle\Entity;

/**
 * Rezyser
 */
class Rezyser
{
    /**
     * @var integer
     */
    private $idrezyser;

    /**
     * @var string
     */
    private $imie;

    /**
     * @var string
     */
    private $nazwisko;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $filmfilm;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->filmfilm = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idrezyser
     *
     * @return integer
     */
    public function getIdrezyser()
    {
        return $this->idrezyser;
    }

    /**
     * Set imie
     *
     * @param string $imie
     *
     * @return Rezyser
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     *
     * @return Rezyser
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Add filmfilm
     *
     * @param \AppBundle\Entity\Film $filmfilm
     *
     * @return Rezyser
     */
    public function addFilmfilm(\AppBundle\Entity\Film $filmfilm)
    {
        $this->filmfilm[] = $filmfilm;

        return $this;
    }

    /**
     * Remove filmfilm
     *
     * @param \AppBundle\Entity\Film $filmfilm
     */
    public function removeFilmfilm(\AppBundle\Entity\Film $filmfilm)
    {
        $this->filmfilm->removeElement($filmfilm);
    }

    /**
     * Get filmfilm
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilmfilm()
    {
        return $this->filmfilm;
    }
}
