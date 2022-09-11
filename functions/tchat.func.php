<?php 
    //Créons une fonction pour réccupérer l'utilisateur en question
    function get_user(){

        global $db;

        $id = $_GET['id'];

        $req = $db->query("SELECT * FROM users WHERE id = '$id'");

        $results = array();
        //Je parcourt les resultats de ma requête
        while ($rows = $req->fetchObject()){
                    
            //Je ctock le contenu de la variable $row dans le tanleau $results
            $results[] = $rows;
        }

        return $results;
      }
  ?>

