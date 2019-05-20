<?php

interface iCommentable
{
    public function setComment(iComment $comment);

    public function getComments();
}