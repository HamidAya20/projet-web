<?php
include_once("data_base.php");
if (isset($_POST['valider'])){
    if(!empty($_POST['email']) and !empty($_POST['password'])) {
        $email=htmlspecialchars($_POST['email']);
        $password=htmlspecialchars($_POST['password']);
        $req=$cnx->prepare(`select * from condiat where email=? and password=? `);
        $req->execute(array($email,$password));
        $cpt=$req->rowCount();
        if($cpt==1){
            $message="Votre compte a bien ete trouve";
            echo"$message";
          
        }
        else{
            $message="DEsole nous ne trouvons pas ce compte";
            echo"$message";
        }
    } else{
        $message="Veuillez remplir tous les champs";
        echo"$message";
    }

}  