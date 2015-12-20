<?php

namespace AppBundle\Entity;

/**
 * Film
 */
class Film
{
    /**
     * @var integer
     */
    private $idfilm;

    /**
     * @var \AppBundle\Entity\Gatunek
     */
    private $gatunekgatunek1;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rezyserrezyser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rezyserrezyser = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idfilm
     *
     * @return integer
     */
    public function getIdfilm()
    {
        return $this->idfilm;
    }

    /**
     * Set gatunekgatunek1
     *
     * @param \AppBundle\Entity\Gatunek $gatunekgatunek1
     *
     * @return Film
     */
    public function setGatunekgatunek1(\AppBundle\Entity\Gatunek $gatunekgatunek1 = null)
    {
        $this->gatunekgatunek1 = $gatunekgatunek1;

        return $this;
    }

    /**
     * Get gatunekgatunek1
     *
     * @return \AppBundle\Entity\Gatunek
     */
    public function getGatunekgatunek1()
    {
        return $this->gatunekgatunek1;
    }

    /**
     * Add rezyserrezyser
     *
     * @param \AppBundle\Entity\Rezyser $rezyserrezyser
     *
     * @return Film
     */
    public function addRezyserrezyser(\AppBundle\Entity\Rezyser $rezyserrezyser)
    {
        $this->rezyserrezyser[] = $rezyserrezyser;

        return $this;
    }

    /**
     * Remove rezyserrezyser
     *
     * @param \AppBundle\Entity\Rezyser $rezyserrezyser
     */
    public function removeRezyserrezyser(\AppBundle\Entity\Rezyser $rezyserrezyser)
    {
        $this->rezyserrezyser->removeElement($rezyserrezyser);
    }

    /**
     * Get rezyserrezyser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRezyserrezyser()
    {
        return $this->rezyserrezyser;
    }
}
