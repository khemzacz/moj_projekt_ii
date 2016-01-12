<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Imie nie moze zawierac liczby"
     * )
     */
    private $imie;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Nazwisko nie moze zawierac liczby"
     * )
     */
    private $nazwisko;


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
}
