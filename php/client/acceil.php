<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try{
        $pdo=new PDO('mysql:host=localhost;dbname=mini_prog','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $_SESSION["mailadmin"]="admin@gmail.com";
        $_SESSION["paswordadmin"]="med_amin";
            $lib=$_POST['mail'];
            $prix=$_POST['pase'];
            $a=$pdo->prepare("SELECT username,email,pasword from client where email='$lib' and pasword='$prix'");
            $a->execute();
            $p=$a->fetch();
            if($_SESSION["mailadmin"]==$lib && $_SESSION["paswordadmin"]==$prix){
                header("Location: ../admin/Affich_Prod.php");}
            if($p["email"]!=null && $p["pasword"]!=null){
                $_SESSION["email"] = $p["email"];
                $_SESSION["pasword"] = $p["pasword"];
                $_SESSION["name"] = $p["username"];
                header("Location: aff_client.php");} 
            // else{header("Location: inscription.php");}    
            
            exit();
          $a->closeCursor();
         $pdo=null;
        }
        catch (Exception $e) {
            echo "ERREUR : ".$e->getMessage() ;
            echo "desole mrs tu n'a pas l'inscrire";
            }
    ?>
</body>
</html>