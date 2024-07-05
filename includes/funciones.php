<?php

//debugging function
function debug($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
//function for sanitizing variables
function s($html): string
{
    $sanitizing = htmlspecialchars($html);
    return $sanitizing;
}

//function for authentication

function isAuth(): bool
{
    if (!isset($_SESSION)) {
        session_start();
    }

    return isset($_SESSION['nombre']) && !empty($_SESSION);
}

function isAdmin(): bool
{
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}

function pagina_actual($path): bool
{
    return str_contains($_SERVER['PATH_INFO'] ?? '/', $path) ? true : false;
}


function aos_animacion(): void
{
    $efectos = ['fade-up-right', 'fade-up-left', 'fade-down-right', 'fade-down-left', 'flip-left', 'flip-right', 'flip-up', 'flip-down', 'zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-out'];
    $efecto = array_rand($efectos, 1);
    echo $efectos[$efecto];
}
