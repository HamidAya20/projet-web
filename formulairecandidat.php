<?php
include_once('data_base.php');
if(isset($_POST['submit'])){
    $id=$_POST['id_condidat'];
    $nom=$_POST['non'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $tel=$_POST['tel'];
    $adress=$_POST['adress'];
    $civilite=$_POST['civilite'];
    $pays=$_POST['pays'];
    $ville=$_POST['ville'];
    $domaine=POST['domain'];
    $cv=$_POST['cv'];
    $pdoQuery="insert into `condiat`(`id`,`nom`,`prenom`,`email`,`password`,`tel`,`adress`,`civilite`,`pays`,`ville`,`domaine`,`cv`)values(:id,:nom,:prenom,:email,:password,:tel,:adress,:civilite,:pays,:ville,:domaine,:cv)"
    $pdoResult=$cnx->prepare($pdoQuery);
    $pdoExec=$pdoResult->execute(array(":id"=>$id,"nom"=>$prenom,"email"=>$email,"password"=>$password,"tel"=>$tel,"adress"=>$adresse,"civilite"=>$civilite,"pays"=>$pays,"ville"=>$ville,"domaine"=>$domaine,"cv"=>$cv))    
    if($pdoExec){
        alert('success');
        header("Location:profil.php");
    }
    else{
        alert('error');
        header("Location:formulairecandidat.php");
    }
}
$cnx=null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi</title>
    <Link rel="stylesheet" href="style6.css">
</head>
<body>
<section class="container"> 
    <header> Inscription Candidat</header><hr>
    <form action="#" Class="form" method="POST">
        <div class="input-box">
            <label>Nom complet:</label><br>
            <input type="text" placeholder="Enter votre nom "name="nom">
        </div>
        <div class="input-box">
            <label>prenom:</label><br>
            <input type="text" placeholder="Enter votre prenom"name="prenom">
        </div>

        <div class="input-box">
            <label>Email:</label><br>
            <input type="text" placeholder="Enter email" name="email">
        </div>
        <div class="column">
            <div class="input-box">
                <label>Tel:</label>
                <input type="text" placeholder="Entrer votre telephone" name="tel">
            </div>
           </div>
        <div class="gender-box">
            <h3>Gender</h3>
        <div class="gender-option">
            <div class="gender">
         <input type="radio" id="check" name="civilite">
         <label for="check">Male </label>
            </div>
            <div class="gender">
                <input type="radio" id="check" name="civilite">
                <label for="check">Female</label>
            </div>
            <div class="gender">
                <input type="radio" id="check" name="civilite">
                <label for="check">Other </label>
                   </div>
        </div>
        </div>

       <div class="input-box">
                <label>Adresse:</label><br>
                <input type="text" placeholder="Entrer votre adresse" name="adress">
            </div>
            <div class="input-box">
                <label> Pays :</label><br>
                <input type="text" placeholder="Enter pays" name="pays">
            </div>
            <div class="input-box">
                <label>ville :</label><br>
                <input type="text" placeholder="Enter votre ville" name="ville">
            </div>
            <Br>
                <div class="input-box">
                    <label>Domaine:</label>
                    <input type="text" placeholder="Entrer votre domaine" name="domaine">
                </div>
                <div class="input-box">
                    <label>fonction:</label>
                    <input type="text" placeholder="Entrer votre fonction" name="fonction">
                </div>
                <div class="input-box">
                    <label>Formation:</label>
                    <input type="text" placeholder="Entrer votre formation" name="formation">
                </div>
            <div class="input-box">
                <label > Deposer votre CV </label>
                <input type="file"  name="cv">
               
                   </div>
        </div>
        <button> S'inscrire 
          </button>
    </form>
</section>