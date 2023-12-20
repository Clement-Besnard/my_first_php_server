<?php

class bdd{
    public static function connexion(){
        try{
            $host = '51.158.59.186:14301';
            $db   = 'CB';
            $user = 'phppex';
            $pass = 'Supermotdepasse!42';
            return new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            }
        catch(Exception $e){
            return throw new Exception("Connection failed: " . $e->getMessage());
        };
    }
}
?>