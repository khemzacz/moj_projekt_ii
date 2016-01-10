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
     * @var string
     */
    private $tytul;

    /**
     * @var \AppBundle\Entity\Gatunek
     */
    private $gatunekgatunek1;

    /**
     * @var \AppBundle\Entity\RokProdukcji
     */
    private $rokProdukcjirokprodukcji;


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
     * Set tytul
     *
     * @param string $tytul
     *
     * @return Film
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
     * Set rokProdukcjirokprodukcji
     *
     * @param \AppBundle\Entity\RokProdukcji $rokProdukcjirokprodukcji
     *
     * @return Film
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
