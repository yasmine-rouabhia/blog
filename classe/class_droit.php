<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
    <title>page des droits</title>
</head>
<body>   
<?php
session_start();
//Créations d'une classe pour les droits de l'admin, du modérateur et uyilisateurs
class DROITS
{
//Propriétés
    public $bdd;
    protected $id;
    public $login;
    public $email;
    protected $password;
    public $user;

// Méthode pour se connectez a la BDD 
    public function __constuct()
    {
        $this->bdd = $bdd;
        $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

    }

// Méthode pour M.A.J des attributs et modifier les données en BDD  
    public function Update($login, $password, $email)
    {
        $bdd = new PDO("mysqli:host=localhost;dbname=blog;charset=utf8", 'root', '');
        $requet = $bdd->prepare("UPDATE utilisateurs SET login='$login', password='$password', email='$email'");
        $requet->execute();
        echo 'modification effectuer';
    }


    // public function Delete()
    // {
    //     $bdd = new PDO()

    // }

    // public function Creation_Articles($titre, $contenu)
    // {
    //     if ($moder == 42) {
    //     }
    //     if(empty($titre) || empty($contenu)))
    //     {
    //         echo "il manque un argument";
    //         return;
    //     }
    //     $this->bdd->exec("INSERT INTO articles")
    //         # code...

    // }


    // public function Register()
    // {

    // }

}


//$droit = new Droit();
// $droit->Update();
// $droit->Creation_Articles();

?>