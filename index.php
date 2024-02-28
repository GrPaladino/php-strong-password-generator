<?php

$user_input = !empty($_GET['user-length']);


if ($user_input) {

    $password_length = (int) $_GET['user-length'];

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
    $user_password = password_generator($password_length);
}
;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- Bootsrtrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Password Generator</h1>
        <div class="card">

            <div class="card-body">
                <form method="GET" class="row d-flex justify-between p-2">
                    <label for="user-length" class="col-6">Scegli la lunghezza della tua password</label>
                    <input type="number" min='1' max="100" name="user-length" id="user-length" class="col-6">
                    <button class="btn btn-primary mt-4 col-1">Invia</button>
                </form>

                <h4>La tua password e':
                    <?= !empty($user_password) ? $user_password : '' ?>
                </h4>
            </div>
        </div>
    </div>
</body>

</html>