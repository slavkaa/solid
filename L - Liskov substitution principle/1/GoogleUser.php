<?php


class GoogleUser extends User implements iAuth
{
    /** @var string */
    private $email;

    /**
     * @param string $login
     */
    public function setLogin(string $login)
    {
        $this->login = $login;
        $this->setEmail($login);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}