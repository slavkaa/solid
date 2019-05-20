<?php

class Auth
{
    private $logger;

    public function __construct(iLogger $logger = null)
    {
        if ($logger) {
            $this->logger = $logger;
        } else {
            $this->logger = new DefaultLogger();
        }
    }

    public function login(iAuth $user)
    {
        // do login

        $this->logger->info('Auth complete');
    }
}