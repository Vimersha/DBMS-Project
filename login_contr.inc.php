<?php

function isUserWrong(bool|array $result){
    if(!$result)
        return true;
    else
        return false;
}

function isPasswordWrong(bool|array $result){
    if(!$result)
        return true;
    else
        return false;
}