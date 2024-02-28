<?php
function password_generator($password_length)
{
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $upper_letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $symbols = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '-', '=', '{', '}', '[', ']', '|', ';', '"', '<', '>', ',', '.', '?', '/',];

    $password = [];

    while (count($password) < $password_length) {
        $random_letter = array_rand(array_flip($letters));
        $password[] = $random_letter;

        $random_upper_letter = array_rand(array_flip($upper_letters));
        $password[] = $random_upper_letter;

        $random_number = array_rand(array_flip($numbers));
        $password[] = $random_number;

        $symbol = array_rand(array_flip($symbols));
        $password[] = $symbol;


        $user_password = implode("", $password);

    }

    return $user_password;
}
;