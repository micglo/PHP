<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-02
 * Time: 15:03
 */
include_once "models/KangurModel.php";
$kangur = new KangurModel($db);

$createKangur = isset( $_POST['new-kangur'] );
//if it is...
if( $createKangur ) {
    $newUrodziny = $_POST['urodziny'];
    $newKlatka = $_POST['klatka'];
    $newRodzaj = $_POST['rodzaj'];
    try {
        $kangur->DodajKangura( $newUrodziny, $newKlatka, $newRodzaj );
        $adminFormMessage = "Nowy kangur zostal dodany!";
    } catch ( Exception $e ) {

    }
}
$getRodzajLista = $kangur->SprawdzDostepneKlatki();
$newAdminForm = include_once "views/admin/NowyKangurView.php";
return $newAdminForm;