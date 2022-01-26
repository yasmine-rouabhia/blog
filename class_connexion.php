<?php

class Connexion
{
    public $bdd;

    public function __construct()
    {
        try
        {
            $options = 
            [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            require('db-config.php');
            $this->bdd = new PDO($DB_SDN, $DB_USER, $DB_PASS, $options);
        }
        catch(PDOException $exception)
        {
            echo 'ERREUR :'.$exception->getMessage();
        }
    }
}
