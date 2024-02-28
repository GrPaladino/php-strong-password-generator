<?php

require_once __DIR__ . "/config/function.php";

$user_input = !empty($_GET['user-length']);


if ($user_input) {

    $password_length = (int) $_GET['user-length'];


    $user_password = password_generator($password_length);

    header('Location: ./password_page.php');

    session_start();

    $_SESSION['password'] = $user_password;



}




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
                    <input type="number" min='4' max="100" name="user-length" id="user-length" class="col-6"
                        value="<?= isset($password_length) ? $password_length : '' ?>">
                    <button class="btn btn-primary mt-4 col-1">Invia</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>