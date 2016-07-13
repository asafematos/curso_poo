<?php

require_once "Cliente.php";

$clientes = [];

require_once "Clientes.php";

$clientes = [
    1 => $roberto,
    2 => $asafe,
    3 => $luiz,
    4 => $gabi,
    5 => $james,
    6 => $luan,
    7 => $herlangeles,
    8 => $sasuke,
    9 => $naruto,
    10 => $kakashi,
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Progeto 1</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<style>
    table tr td {
        padding: 0 !important;
    }

    table tr th {
        background-color: #DDD;
        border: none;
    }

    table tr td p {
        font-family: 'Roboto', sans-serif;
        font-size: 13px;
        color: #020202;
        padding: 10px;
        display: block;
        text-decoration: none !important;
        position: relative;
        z-index: 100;
        margin-bottom: 0;
    }

    table tr td a {
        color: #020202;
        text-decoration: none !important;
    }

    table tr td p:before {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 100%;
        background-color: #eee;
        content: '';
        display: block;
        transition: 0.3s;
        z-index: -1;
        color: #020202;
    }

    table tr td p:hover:before {
        left: 0;
        right: 0;
    }

    table tr th h1 {
        font-family: 'Roboto', sans-serif;
        font-size: 15px;
        font-weight: 600;
        color: #000;
        margin-top: 5px;
        margin-bottom: 5px;
    }
</style>

<body style="padding-top: 50px;">
<div class="container">
    <?php if (isset($_GET['id'])): ?>
        <table class="table" style="width: 100%;">
            <tr>
                <th><h1>Ninja</h1></th>
                <th><h1>Aldeia</h1></th>
                <th><h1>Jutso</h1></th>
            </tr>
            <?php $cliente = $clientes[$_GET['id']]; ?>

            <tr>
                <td><p><?php echo $cliente->nome; ?></p></td>
                <td><p><?php echo $cliente->aldeia; ?></p></td>
                <td><p><?php echo $cliente->jutso; ?></p></td>
            </tr>
        </table>

        <a href="../projeto1" class="btn btn-default">VOLTAR</a>

    <?php else: ?>
        <table class="table" style="width: 100%;">
            <tr>
                <th><h1>Ninjas</h1></th>
            </tr>
            <?php foreach ($clientes as $key/* a key é o numero de identificação do array */ => $cliente): ?>
                <tr>
                    <td><a href="index.php?id=<?php echo $key ?>"><p><?php echo "$cliente->nome"; ?></p></a></td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
