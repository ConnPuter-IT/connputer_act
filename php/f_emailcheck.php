<?php
/**
 * Created by PhpStorm.
 * User: Alph Soldner-Raue
 * Date: 25.09.2018 0025
 * Time: 12:52
 */

function email_check($email)
{
    $regExp = "^[_a-zA-Z0-9-öäüÖÄÜ]+(.[_a-zA-Z0-9-öäüÖÄÜ]+)*@([a-zA-Z0-9-öäüÖÄÜ]+.)+([a-zA-Z]{2,4})$";
    if (!(preg_match($regExp, $email)))
        return false;
    else
        return true;
}
