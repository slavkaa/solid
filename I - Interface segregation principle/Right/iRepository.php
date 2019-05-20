<?php

interface iRepository
{
    public function save() : void;

    public function delete() : void;

    public static function findById(integer $id);
}