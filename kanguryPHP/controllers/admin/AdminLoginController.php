<?php
include_once "models/AdminModel.php";
$loginFormSubmitted = isset( $_POST['log-in'] );
if( $loginFormSubmitted ) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $adminTable = new Admin_SQL( $db );
    try {
        $adminTable->checkCredentials( $email, $password );
        $admin->login();
    } catch ( Exception $e ) {
    }
}
$loggingOut = isset ( $_POST['logout'] );
if ( $loggingOut ){
    $admin->logout();
}
if ( $admin->isLoggedIn() ) {
    $view = include_once "views/admin/AdminLogoutView.php";
} else {
    $view = include_once "views/admin/AdminLoginView.php";
}
return $view;