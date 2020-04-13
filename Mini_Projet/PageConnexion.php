<?php
require_once("fonction.php");
$msg='';
if(isset($_POST['connexion'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    if(!is_empty($login) && is_empty(!$password)){    
        $donnees=file_get_contents('index.json');
        $jd=json_decode($donnees,true);
    foreach($jd as $value){
    if($value['login']==$login && $value['password']==$password && $value['role']=='admin'){
        header('Location:Accueil.php');
      }elseif($value['login']==$login && $value['password']==$password && $value['role']=='joueur'){
          header('Location:InterfaceJoueurs.php');
      } else{
          $msg="L'utilisateur saisie n'existe pas";
      }
    }
}
else{
    $msg="Champs obligatoire!";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <link rel="StyleSheet" type="text/css" href="Connexion.css"/>
 <title> AUTHENTIFICATION </title>
   </head>
     <body>
        <div class="blog">  
            <div id="banniere">
                <div class="logo">
                    <img src="img/logo-QuizzSA.png">
                </div>
                <p> Le plaisir de jouer</p>
            </div>
            <div id="milieu">
            <div id=conteneur>
            <div id="log"><h4> Login Form</h4></div><br><br>
                <form method="POST" action="">
                    <div class="champ">
                        <input type="text" placeholder="Login" name="login">
                        <div class="icone1"><img src="img/ic-login.png"></div><br><br> 
                        <input type="text" placeholder="Password" name="password">
                        <div class="icone2"><img src="img/icone-password.png"></div><br><br>
                    </div>
                    <button type="submit" name="connexion">Connexion</button>
                        <a href="#"><h5>S'inscire pour jouer?</h5></a><br><br>
                        <p style="color:red"><?= $msg ?></p>
                </form>
            </div>
            </div>
        </div>
    </body>
    </html>
    