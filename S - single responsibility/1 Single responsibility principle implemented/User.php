<?php


class User implements iAuth
{
    /** @var string */
    protected $login;

    /** @var string */
    protected $password;

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

    /**
     * @param string $login
     */
    public function setLogin(string $login)
    {
        $this->login = $login;
    }

    /**
     * @param string $password
     */
    public function sePassword(string $password)
    {
        $this->password = sha1($password);
    }
}