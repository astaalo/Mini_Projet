<?php
SESSION_start();
if(!isset($_SESSION['prenom'])){
    echo "Vous n'etes pas connectes!";
    header("Location:PageConnexion.php");
    exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <link rel="StyleSheet" type="text/css" href="CompteUser.css"/>
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Mrs+Sheppards|Open+Sans&display=swap" rel="stylesheet">
 <title> Compte Admin </title>
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
                        <div id="log"><p> CREER ET PARAMETREZ VOS QUIZZ </p>
                        <a href="PageConnexion.php"><button type="submit" id="btn3" name="deconnexion">Deconnection</button></a></div>
                            <div id="blog1">
                                <div id="avatar">
                                    <a href="#"><img src="img/img5.jpg" alt=""></a>
                                    <h3>Avatar Admin</h3>
                                </div>
                        <div id="forml">
                            <strong><h4>S'INSCRIRE</h4></strong><br><br>
                            <h6>Pour proposer des Quizz<h6><br>
                    
                            <form method="POST" action="PageConnexion.php">
                                <label for="Prenom">Prenom</label><br><br>
                                <input type="text" placeholder="Prenom" name="prenom"><br><br>
                                <label for="Nom">Nom</label><br><br>
                                <input type="text" placeholder="Nom" name="nom"><br><br>
                                <label for="Login">Login</label><br><br>
                                <input type="text" placeholder="Login" name="login"><br><br>
                                <label for="Password">Password</label><br><br>
                                <input type="text" placeholder="Password" name="password"><br><br>
                                <label for="Confirmer_Password">Confirmer Password</label><br><br>
                                <input type="text" placeholder="Confirmer Password" name="confirmer_password"><br><br>
                                <h5> Avatar </h5><br>
                                <button type="submit"  name="Choisir_un_fichier" id="btn1">Choisir un fichier</button>
                                    <button type="submit"  name="Creer_Compte" id="btn2"><a href="PageConnexion.php">Creer Compte</a></button>
                       
                            </form>
                
                        </div>
                    </div>
                </div>
        </div>
    </body>
    </html>
