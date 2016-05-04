<?php
include_once "models/SqlDataModel.php";
class KangurModel extends SqlData
{
    public function DodajKangura ($urodziny, $klatka, $rodzaj ) {
        $sql = "INSERT INTO kangur ( DataUrodzenia, KlatkaId, RodzajId ) VALUES( ?, ?, ? )";
        $data= array( $urodziny, $klatka, $rodzaj );
        $this->makeStatement( $sql, $data );
    }

    public function SprawdzDostepneKlatki () {
        $sql = "SELECT IdKlatka, Klatka FROM klatka k left outer join kangur ka ON (k.IdKlatka = ka.KlatkaId) where ka.KlatkaId is null";
        $statement = $this->makeStatement($sql);
        return $statement;
    }
}