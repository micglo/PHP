<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Aplikacja PHP";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->currentAplikacjaPHP = "current";

$dbInfo = "mysql:host=217.173.198.143;dbname=s83252_kangury";
$dbUser = "****";
$dbPassword = "****";
try {
    $db = new PDO( $dbInfo, $dbUser, $dbPassword );
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch ( Exception $e ) {
    $pageData->section = "<h1>Polaczenie nieudane!</h1><p>$e</p>";
}

$pageRequested =  isset( $_GET['page'] );
$controller = "KlientController";
$pageData->currentKlient = "current";

$pageData->section .= include_once "controllers/$controller.php";

$page = include_once "views/MainPageAplikacjaPHPTemplate.php";
echo $page;
