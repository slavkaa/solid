<?php

interface iUserGod
{
    public function getName() : string;

    public function setName(string $name);


    public function save() : void;

    public function delete() : void;

    public static function findById(integer $id);



    public function setComment(iComment $comment);

    public function getComments();



    public function pay();

    public function getPaymentHistory();



    public function translate(string $lang);
}