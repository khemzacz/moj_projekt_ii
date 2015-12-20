<?php

namespace AppBundle\Entity;

/**
 * Autor
 */
class Autor
{
    /**
     * @var integer
     */
    private $idautor;

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
    private $ksiazkaksiazka;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ksiazkaksiazka = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idautor
     *
     * @return integer
     */
    public function getIdautor()
    {
        return $this->idautor;
    }

    /**
     * Set imie
     *
     * @param string $imie
     *
     * @return Autor
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
     * @return Autor
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
     * Add ksiazkaksiazka
     *
     * @param \AppBundle\Entity\Ksiazka $ksiazkaksiazka
     *
     * @return Autor
     */
    public function addKsiazkaksiazka(\AppBundle\Entity\Ksiazka $ksiazkaksiazka)
    {
        $this->ksiazkaksiazka[] = $ksiazkaksiazka;

        return $this;
    }

    /**
     * Remove ksiazkaksiazka
     *
     * @param \AppBundle\Entity\Ksiazka $ksiazkaksiazka
     */
    public function removeKsiazkaksiazka(\AppBundle\Entity\Ksiazka $ksiazkaksiazka)
    {
        $this->ksiazkaksiazka->removeElement($ksiazkaksiazka);
    }

    /**
     * Get ksiazkaksiazka
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKsiazkaksiazka()
    {
        return $this->ksiazkaksiazka;
    }
}
