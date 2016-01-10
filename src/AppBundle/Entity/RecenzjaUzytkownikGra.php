<?php

namespace AppBundle\Entity;

/**
 * RecenzjaUzytkownikGra
 */
class RecenzjaUzytkownikGra
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
     * @var \AppBundle\Entity\Gra
     */
    private $gragra;


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
     * @return RecenzjaUzytkownikGra
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
     * @return RecenzjaUzytkownikGra
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
     * Set gragra
     *
     * @param \AppBundle\Entity\Gra $gragra
     *
     * @return RecenzjaUzytkownikGra
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
}
