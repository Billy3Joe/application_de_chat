<?php 

 /*   function emailVerify($email){
        global$db;

        $e =array(['email'=>$email]);
        $sql = "SELECT * FROM users WHERE email = :$email";
        $req = $db->prepare($sql);
        $req->execute($e);
        $free = $req->rowCount();
        return $free;
    }

    function register($name,$email,$password){
        global$db;

        $r =array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        );
        $sql = "INSERT INTO users (name, email, password)VALUES 
        (:$name, :$email,:$password)";
        $req = $db->prepare($sql);
        $req->execute($r);
    } */
?>