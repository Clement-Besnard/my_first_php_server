<?php

include_once('model/usersModel.php');

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function getFormInscription()
    {
        include_once("view/inscription.php");
    }

    public function setUser()
    {
        if (isset($_POST["email"])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);

            if ($this->model->getUserByEmail($email)) {
                $this->getFormInscription();
            } else {
                if ($this->model->setUser($name, $password, $age, $email)) {
                    
                    $_SESSION['name'] = $_POST['name'];
                    header("Location: /");
                    exit();
                } else {
                    echo 'KO';
                    $this->getFormInscription();
                }
            }
        }
        else{
            $this->getFormInscription();
        }
    }

    public function getFormAuthentification()
    {
        include_once('view/connexion.php');
    }

    public function getAuthentification()
    {

        if (isset($_POST["email"])) {
            $email = $_POST['email'];
            $user = $this->model->getUserByEmail($email);

            $mdp = password_verify($_POST['password'], $user['password']);
            if ($mdp) {
                $_SESSION['name'] = $user['name'];
                header("Location: /");
                exit();
            } else {
                echo 'KO';
                $this->getFormAuthentification();
            };
        } else {
            $this->getFormAuthentification();
        }
    }
}
