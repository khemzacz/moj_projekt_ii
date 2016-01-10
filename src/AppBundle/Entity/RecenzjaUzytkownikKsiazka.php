<?php

namespace AppBundle\Entity;

/**
 * RecenzjaUzytkownikKsiazka
 */
class RecenzjaUzytkownikKsiazka
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Recenzja
     */
    private $recenzjarecenzja;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $fosUser;

    /**
     * @var \AppBundle\Entity\Ksiazka
     */
    private $ksiazkaksiazka;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set recenzjarecenzja
     *
     * @param \AppBundle\Entity\Recenzja $recenzjarecenzja
     *
     * @return RecenzjaUzytkownikKsiazka
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
     * Set fosUser
     *
     * @param \AppBundle\Entity\FosUser $fosUser
     *
     * @return RecenzjaUzytkownikKsiazka
     */
    public function setFosUser(\AppBundle\Entity\FosUser $fosUser = null)
    {
        $this->fosUser = $fosUser;

        return $this;
    }

    /**
     * Get fosUser
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getFosUser()
    {
        return $this->fosUser;
    }

    /**
     * Set ksiazkaksiazka
     *
     * @param \AppBundle\Entity\Ksiazka $ksiazkaksiazka
     *
     * @return RecenzjaUzytkownikKsiazka
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
}
