<?php
require('dbConnect.php');

function login($login)
{
    $db = dbConnect();
    $login['username'] = 'Jean';
    $login['password'] = 'eden';
}