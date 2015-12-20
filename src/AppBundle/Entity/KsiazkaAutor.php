<?php

namespace AppBundle\Entity;

/**
 * KsiazkaAutor
 */
class KsiazkaAutor
{
    /**
     * @var integer
     */
    private $idksiazkaautor;

    /**
     * @var \AppBundle\Entity\Ksiazka
     */
    private $ksiazkaksiazka;

    /**
     * @var \AppBundle\Entity\Autor
     */
    private $autorautor;


    /**
     * Get idksiazkaautor
     *
     * @return integer
     */
    public function getIdksiazkaautor()
    {
        return $this->idksiazkaautor;
    }

    /**
     * Set ksiazkaksiazka
     *
     * @param \AppBundle\Entity\Ksiazka $ksiazkaksiazka
     *
     * @return KsiazkaAutor
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
     * Set autorautor
     *
     * @param \AppBundle\Entity\Autor $autorautor
     *
     * @return KsiazkaAutor
     */
    public function setAutorautor(\AppBundle\Entity\Autor $autorautor = null)
    {
        $this->autorautor = $autorautor;

        return $this;
    }

    /**
     * Get autorautor
     *
     * @return \AppBundle\Entity\Autor
     */
    public function getAutorautor()
    {
        return $this->autorautor;
    }
}

