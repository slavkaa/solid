<?php


class User implements iAuth
{
    /** @var string */
    private $login;

    /** @var string */
    private $password;

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}