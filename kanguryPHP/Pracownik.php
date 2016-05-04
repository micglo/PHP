<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Aplikacja PHP";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->currentAplikacjaPHP = "current";
$pageData->currentPracownik = "current";

$dbInfo = "mysql:host=217.173.198.143;dbname=s83252_kangury";
$dbUser = "mglowaczewski";
$dbPassword = "Haslo123";
try {
    $db = new PDO( $dbInfo, $dbUser, $dbPassword );
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch ( Exception $e ) {
    $pageData->section = "<h1>Polaczenie nieudane!</h1><p>$e</p>";
}

include_once "models/AdminLoginModel.php";
$admin = new Admin_User();
$pageData->section = include_once "controllers/admin/AdminLoginController.php";

if( $admin->isLoggedIn() ) {
    $pageRequested =  isset( $_GET['page'] );
    $controller = "PracownikController";
    if ( $pageRequested ) {
        if ( $_GET['page'] === "kangur" ) {
            $controller = "KangurController";
        }
    }
    $pathToController = "controllers/admin/$controller.php";

    $pageData->section .=include_once $pathToController;
}

$page = include_once "views/MainPageAplikacjaPHPTemplate.php";
echo $page;