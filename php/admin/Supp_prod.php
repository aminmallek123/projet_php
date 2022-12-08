<?php
try{
    $pdo=new PDO('mysql:host=localhost;dbname=mini_prog','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $nm=$_GET['reference'];
    $p=$pdo->query("DELETE from produits where reference='$nm'") ;
    $p->execute();
    header("Location: Affich_Prod.php");
    exit();
    $p->closeCursor();
    $pdo=null;
    }
    catch (Exception $e) {
        echo "ERREUR : ".$e->getMessage() ;
        }
?>