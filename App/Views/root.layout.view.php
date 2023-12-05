<?php

/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link rel="icon" href="/public/images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/styl.css">
    <script src="/public/js/script.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $link->url("home.index") ?>">
            <img src="/public/images/icon.png" title="<?= \App\Config\Configuration::APP_NAME ?>"
                 title="<?= \App\Config\Configuration::APP_NAME ?>">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= $link->url("home.index") ?>">Domov</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= $link->url("home.contact") ?>">Kalendár</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= $link->url("home.contact") ?>">Poznámky</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= $link->url("home.contact") ?>">Úlohy</a>
            </li>
        </ul>
        <?php if ($auth->isLogged()) { ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $link->url("auth.logout") ?>">Odhlásenie</a>
                    <span class="navbar-text"><b><?= $auth->getLoggedUserName() ?></b></span>
                </li>
            </ul>
        <?php } else { ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Prihlásenie</a>
                </li>
            </ul>
        <?php } ?>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
<div class="text-center">
    <div class="row">
        <div class="col">
            <a class="nav-link" href="<?= $link->url("home.index") ?>">
                <img src="/public/images/icon.png" alt="Logo" width="40" height="32" class="d-inline-block align-text-middle">
                NoteHub
            </a>
            <a href="<?= $link->url("home.index") ?>">Domov</a><br>
            <a href="kalendar.html">Kalendár</a><br>
            <a href="poznamky.html">Poznámky</a><br>
            <a href="ulohy.html">Úlohy</a>
        </div>

        <div class="col text-center">
            <h4>Autori Frameworku:</h4>
            <div>
                <a href="mailto:Patrik.Hrkut@fri.uniza.sk">doc. Ing. Patrik Hrkút, PhD.</a><br>
                <a href="mailto:Michal.Duracik@fri.uniza.sk">Ing. Michal Ďuračík, PhD.</a><br>
                <a href="mailto:Matej.Mesko@fri.uniza.sk">Ing. Matej Meško, PhD.</a><br><br>
                &copy; 2020-<?= date('Y') ?> Žilinská univerzita v Žiline, Fakulta riadenia a informatiky, Katedra
                softvérových technológií
            </div>
        </div>

        <div class="col">
            <h4>Autor stránky:</h4>
            <a href="mailto: adobrnusak@gmail.com">Andrej Brnušák</a><br>
        </div>

        <div class="row mt-3">

        </div>
    </div>
</div>
</body>
</html>
