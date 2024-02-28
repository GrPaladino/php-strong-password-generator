<?php

function password_generator($password_length)
{
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $upper_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+-={}[]|;,.?';

    $password = '';

    while (strlen($password) < $password_length) {
        $letter_i = rand(0, strlen($letters));
        $random_letter = $letters[$letter_i];
        $password .= $random_letter;

        $upper_letter_i = rand(0, strlen($upper_letters));
        $random_upper_letter = $upper_letters[$upper_letter_i];
        $password .= $random_upper_letter;

        $number_i = rand(0, strlen($numbers));
        $random_number = $numbers[$number_i];
        $password .= $random_number;

        $symbol_i = rand(0, strlen($symbols));
        $symbol = $symbols[$symbol_i];
        $password .= $symbol;


        $user_password = substr($password, 0, $password_length);

    }

    return $user_password;
}
