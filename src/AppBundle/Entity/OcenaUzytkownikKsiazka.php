<?php

namespace AppBundle\Entity;

/**
 * OcenaUzytkownikKsiazka
 */
class OcenaUzytkownikKsiazka
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Ocena
     */
    private $ocenaocena;

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
     * Set ocenaocena
     *
     * @param \AppBundle\Entity\Ocena $ocenaocena
     *
     * @return OcenaUzytkownikKsiazka
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
     * Set fosUser
     *
     * @param \AppBundle\Entity\FosUser $fosUser
     *
     * @return OcenaUzytkownikKsiazka
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
     * @return OcenaUzytkownikKsiazka
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
