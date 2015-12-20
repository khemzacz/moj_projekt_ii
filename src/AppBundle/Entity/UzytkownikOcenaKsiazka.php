<?php

namespace AppBundle\Entity;

/**
 * UzytkownikOcenaKsiazka
 */
class UzytkownikOcenaKsiazka
{
    /**
     * @var \AppBundle\Entity\Ocena
     */
    private $ocenaocena;

    /**
     * @var \AppBundle\Entity\Uzytkownik
     */
    private $uzytkownikuzytkownik;

    /**
     * @var \AppBundle\Entity\Ksiazka
     */
    private $ksiazkaksiazka;

    /**
     * @var \AppBundle\Entity\Recenzja
     */
    private $recenzjarecenzja;


    /**
     * Set ocenaocena
     *
     * @param \AppBundle\Entity\Ocena $ocenaocena
     *
     * @return UzytkownikOcenaKsiazka
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
     * Set uzytkownikuzytkownik
     *
     * @param \AppBundle\Entity\Uzytkownik $uzytkownikuzytkownik
     *
     * @return UzytkownikOcenaKsiazka
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
     * Set ksiazkaksiazka
     *
     * @param \AppBundle\Entity\Ksiazka $ksiazkaksiazka
     *
     * @return UzytkownikOcenaKsiazka
     */
    public function setKsiazkaksiazka(\AppBundle\Entity\Ksiazka $ksiazkaksiazka = null)
    {
        $this->ksiazkaksiazka = $ksiazkaksiazka;

        return $this;
    }

    /**
     * Get ksiazkaksiazka
     *
     * @return \AppBundle\Entity\Ksiazka
     */
    public function getKsiazkaksiazka()
    {
        return $this->ksiazkaksiazka;
    }

    /**
     * Set recenzjarecenzja
     *
     * @param \AppBundle\Entity\Recenzja $recenzjarecenzja
     *
     * @return UzytkownikOcenaKsiazka
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
    private $iduzocks;


    /**
     * Get iduzocks
     *
     * @return integer
     */
    public function getIduzocks()
    {
        return $this->iduzocks;
    }
}
