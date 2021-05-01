<?php

function login($username, $password)
{
    if (isset($username) and $username ==  "Jean" and isset($password) and $password ==  "eden") {
        return true;
    }
    return false;
}
