<?php

interface iPayable
{
    public function pay();

    public function getPaymentHistory();
}