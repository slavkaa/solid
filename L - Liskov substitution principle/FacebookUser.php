<?php


class FacebookUser extends User implements iAuth
{
    /** @var string */
    private $social_id;

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
     * @return string
     */
    public function getSocialId()
    {
        return $this->social_id;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $social_id
     */
    public function setSocialId(string $social_id)
    {
        $this->social_id = $social_id;
    }
}