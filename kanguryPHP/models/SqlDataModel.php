<?php
class SqlData
{
    protected $db;

    public function __construct ( $db ) {
        $this->db = $db;
    }

    protected function makeStatement ( $sql, $data = null ){
        $statement = $this->db->prepare( $sql );
        try {
            $statement->execute( $data );
        } catch (Exception $e) {
            $exceptionMessage = "<p>Probowales wykonac ta kwerende: $sql <p>
                    <p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        return $statement;
    }
}