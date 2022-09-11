

<?php 


$users = get_user();

foreach ($users as $user) {
    ?>
     <h1 class="header"><?= $user->name?></h1>
     <hr>


     <div class="messages-box">
      
         <div class="message message-membre">
            <span class="date">23:22</span><br>
            <span class="author">Billy</span><br>
            <span class="content">
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti eum, ut commodi eos culpa voluptatem doloribus nam non qui accusantium praesentium, veritatis quae. Delectus voluptatibus, dolorem eligendi illum ipsam possimus.
            </span>
         </div>

       <div class="message message-user">
            <span class="date">23:22</span><br>
            <span class="author">Billy</span><br>
            <span class="content">
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti eum, ut commodi eos culpa voluptatem doloribus nam non qui accusantium praesentium, veritatis quae. Delectus voluptatibus, dolorem eligendi illum ipsam possimus.
            </span>
         </div>

         <div class="message message-membre">
            <span class="date">23:22</span><br>
            <span class="author">Billy</span><br>
            <span class="content">
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti eum, ut commodi eos culpa voluptatem doloribus nam non qui accusantium praesentium, veritatis quae. Delectus voluptatibus, dolorem eligendi illum ipsam possimus.
            </span>
         </div>



        <div class="message message-user">
            <span class="date">23:22</span><br>
            <span class="author">Billy</span><br>
            <span class="content">
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti eum, ut commodi eos culpa voluptatem doloribus nam non qui accusantium praesentium, veritatis quae. Delectus voluptatibus, dolorem eligendi illum ipsam possimus.
            </span>
         </div>


       <style>
        .messages-box{
            position: relative;
            background-color: #fff;
            margin-bottom: 5px;
        }
        .messages-box .message{
            background-color: red;
            padding: 3px 8px;
            margin-bottom: 3px;
            margin-top: 3px;
            border-radius: 12px;
            max-width: 55%;
            display:inline-block;
            min-height: 25px;
        }
        .messages-box .message-membre{
            background-color:#00C5FF;
            float: right;

        }

        .messages-box .message-user{
            background-color:#3c7;
        
        }
       </style>
     </div>

     <form action="" method="POST">
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="author" id="author">
                <label for="author">Auteur</label>
            </div>
            <div class="input-field col s12">
                <textarea name="content" id="content" class="materialize-textarea"></textarea>
                <label for="content">Contenu de Votre message</label>
                <br>

            <div>
            <button type="submit" name="envoyer" id="send" class="waves-effect waves-light btn light-blue">
            <i class="material-icons left">send</i>
            Send
            </button>
        </div>
    </form>

    <div class="message">
        
    </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="js/tchat.func.js"></script>
     </div>
    <?php
}

?>
