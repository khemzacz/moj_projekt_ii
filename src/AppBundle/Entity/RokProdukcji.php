<?php

namespace AppBundle\Entity;

/**
 * RokProdukcji
 */
class RokProdukcji
{
    /**
     * @var integer
     */
    private $idrokprodukcji;

    /**
     * @var \DateTime
     */
    private $rok;


    /**
     * Get idrokprodukcji
     *
     * @return integer
     */
    public function getIdrokprodukcji()
    {
        return $this->idrokprodukcji;
    }

    /**
     * Set rok
     *
     * @param \DateTime $rok
     *
     * @return RokProdukcji
     */
    public function setRok($rok)
    {
        $this->rok = $rok;

        return $this;
    }

    /**
     * Get rok
     *
     * @return \DateTime
     */
    public function getRok()
    {
        return $this->rok;
    }

    public function __toString()
    {
        return $this->getRok()."";
    }
}
