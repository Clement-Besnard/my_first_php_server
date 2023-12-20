<?php
$adressedeamndee = $_SERVER["REQUEST_URI"];

function routeur($adressedemandee)
{
    if ($adressedemandee == '/') {
        if(isset($_SESSION['name'])){
            include('controller/productsController.php');
            $product = new ProductsController;
            $product->getProducts();
        }
        else{
            require_once 'view/main.php';
        }
    } elseif ($adressedemandee == '/connexion') {
        include('controller/usersController.php');
        $users = new UserController;
        $users->getAuthentification();
    } elseif ($adressedemandee == '/deconnexion') {
        require_once 'controller/deconnexion.php';
    } elseif ($adressedemandee == '/inscription') {
        include('controller/usersController.php');
        $users = new UserController;
        $users->setUser();
    } else {
        echo '<h1>404</h1>';
    }

}

routeur($adressedeamndee);