<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/ticket.css">
    <title>TICKET</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
<div class="contenedor">
    <ul>
        <li class="activo"><a href="menu.php">INICIO</a></li>
        <li class="activo"><a href="ticket.php">TICKETS</a></li>
        <li class="activo"><a href="mostrar-carrito.php">CARRITO(<?php 
            echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); 
            ?>)</a>
        </li>
    </ul>
    </div>

    <div class="container">