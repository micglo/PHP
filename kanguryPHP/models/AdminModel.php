<?php

/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-02
 * Time: 16:59
 */
include_once "models/SqlDataModel.php";
class Admin_SQL extends SqlData
{
    public function create ( $email, $password ) {
        $this->checkEmail( $email );
        $sql = "INSERT INTO admin ( email, password ) VALUES( ?, MD5(?) )";
        $data= array( $email, $password );
        $this->makeStatement( $sql, $data );
    }
    private function checkEmail ($email) {
        $sql = "SELECT email FROM admin WHERE email = ?";
        $data = array( $email );
        $this->makeStatement( $sql, $data );
        $statement = $this->makeStatement( $sql, $data );
        if ( $statement->rowCount() === 1 ) {
            $e = new Exception("Error: '$email' already used!");
            throw $e;
        }

    }
    public function checkCredentials ( $email, $password ){
        $sql = "SELECT email FROM admin WHERE email = ? AND password = MD5(?)";
        $data = array($email, $password);
        $statement = $this->makeStatement( $sql, $data );
        if ( $statement->rowCount() === 1 ) {
            $out = true;
        } else {
            $loginProblem = new Exception( "login failed!" );
            throw $loginProblem;
        }
        return $out;
    }
}