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
     * @var \AppBundle\Entity\Gatunek
     */
    private $gatunekgatunek;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $autorautor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->autorautor = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add autorautor
     *
     * @param \AppBundle\Entity\Autor $autorautor
     *
     * @return Ksiazka
     */
    public function addAutorautor(\AppBundle\Entity\Autor $autorautor)
    {
        $this->autorautor[] = $autorautor;

        return $this;
    }

    /**
     * Remove autorautor
     *
     * @param \AppBundle\Entity\Autor $autorautor
     */
    public function removeAutorautor(\AppBundle\Entity\Autor $autorautor)
    {
        $this->autorautor->removeElement($autorautor);
    }

    /**
     * Get autorautor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAutorautor()
    {
        return $this->autorautor;
    }
}
