
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="style2.css">
    <title>Emploi</title>

</head>
<body>
    <div class="center">
        <h1> Se connecter </h1>
        <form method="post" action="traitement2.php">
            <div class ="textfield"> <input type= "text" name="email" required="required">
                <span></span>
            <label for="email">E-mail</label>
        </div>
            <div class ="textfield"> <input type= "password" name="password" required="required">  
                <span></span>
                <label for="password">mot de passe</label>
            </div>
                <div class="forgot"> Forgot passeword?</div>
               <input type="submit"  name="valider" value="se connecter">
               <br>
               <div class="sign_link">Not a member <a href=#Signup> Signup</a></div>
          
        </form>
   
</div>
    
</body>