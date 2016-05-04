<?php
include_once "models/KlientModel.php";
$klient = new KlientModel($db);

$newKlientSubmitted = isset( $_POST['action'] );
if ( $newKlientSubmitted ) {
    $buttonClicked = $_POST['action'];
    $insertNewEntry = ( $buttonClicked === 'Wyslij' );

    if ( $insertNewEntry ) {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $pesel = $_POST['pesel'];
        $kangur = $_POST['kangur'];
        $klient->DodajKlient( $imie, $nazwisko, $pesel, $kangur );
        $endMsg = "Zamowienie zostalo przyjete!";
    }
}
$dostepneKangury =$klient->SprawdzDostepneKangury();

$view = include_once "views/KlientView.php";
return $view;