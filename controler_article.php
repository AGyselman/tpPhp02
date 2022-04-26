<?php
    //importer la connexion à la BDD
    include './utils/connect_bdd.php';
    // importer le model
    include './model/model_article.php';
    // importer la view(interface)
    include './view/vue_article.php';

    if(isset($_POST['name_article'])AND isset($_POST['prix_article'])AND
        $_POST['name_article'] != "" AND $_POST['prix_article'] !=""){
            createArticle($bdd, $_POST['name_article'], $_POST['prix_article']);
            echo "l'article à été créer";
        }
        else{
            echo 'Veuillez remplir les champs du  formulaire';
        }
?>