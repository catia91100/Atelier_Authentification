<?php
// Démarrer la session
session_start();

if ($_SERVER['PHP_AUTH_USER'] == $valid_username ='admin' || $_SERVER['PHP_AUTH_PW'] == $valid_password ='secret' ) {
    // Si les identifiants sont corrects
    header('WWW-Authenticate: Basic realm="Zone Protégée"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Nom d\'utilisateur ou mot de passe correct.';
    exit;
