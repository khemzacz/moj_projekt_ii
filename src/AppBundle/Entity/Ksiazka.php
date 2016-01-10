<?php

namespace AppBundle\Entity;

/**
 * Ksiazka
 */
class Ksiazka
{
    /**
     * @var integer
     */
    private $idksiazka;

    /**
     * @var string
     */
    private $tytul;

    /**
     * @var string
     */
    private $ksiazkacol;

    /**
     * @var \AppBundle\Entity\Gatunek
     */
    private $gatunekgatunek;

    /**
     * @var \AppBundle\Entity\RokProdukcji
     */
    private $rokProdukcjirokprodukcji;


    /**
     * Get idksiazka
     *
     * @return integer
     */
    public function getIdksiazka()
    {
        return $this->idksiazka;
    }

    /**
     * Set tytul
     *
     * @param string $tytul
     *
     * @return Ksiazka
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;

        return $this;
    }

    /**
     * Get tytul
     *
     * @return string
     */
    public function getTytul()
    {
        return $this->tytul;
    }

    /**
     * Set ksiazkacol
     *
     * @param string $ksiazkacol
     *
     * @return Ksiazka
     */
    public function setKsiazkacol($ksiazkacol)
    {
        $this->ksiazkacol = $ksiazkacol;

        return $this;
    }

    /**
     * Get ksiazkacol
     *
     * @return string
     */
    public function getKsiazkacol()
    {
        return $this->ksiazkacol;
    }

    /**
     * Set gatunekgatunek
     *
     * @param \AppBundle\Entity\Gatunek $gatunekgatunek
     *
     * @return Ksiazka
     */
    public function setGatunekgatunek(\AppBundle\Entity\Gatunek $gatunekgatunek = null)
    {
        $this->gatunekgatunek = $gatunekgatunek;

        return $this;
    }

    /**
     * Get gatunekgatunek
     *
     * @return \AppBundle\Entity\Gatunek
     */
    public function getGatunekgatunek()
    {
        return $this->gatunekgatunek;
    }

    /**
     * Set rokProdukcjirokprodukcji
     *
     * @param \AppBundle\Entity\RokProdukcji $rokProdukcjirokprodukcji
     *
     * @return Ksiazka
     */
    public function setRokProdukcjirokprodukcji(\AppBundle\Entity\RokProdukcji $rokProdukcjirokprodukcji = null)
    {
        $this->rokProdukcjirokprodukcji = $rokProdukcjirokprodukcji;

        return $this;
    }

    /**
     * Get rokProdukcjirokprodukcji
     *
     * @return \AppBundle\Entity\RokProdukcji
     */
    public function getRokProdukcjirokprodukcji()
    {
        return $this->rokProdukcjirokprodukcji;
    }
}
