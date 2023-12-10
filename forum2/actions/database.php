<?php
try{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=mobile18;charset=utf8', 'mobile18', 'zivnzhnbws');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
