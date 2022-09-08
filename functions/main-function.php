
<?php 
    session_start();
    
    $dbhost = "localhost";
    $dbname = "tchat";
    $dbuser = 'root';
    $dbpswd = "";
    
    //Variable contenant les différents érreurs
    $content = "";

  try {
      $db = new PDO("mysql:host=$dbhost;dbname=$dbname", 
      $dbuser, $dbpswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }catch(PDOException $e){

    echo "Une erreur est survenue lors de la connexion à la base de données : ". $e->getMessage();
  }

  //Fonction pour gérer l'affichage du menu de la navbar
  function isLogged(){
   if (isset($_SESSION['email'])) {
    $logged = 1;
   }else {
    $logged = 0;
   }

   return $logged;
  }

?>