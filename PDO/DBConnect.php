<?php
class DBConnect{
    /**
     * connect to database
     * @param string $dbName
     * @param string $username
     * @param string $password
     */
    function __construct($dbName='php0205_shopping', $username = 'root', $password = ''){
        $dsn = "mysql:dbname=$dbName;host=localhost";
        try{
            $connection = new PDO($dsn, $username, $password);
            $connection->exec('SET NAMES utf8');
        }
        catch(PDOException $e){
            echo $e->getMessage();
            die;
        }
    }

    /**
     * Use for Insert | Update | Delete
     */
    function executeQuery(){

    }

    /**
      * Use for Select more rows
      */
    function getMoreRows(){

    }

    /**
      * Use for Select 1 row
      */
    function getOneRow(){
        
    }

}


?>