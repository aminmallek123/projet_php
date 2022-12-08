<?php
try{
    $pdo=new PDO('mysql:host=localhost;dbname=mini_prog','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $num=$_POST['name'];
        $lib=$_POST['pase'];
        $prix=$_POST['mail'];
        $a=$pdo->prepare("INSERT INTO client(username,pasword,email) VALUES ('$num','$lib','$prix')");
        $a->execute();
        header("Location: inscription.php");
        echo "<script>alert( voutre inscription est confirmer)</script>";
        exit();
      $a->closeCursor();
     $pdo=null;
    }
    catch (Exception $e) {
        echo "ERREUR : ".$e->getMessage() ;
        }
?>