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
}
