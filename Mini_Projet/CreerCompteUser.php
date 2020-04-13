<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <link rel="StyleSheet" type="text/css" href="CompteUser.css"/>
 <title> Compte Joueur </title>
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
            <div id="log"><p> CREER ET PARAMETREZ VOS QUIZZ </p></div><br><br>
               <div id="blog1">
                    <div id="avatar">
                        <a href="#"><img src="img/img5.jpg" alt=""></a>
                        <h3>Avatar Joueur</h3>
                    </div>
                <div id="forml">
                    <strong><h4>S'INSCRIRE</h4></strong><br><br>
                    <h6>Pour tester votre niveau de culture general<h6><br>
                    <form method="POST" action="PageConnexion.php">
                    <label for="Prenom">Prenom</label><br><br>
                    <input type="text" placeholder="Prenom" name="Prenom"><br><br>
                    <label for="Nom">Nom</label><br><br>
                    <input type="text" placeholder="Nom" name="Nom"><br><br>
                    <label for="Login">Login</label><br><br>
                    <input type="text" placeholder="Login" name="Login"><br><br>
                    <label for="Password">Password</label><br><br>
                    <input type="text" placeholder="Password" name="Password"><br><br>
                    <label for="Confirmer_Password">Confirmer Password</label><br><br>
                    <input type="text" placeholder="Confirmer Password" name="Confirmer_Password"><br><br>
                    <h5> Avatar </h5>
                    <button type="submit" name="Choisir_un_fichier" id="bt1">Choisir un fichier</button><br><br>
                    <button type="submit" name="Creer_Compte" id="bt2"><a href="PageConnexion.php"> Creer Compte</button>
                </form>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </body>
    </html>