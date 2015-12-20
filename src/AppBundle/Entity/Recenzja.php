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
     * @var integer
     */
    private $uzytkownikOcenaGraGraPozycjaIdpozycja;

    /**
     * @var \AppBundle\Entity\UzytkownikOcenaGra
     */
    private $uzytkownikOcenaGraUzytkownikuzytkownik;


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

    /**
     * Set uzytkownikOcenaGraGraPozycjaIdpozycja
     *
     * @param integer $uzytkownikOcenaGraGraPozycjaIdpozycja
     *
     * @return Recenzja
     */
    public function setUzytkownikOcenaGraGraPozycjaIdpozycja($uzytkownikOcenaGraGraPozycjaIdpozycja)
    {
        $this->uzytkownikOcenaGraGraPozycjaIdpozycja = $uzytkownikOcenaGraGraPozycjaIdpozycja;

        return $this;
    }

    /**
     * Get uzytkownikOcenaGraGraPozycjaIdpozycja
     *
     * @return integer
     */
    public function getUzytkownikOcenaGraGraPozycjaIdpozycja()
    {
        return $this->uzytkownikOcenaGraGraPozycjaIdpozycja;
    }

    /**
     * Set uzytkownikOcenaGraUzytkownikuzytkownik
     *
     * @param \AppBundle\Entity\UzytkownikOcenaGra $uzytkownikOcenaGraUzytkownikuzytkownik
     *
     * @return Recenzja
     */
    public function setUzytkownikOcenaGraUzytkownikuzytkownik(\AppBundle\Entity\UzytkownikOcenaGra $uzytkownikOcenaGraUzytkownikuzytkownik = null)
    {
        $this->uzytkownikOcenaGraUzytkownikuzytkownik = $uzytkownikOcenaGraUzytkownikuzytkownik;

        return $this;
    }

    /**
     * Get uzytkownikOcenaGraUzytkownikuzytkownik
     *
     * @return \AppBundle\Entity\UzytkownikOcenaGra
     */
    public function getUzytkownikOcenaGraUzytkownikuzytkownik()
    {
        return $this->uzytkownikOcenaGraUzytkownikuzytkownik;
    }
}
