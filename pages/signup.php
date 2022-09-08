  <?php 
   //Si l'utilisateur est déjà connecté, il ne peut plus aller vers la page singnup
    if (isLogged()==1) {
      header("Location: index.php?page=home");
    } 
   ?>

   <h1 style="color:#888;">Register tchat</h1>
    <br>
    
    <?php
        // si le form a été posté (rendre fonctionnelle les champs crées)
        if (isset($_POST['submit'])){
            
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $password = htmlspecialchars(trim($_POST['password']));
            // $errors =[];
            // je verifie si je récupère bien les valeurs des champs
            //print_r($_POST);
            //je defini une variable pour afficher les erreurs
             $errors="";

             //Si le nom n'est pas trop court ou trop long
             if(empty($name) && empty($email) && empty($password)){
                $errors .= '<p> Veillez remplir tous les champs.</p>';
        
            }

            //Si le nom n'est pas trop court ou trop long
            if(strlen($name) <3 || strlen($name) > 20){
            $errors .= '<p> Taille de nom invalide.</p>';
            }

            //Si les caractères utilisées dans le champs nom sont valides  [regex]
            if(!preg_match('#^[a-zA-Z0-9._-]+$#', $name)){
                $errors .='<p> Format de nom invalide</p>';
            }

            //je verifie si l'email n'est pas deja present dans la base
            $r =$db -> query ("SELECT * FROM users WHERE email = '$email'");

            // s'il y a un ou plusieurs resultats
            if($r->rowCount() >= 1 ) {
                    $errors .= '<p>Email déjà utilisé.</p>';
                }
        

            // Je gère les problèmes d'apostrophes pour chaque champs grâce à une boucle
            foreach ($_POST as $indice => $valeur) {
                $_POST[$indice] = addslashes($valeur);
            }

            //je hash le mot de passe
            $password = password_hash($password, PASSWORD_DEFAULT);

            // si $erreur est vide (fonction empty() verifie si une variable est vide):
                if(empty($errors)){
                    //j'envoie les infos dans la table en bdd
                    $db->exec("INSERT INTO users (name, email, password)VALUES 
                    ('$name', '$email','$password')");

                    ?>
                    <div class="card green">
                        <div class="card-content white-text">
                            <!-- j'ajoute un message de validation -->
                            <?= $valide='<p>Inscription validée.</p>'?>
                        </div>
                    </div>

                    <?php
                  
                }else {

                 //j'ajoute le contenu de $erreur a l'interieur de $content:
                  ?>
                    <div class="card red">
                        <div class="card-content white-text">
                            <!-- j'ajoute un message de validation -->
                            <?= $content=$errors?>
                        </div>
                   </div>
                  <?php
               
                }
                   
        }


    ?>
       

       <form action="" method="POST">
           <div class="row">
              <div class="input-field col s12">
                <input type="text" name="name" id="name">
                <label for="name">Nom</label>
              </div>

              <div class="input-field col s12">
                 <input type="email" name="email" id="email">
                 <label for="email">Adresse email</label>
              </div>

              <div class="input-field col s12">
                 <input type="password" name="password" id="password">
                 <label for="password">Adresse email</label>
              </div>
            
              <div class="col s12">
                  <button type="submit" name="submit" class="waves-effect waves-light btn light-blue">
                    <i class="material-icons left">perm_identity</i>
                    Se connecter
                  </button>

                   <br/><br/>
                   <a style="color:green;">Déjà inscrit?</a> 
                   <a style="text-decoration: underline;" href="index.php?page=signin">Se connecter</a>
               </div>
            </div>
          </form>
          