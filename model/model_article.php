<?php
    // fonction qui ajoute un article en BDD
    function createArticle($bdd, $nom, $prix){
        try{
            $req = $bdd->prepare('INSERT INTO article(nom_article, prix_article) 
            VALUES(:nom_article, :prix_article)');
            $req->execute(array(
                'nom_article' => $nom,
                'prix_article' =>$prix
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>

