<?php

$authManager = new Auth();

$authManager->login(new FacebookUser());

$authManager->login(new GoogleUser());