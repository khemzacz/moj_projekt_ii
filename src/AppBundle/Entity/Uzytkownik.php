<?php

namespace AppBundle\Entity;

/**
 * Uzytkownik
 */
class Uzytkownik
{
    /**
     * @var integer
     */
    private $iduzytkownik;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;


    /**
     * Get iduzytkownik
     *
     * @return integer
     */
    public function getIduzytkownik()
    {
        return $this->iduzytkownik;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Uzytkownik
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Uzytkownik
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
