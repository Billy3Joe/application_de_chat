<?php 
  //Si l'utilisateur est déjà connecté, il ne peut plus aller vers la page singnin
  if (isLogged()==1) {
     header("Location: index.php?page=home");
  } 
?>

<h1 style="color:#888;">Login tchat</h1>
<br><br><br>


<?php

    // Si le formulaire est posté:
    if (isset($_POST['submit'])){
        //je verifie si je recupère bien les infos
        // var_dump($_POST);
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        
        //Je recupère les infos correspondants à l'email dans la table:
        $r = $db -> query ("SELECT * FROM users WHERE email= '$email' ");

        //Si le nombre de resultat est plus grand ou égal à 1, alors le compte existe:
        if ($r->rowCount()>= 1){
            //Je stock toutes les infos sous forme d'array
            $users =$r -> fetch(PDO::FETCH_ASSOC);
            //je verifie si j'ai bien toutes les infos dans l'array:
                //print_r($membre);
            // Si le mot de passe posté correspond à celui présent dans $users:
            if(password_verify($password, $users['password'])) {
                // je test si le password fonctionne
                $content.='<p>email+password: OK </p>';

                //j'enregistre les infos dans la session
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                // $_SESSION['users']['name']=$users['name'];
                // $_SESSION['users']['email']=$users['email'];

                //Je redirige l'utilisateur vers la page d'acceuil:
                header('Location: index.php?page=home');
            }
            else{
                //le mot de passe est incorrect:
                    ?>
                    <div class="card red">
                        <div class="card-content white-text">
                           <!-- j'ajoute un message de validation -->
                           <?= $content .='<p>Mots de passe incorrect</p>'?>
                        </div>
                    </div>
                  <?php
            }
        }
        else {
            ?>
            <div class="card red">
                <div class="card-content white-text">
                    <!-- j'ajoute un message de validation -->
                    <?= $content .= '<p> Compte inexistant</p>'?>
                </div>
            </div>
          <?php
        }
    }
?>

<form action="" method="POST">
  <div class="row">

    <div class="input-field col s12">
        <input type="email" name="email" id="email">
        <label for="email">Adresse email</label>
    </div>

    <div class="input-field col s12">
        <input type="password" name="password" id="password">
        <label for="password">Mot de passe</label>
    </div>

    <div class="col s12">
        <button type="submit" name="submit" class="waves-effect waves-light btn light-blue">
        <i class="material-icons left">perm_identity</i>
        Se connecter
        </button>

        <br/><br/> 
        <a style="color:red;">Pas encore inscrit?</a> 
        <a style="text-decoration: underline;" href="index.php?page=signup">S'inscrire</a>
    </div>
  </div>
</form>
