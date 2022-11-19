<?php
include_once('db_fuggvenyek.php');      // adatbázis kezelő függvények betöltése
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <!-- Comment out this line to let search engines index your page -->
    <meta name="robots" content="noindex, nofollow" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta name="color-scheme" content="dark light" /> -->

    <link rel="stylesheet" href="style.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="logo.svg" />

    <!-- Keresőben megjelenő adatok -->
    <title>Iskola napló rendszer</title>
</head>

<body>
    <header class="header">
        <div>
            <img src="logo.svg" alt="Logó">
        </div>
        <nav>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a href="konyvek.php" class="nav-link">Órák</a>
                </li>
                <li class="nav-item">
                    <a href="olvasok.php" class="nav-link">Diákok</a>
                </li>
                <li class="nav-item">
                    <a href="kolcsonzesek.php" class="nav-link">Tanárok</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Termek</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>