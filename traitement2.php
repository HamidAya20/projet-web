<?php

if (isset($_POST['valider'])){
    if(!empty($_POST['email']) and !empty($_POST['password'])) {
        $email=($_POST['email']);
        $password=($_POST['password']);
        require_once 'data_base.php'; 
        $checkEmail = "SELECT * FROM `condiat` where `email` ='$email' and `password`=`$password`";
        $checkEmailExecute = $cnx->query($checkEmail);
        $checkEmailResult = $checkEmailExecute->fetchAll();
        if(!empty($checkEmailResult)){

            header("location: connexion.php");
           
       }}

        if($cpt==1){
            $message="Votre compte a bien ete trouve";
            echo"$message";
            
            header("Location:profil.php");          
        }
        else{
            $message="DEsole nous ne trouvons pas ce compte";
            echo"$message";
        }
    } else{
        IF(!empty($email) || !empty($password))
        
        $sql11 = "INSERT INTO `condiat` (`email`,`password`)";
        $sth = $cnx->query($sql11);
    
        if($sth){
            $sql1 = "SELECT id_condidat FROM `condiat` where `email` = '$email' and `password`=$password";
            $sth1 = $cnx->query($sql1);
            $result = $sth1->fetch();
            session_start();
           
    }

}  
?>
