<?php

include_once("bdd.php");

class UserModel{
    private $bdd;

    public function __construct() {
        $this->bdd = bdd::connexion();
    }

    public function setUser($name, $password, $age, $email){
        $setuser=$this->bdd->prepare("INSERT INTO users(name, password, age, email) VALUES(?,?,?,?)");
        return $setuser->execute([$name, $password, $age, $email]);
    }

    public function getUserByEmail($email){
        $getuser=$this->bdd->prepare("SELECT * FROM users WHERE email=?");
        $getuser->execute([$email]);
        return $getuser->fetch(PDO::FETCH_ASSOC);
    }
}
?>