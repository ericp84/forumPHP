<?php
try{
    $bdd = new PDO('mysql:host=localhost;port=3308-;dbname=forum;charset=utf8;', 'root', 'root');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
