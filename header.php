<?php
$title;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title><?php echo $title; ?></title>
</head>
    <header>
    <!-- Un header (header.php) qui contient :
        Un bouton de retour vers la page d’accueil, 
        une liste déroulante contenant les différentes catégories d’articles, 
        si l’utilisateur n’est pas connecté : 
            une page d’inscription et une page de connexion, 
            sinon une page permettant de modifier son profil 
            et une permettant de se déconnecter. 
            Si l’utilisateur a les droits de modérateur, 
                il doit avoir accès à la page creer-article, 
            si il est administrateur, il peut également accéder à la page admin. 
        Le header doit être présent dans chacune des pages du blog -->
        <button><a href="index.php">Accueil</a></button>

        <!-- Met en attente du footer -->
                 <!-- - Un footer (footer.php) :
        Il contient un accès aux différentes pages. 
        Il doit être inclus dans toutes les pages du blog. -->
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <!-- - Une page d’accueil (index.php).
            Cette page contient les 3 derniers articles. 
            En bas de la page, il doit y avoir un lien vers la page articles -->
            <li><a href="inscription.php">Inscription</a></li>
            <!-- - Une page contenant un formulaire d’inscription (inscription.php) :
            Le formulaire doit contenir 
                l’ensemble des champs présents dans la table “utilisateurs” 
                ainsi qu’une confirmation de mot de passe. 
            Dès qu’un utilisateur remplit ce formulaire, 
                les données sont insérées dans la base de données 
                et l’utilisateur est dirigé vers la page de connexion. -->
        <!-- Ce sera une condition pour l'affichage dans le footer
        donc quand le user ou admin ou mod : différent ! -->
            <li><a href="connexion.php">Connexion</a></li>
            <!-- - Une page contenant un formulaire de connexion (connexion.php) :
            Le formulaire doit avoir deux inputs : “login” et “password”. 
            Lorsque le formulaire est validé, 
                s’il existe un utilisateur en bdd correspondant à ces informations, 
                alors l’utilisateur devient connecté 
                et une (ou plusieurs) variables de session sont créées. -->
            <li><a href="profil.php">Profil</a></li>
            <!-- - Une page permettant de modifier son profil (profil.php) :
            Cette page possède un formulaire permettant à l’utilisateur de modifier
            l’ensemble de ses informations. -->
            <li><a href="article.php">Article</a></li>
            <!-- - Une page contenant les articles (articles) :
            Sur cette page, les utilisateurs peuvent 
                voir l’ensemble des articles, 
                triés du plus récents au plus anciens. 
                S’il y a plus de 5 articles, 
                    seuls les 5 premiers sont affichés 
                    et un système de pagination 
                        permet d’afficher les 5 suivants (ou les 5 précédents). 
                        Pour cela, il faut utiliser l’argument GET “start”.
                            ex : https://localhost/blog/articles.php/?start=5 
                                affiche les articles 6 à 10. 
                        La page articles peut également 
                            filtrer les articles par catégorie à l’aide 
                                de l’argument GET “categorie” 
                                qui utilise les id des categories. 
                                    ex : https://localhost/blog/articles.php/?categorie=1&start=10 
                                        affiche les articles 11 à 15 ayant comme id_categorie 1). -->
            <!-- - Une page contenant un article et ses commentaires (article.php) :
            Cette page permet 
                de voir un article, 
                l’ensemble des commentaire associés 
                    et la possibilité d’en ajouter un nouveau. 
                Il faut utiliser l’argument GET “id” 
                    afin de sélectionner l’article souhaité.
                        ex : https://localhost/blog/article.php/?id=1 -->
            <li><a href="creer-article.php">Création d'Article</a></li>
            <!-- Cette page possède un formulaire permettant aux modérateurs et
            administrateurs de créer de nouveaux articles. Le formulaire contient donc
            le texte de l’article, une liste déroulante contenant les catégories existantes
            en base de données et un bouton submit. -->
            <li><a href="admin.php">Administrateur</a></li>
                <!-- - Une page d’administration (admin.php) :
                Cette page permet aux administrateurs de gérer l’ensemble du site
                (modification et suppression d’articles, création/modification 
                et suppression de catégories, d’utilisateurs, droits...) -->
        </ul>
        <!-- Rendu
        Le projet doit être mis 
            à la racine de votre Plesk, 
            en faisant en sorte que nous arrivions 
                directement sur votre page principale (nommée index.php).
        Un lien vers votre repos github 
            associé au projet doit être présent sur votre site.
        Le projet est aussi à rendre sur https://github.com/prenom-nom/blog.
        Pensez 
            à donner les droits sur le répertoire à deepthoughtlaplateforme !
        Pensez également 
            à rendre votre base de données, 
            avec la requête de création de celle-ci ! -->

            
        <!-- Faire la liste déroulante des catégories d'articles  -->
    </header>
</html>