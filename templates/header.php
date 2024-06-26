<?php

include_once __DIR__ . "/../helpers/url.php";
include_once __DIR__ . "/../data/categories.php";
include_once __DIR__ . "/../data/posts.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="logo">
        </a>
        <nav>
            <ul id="navbar">
                <li>
                    <a href="<?= $BASE_URL ?>" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Categorias</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Sobre</a>
                </li>
                <li>
                    <a href="<?= $BASE_URL ?>contact.php" class="nav-link">Contato</a>
                </li>
            </ul>
        </nav>
    </header>