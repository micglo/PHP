<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-02
 * Time: 15:03
 */
include_once "models/AdminModel.php";
$createNewAdmin = isset( $_POST['new-admin'] );
//if it is...
if( $createNewAdmin ) {
    $newEmail = $_POST['email'];
    $newPassword = $_POST['password'];
    $adminTable = new Admin_SQL($db);
    try {
        $adminTable->create( $newEmail, $newPassword );
        $adminFormMessage = "Nowe konto administratora dla $newEmail zostalo utworzone!";
    } catch ( Exception $e ) {
        $adminFormMessage = $e->getMessage();
    }
}
$newAdminForm = include_once "views/admin/NowyAdminView.php";
return $newAdminForm;