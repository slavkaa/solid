<?php


class User implements iAuth
{
    /** @var string */
    protected $login;

    /** @var string */
    protected $password;

    public function __construct() { }

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
    public function setPassword(string $password)
    {
        $this->password = sha1($password);
    }

    public function login(iAuth $user)
    {
        // do login (low level auth code)

        $this->logInfo('Auth complete');
    }

    public function save()
    {
        // low level user`s data save code
        file_put_contents('user.data', serialize($this));
    }

    private function logInfo($message)
    {
        // low level log save code
        file_put_contents('info.log', $message);
    }
}