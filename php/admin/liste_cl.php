<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Mega Pc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="Ajout_prod.html">Ajouter nouveau produits</a></li>
                    <li class="nav-item"><a class="nav-link" href="liste_cl.php">Liste de client</a></li>
                    </li>
                </ul>
                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <a href="logout.php"><button class="btn btn-primary" id="btnNavbarSearch" type="button">Deconnecter</button></a>
                    
                    
                </div>
            </form>
            </div>
        </div>
    </nav>
    <form action="client.php" method="post">
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group"><input type="date" name="date"></input>
            <button class="btn btn-danger" id="btnNavbarSearch" type="submit">taper</button>
    </from>
</br>
</br>
    <?php
    try{
    $Produit=new PDO('mysql:host=localhost;dbname=mini_prog','root','');
    $Produit->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $P=$Produit->query('select * from client');
    $P->setFetchMode(PDO::FETCH_ASSOC);
    echo "<table class='table'>
    <thead class='thead-dark'>
      <tr>
        <th scope='col'>id</th>
        <th scope='col'>name client</th>
        <th scope='col'>password</th>
        <th scope='col'>email</th>
        <th scope='col'>date</th>
        
      </tr>
    </thead>";
    foreach($P as $i){
        echo "
        <tr>
          <td>".$i['id']."</td>
          <td>".$i['username']."</td>
          <td>".$i['pasword']."</td>
          <td>".$i['email']."</td>
          <td>".$i['date_dernier']."</td>
        </tr>";
    }
        echo "</table>";
    }
    
        catch (Exception $e) {
            echo "ERREUR : ".$e->getMessage() ;
            }
    ?>
</body>
</html>