<?php
session_start();
$_SESSION['MaVariable']+=1;

echo "Ma variable de session vaut : ".$_SESSION['MaVariable'];

echo '</br>';

echo '<a href="SessionInitialisation.php">Clique ici</a>';
?>