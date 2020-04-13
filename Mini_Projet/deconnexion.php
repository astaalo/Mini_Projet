<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["password"]);
session_destroy();
echo "session clean";
header('Location:PageConnexion.php');
?>