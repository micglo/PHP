<?php
include_once "models/SqlDataModel.php";
class KlientModel extends SqlData{

    public function DodajKlient ($imie, $nazwisko, $pesel, $kangurId ) {
        $sql = "INSERT INTO klient (Imie, Nazwisko, Pesel, KangurId)
                VALUES (?, ?, ?, ?)";
        $data = array( $imie, $nazwisko, $pesel, $kangurId );
        $statement = $this->makeStatement($sql, $data);
        return $statement;
    }

    public function SprawdzDostepneKangury () {
        $sql = "SELECT IdKangur, DataUrodzenia, RodzajId FROM  kangur k left outer join klient kl ON (k.IdKangur = kl.KangurId) where kl.KangurId is null";
        $statement = $this->makeStatement($sql);
        return $statement;
    }


}