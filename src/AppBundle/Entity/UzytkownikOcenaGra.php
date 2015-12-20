<?php

namespace AppBundle\Entity;

/**
 * UzytkownikOcenaGra
 */
class UzytkownikOcenaGra
{
    /**
     * @var integer
     */
    private $graGatunekIdgatunek;

    /**
     * @var \AppBundle\Entity\Uzytkownik
     */
    private $uzytkownikuzytkownik;

    /**
     * @var \AppBundle\Entity\Ocena
     */
    private $ocenaocena;

    /**
     * @var \AppBundle\Entity\Gra
     */
    private $gragra;


    /**
     * Set graGatunekIdgatunek
     *
     * @param integer $graGatunekIdgatunek
     *
     * @return UzytkownikOcenaGra
     */
    public function setGraGatunekIdgatunek($graGatunekIdgatunek)
    {
        $this->graGatunekIdgatunek = $graGatunekIdgatunek;

        return $this;
    }

    /**
     * Get graGatunekIdgatunek
     *
     * @return integer
     */
    public function getGraGatunekIdgatunek()
    {
        return $this->graGatunekIdgatunek;
    }

    /**
     * Set uzytkownikuzytkownik
     *
     * @param \AppBundle\Entity\Uzytkownik $uzytkownikuzytkownik
     *
     * @return UzytkownikOcenaGra
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
     * @return UzytkownikOcenaGra
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
     * Set gragra
     *
     * @param \AppBundle\Entity\Gra $gragra
     *
     * @return UzytkownikOcenaGra
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
     * @var integer
     */
    private $iduzocgr;

    /**
     * @var \AppBundle\Entity\Recenzja
     */
    private $recenzjarecenzja;


    /**
     * Get iduzocgr
     *
     * @return integer
     */
    public function getIduzocgr()
    {
        return $this->iduzocgr;
    }

    /**
     * Set recenzjarecenzja
     *
     * @param \AppBundle\Entity\Recenzja $recenzjarecenzja
     *
     * @return UzytkownikOcenaGra
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
}
