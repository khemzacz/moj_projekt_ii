<?php

namespace AppBundle\Entity;

/**
 * OcenaUzytkownikGra
 */
class OcenaUzytkownikGra
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
     * @var \AppBundle\Entity\Gra
     */
    private $gragra;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $fosUser;


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
     * @return OcenaUzytkownikGra
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
     * Set gragra
     *
     * @param \AppBundle\Entity\Gra $gragra
     *
     * @return OcenaUzytkownikGra
     */
    public function setGragra(\AppBundle\Entity\Gra $gragra = null)
    {
        $this->gragra = $gragra;

        return $this;
    }

    /**
     * Get gragra
     *
     * @return \AppBundle\Entity\Gra
     */
    public function getGragra()
    {
        return $this->gragra;
    }

    /**
     * Set fosUser
     *
     * @param \AppBundle\Entity\FosUser $fosUser
     *
     * @return OcenaUzytkownikGra
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
}
