<?php

namespace AppBundle\Entity;

/**
 * Gra
 */
class Gra
{
    /**
     * @var integer
     */
    private $idgra;

    /**
     * @var string
     */
    private $tytul;

    /**
     * @var \AppBundle\Entity\Gatunek
     */
    private $gatunekgatunek;

    /**
     * @var \AppBundle\Entity\RokProdukcji
     */
    private $rokProdukcjirokprodukcji;


    /**
     * Get idgra
     *
     * @return integer
     */
    public function getIdgra()
    {
        return $this->idgra;
    }

    /**
     * Set tytul
     *
     * @param string $tytul
     *
     * @return Gra
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
     * Set gatunekgatunek
     *
     * @param \AppBundle\Entity\Gatunek $gatunekgatunek
     *
     * @return Gra
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
     * @return Gra
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
