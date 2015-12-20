<?php

namespace AppBundle\Entity;

/**
 * UzytkownikOcenaFilm
 */
class UzytkownikOcenaFilm
{
    /**
     * @var \AppBundle\Entity\Uzytkownik
     */
    private $uzytkownikuzytkownik;

    /**
     * @var \AppBundle\Entity\Ocena
     */
    private $ocenaocena;

    /**
     * @var \AppBundle\Entity\Recenzja
     */
    private $recenzjarecenzja;


    /**
     * Set uzytkownikuzytkownik
     *
     * @param \AppBundle\Entity\Uzytkownik $uzytkownikuzytkownik
     *
     * @return UzytkownikOcenaFilm
     */
    public function setUzytkownikuzytkownik(\AppBundle\Entity\Uzytkownik $uzytkownikuzytkownik = null)
    {
        $this->uzytkownikuzytkownik = $uzytkownikuzytkownik;

        return $this;
    }

    /**
     * Get uzytkownikuzytkownik
     *
     * @return \AppBundle\Entity\Uzytkownik
     */
    public function getUzytkownikuzytkownik()
    {
        return $this->uzytkownikuzytkownik;
    }

    /**
     * Set ocenaocena
     *
     * @param \AppBundle\Entity\Ocena $ocenaocena
     *
     * @return UzytkownikOcenaFilm
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
     * Set recenzjarecenzja
     *
     * @param \AppBundle\Entity\Recenzja $recenzjarecenzja
     *
     * @return UzytkownikOcenaFilm
     */
    public function setRecenzjarecenzja(\AppBundle\Entity\Recenzja $recenzjarecenzja = null)
    {
        $this->recenzjarecenzja = $recenzjarecenzja;

        return $this;
    }

    /**
     * Get recenzjarecenzja
     *
     * @return \AppBundle\Entity\Recenzja
     */
    public function getRecenzjarecenzja()
    {
        return $this->recenzjarecenzja;
    }
    /**
     * @var integer
     */
    private $idUzocfi;

    /**
     * @var \AppBundle\Entity\Film
     */
    private $filmfilm;


    /**
     * Set idUzocfi
     *
     * @param integer $idUzocfi
     *
     * @return UzytkownikOcenaFilm
     */
    public function setIdUzocfi($idUzocfi)
    {
        $this->idUzocfi = $idUzocfi;

        return $this;
    }

    /**
     * Get idUzocfi
     *
     * @return integer
     */
    public function getIdUzocfi()
    {
        return $this->idUzocfi;
    }

    /**
     * Set filmfilm
     *
     * @param \AppBundle\Entity\Film $filmfilm
     *
     * @return UzytkownikOcenaFilm
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
