<?php

function validationText(string $value) : string 
{
    $valid = trim($value);
    $valid = stripslashes($valid);
    $valid = htmlspecialchars($valid);
    return $valid;
}

function validationEmail(string $email) : bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validationArray(array $values) : array
{
    foreach ($values as $value) {
        $result[] = validationText($value);
    }
    return $result;
}

function validationArrayAssoc(array $values) : array
{
    foreach ($values as $key => $value) {
        $result[$key] = validationText($value);
    }
    return  $result;
}
?>