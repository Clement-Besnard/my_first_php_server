<?php

include_once("bdd.php");

class ProductsModel{
    private $bdd;

    public function __construct() {
        $this->bdd = bdd::connexion();
    }

    public function getProducts(){
        return $this->bdd->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>