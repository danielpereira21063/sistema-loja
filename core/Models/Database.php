<?php

class Database {
    private $dbh;
    private $stmt;

    public function __construct() {
        try {
            $this->dbh = new \PDO(
                'mysql:'.
                'host='.MYSQL_SERVER.';'.
                'dbname='.MYSQL_DB.';'.
                'charset='.MYSQL_CHARSET,
                MYSQL_USER,
                MYSQL_PASS,
                array( \PDO::ATTR_PERSISTENT => true, \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION )
            );
        } catch ( \PDOException $pe ) {
            echo '<h3 style="text-color: red;">'.$pe->getMessage().'</h3>';
        } catch ( \Exception $e ) {
            echo '<h3 style="text-color: red;">'.$e->getMessage().'</h3>';
        }
    }

    public function query( $sql ) {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function rowCount() {
        return $this->stmt->rowCount();
    }

    public function results() {
        $this->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function close() {
        $this->dbh = null;
        $this->stmt = null;
    }

    // public function select( $table, $paramns = null ) {
    //     $result = [];
    //     if ( $table != null ) {
    //         $this->open();
    //         $sql = "SELECT * FROM $table";
    //         $dbh = $this->dbh->prepare( $sql );
    //         $dbh->execute();
    //         $result = $dbh->fetchAll( \PDO::FETCH_OBJ );
    //         $this->close();

    //     }
    //     return $result;
    // }

    // public function update($table, $id, $field, $value) {
    //     if($table != null && $id != null && $field != null && $paramns != null) {
    //         $this->open();
    //         $sql = "UPDATE $table SET $field = $value";
    //         $dbh = $this->dbh->prepare($sql);
    //         $dbh->execute();
    //         $this->close();
    //     }
    // }

    // public function delete( $table, $field, $id ) {
    //     if ( $table != null && $id != null ) {
    //         $this->open();
    //         $result = $this->dbh->query( "SELECT * FROM $table WHERE $field = $id" );
    //         if ( $result->fetchAll( \PDO::FETCH_ASSOC ) > 0 ) {
    //             $sql = "DELETE FROM $table WHERE $table.$field == $id";
    //             $dbh = $this->dbh->prepare( $sql );
    //             $dbh->execute();
    //         }
    //         $this->close();
    //     }
    // }

    // public function insert($table, $values) {
    //     if($table != null && $values != null) {
    //         $this->open();
    //         $sql = "INSERT INTO $table VALUES ($values)";
    //         $dbh = $this->dbh->prepare($sql);
    //         $dbh->execute($values);
    //         $this->close();
    //     }
    // }
}