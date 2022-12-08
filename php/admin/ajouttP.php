<?php
try{
    $pdo=new PDO('mysql:host=localhost;dbname=mini_prog','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $num=$_POST['ref'];
        $lib=$_POST['lib'];
        $prix=$_POST['prix'];
        $img="http://localhost/images/".$_POST['images'];
        $cat=$_POST['cat'];
        $sous=$_POST['sous'];
        $mark=$_POST['mark'];
        $des=$_POST["des"];
        $a=$pdo->prepare("INSERT INTO produits VALUES ('$num','$lib',$prix,'$img','$cat','$sous','$mark','$des')");
        $a->execute();
        header("Location: Affich_Prod.php");
        exit();
      $a->closeCursor();
     $pdo=null;
    }
    catch (Exception $e) {
        echo "ERREUR : ".$e->getMessage() ;
        }
?>