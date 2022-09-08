<nav class="light-blue">
    <div class="container">
        <div class="nav-wrapper">

             <a href="index.php?page=home" class="brand-logo">
                 <img class="logo" src="img/bj.jpg" alt="Mon logo" height="65px" width="70px">
             </a>

              <?php 
                   //Seul la page login et register n'auront pas de navbar 
                    if (isLogged()==1) {
                    ?>
                
                        <ul class="right">

                           <!-- Cest une condition ternaire en php permettant de rendre les liens des pages active lorsqu'on clique dessus -->
                           <li class="<?php echo ($page=="home")?"active" : ""; ?>">
                                <a href="index.php?page=home">
                                    <i class="material-icons">account_balance</i>
                                </a>
                            </li>

                          <!-- Cest une condition ternaire en php permettant de rendre les liens des pages active lorsqu'on clique dessus -->
                           <li class="<?php echo ($page=="members")?"active" : ""; ?>">
                                <a href="index.php?page=members">
                                    <i class="material-icons">people</i>
                                </a>
                            </li>

                          <!-- Cest une condition ternaire en php permettant de rendre les liens des pages active lorsqu'on clique dessus -->
                           <li class="<?php echo ($page=="")?"active" : ""; ?>">
                                <a href="index.php?page=" class="parametres">
                                    <i class="material-icons">textsms</i>
                                </a>
                            </li>

                            <li><a href="index.php?page=logout">Déconnexion</a></li>

                    </ul>

               <?php
              }else {
                ?>
                    <ul class="right">
                        <li class="<?php echo ($page=="signin")?"active" : ""; ?>"><a style="font-size:20px;" href="index.php?page=signin">S'inscrire</a></li>
                        <li class="<?php echo ($page=="signup")?"active" : ""; ?>"><a style="font-size:20px;" href="index.php?page=signup">Se connecter</a></li>
                    </ul>
                <?php
              }
              ?>
            </ul>
        </div>
    </div>
</nav>

<style>
      
      @media (max-width: 700px){

       .logo, .quitter, .parametres {
          display:none;
        }

    }

</style>