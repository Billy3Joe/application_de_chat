<nav class="light-blue">
    <div class="container">
        <div class="nav-wrapper">

             <a href="index.php?page=home" class="brand-logo">
                 <img class="logo" src="img/bj.jpg" alt="Mon logo" height="65px" width="70px">
             </a>
             
              <?php 
                   //Seul la page login et register n'auront pas de navbar 
                    if ($page!="signin" && $page!="signup") {
                    ?>
                
                        <ul class="right">

                         <!-- Cest une condition ternaire en php permettant de rendre les liens des pages active lorsqu'on clique dessus -->
                         <li class="<?php echo ($page=="sms")?"active" : ""; ?>">
                                <a href="index.php?page=home" class="parametres">
                                    <i class="material-icons">textsms</i>
                                </a>
                            </li>
                            
                            <!-- Cest une condition ternaire en php permettant de rendre les liens des pages active lorsqu'on clique dessus -->
                            <li class="<?php echo ($page=="signin")?"active" : ""; ?>">
                                <a href="index.php?page=signin">
                                    <i class="material-icons">person</i>
                                </a>
                            </li>

                            <!-- Cest une condition ternaire en php permettant de rendre les liens des pages active lorsqu'on clique dessus -->
                            <li class="<?php echo ($page=="signup")?"active" : ""; ?>">
                                <a href="index.php?page=signup" class="parametres">
                                    <i class="material-icons">queue</i>
                                </a>
                            </li>

                            <li><a href="index.php?page=logout">Déconnexion</a></li>

                    </ul>

                    <!-- <ul class="side-nav" id="mobile-menu">
                        <li>

                        </li> -->
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