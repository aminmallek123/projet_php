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
 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Mega Pc</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link " aria-current="page" href="aff_client.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="connexion.php">connexion</a></li>
                    <li class="nav-item"><a class="nav-link" href="inscription.php">inscription</a></li>
                    </li>
                </ul>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="post" action="search.php">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-secondary" id="btnNavbarSearch" type="submit">Search</button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                </li>
            </ul>
        </nav>
    <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Bienvenu chez Mega pc</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
    </header>
   
<?php
try{
    $Produit=new PDO('mysql:host=localhost;dbname=mini_prog','root','');
    $Produit->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $P=$Produit->query('select * from produits');
    $P->setFetchMode(PDO::FETCH_ASSOC);
    echo "<section class='py-5'>
        <div class='container px-4 px-lg-5 mt-5'>
            <div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4  justify-content-center'>";
    foreach($P as $i){
        echo "<a href='client.php?reference={$i["reference"]}'><div class='col mb-5'>
        <div class='card h-100'>
            <img class='card-img-top' src='".$i["image"] ."' alt='...' />
            <div class='card-body p-4'>
                <div class='text-center'>
                    <h5 class='fw-bolder'>".$i["libelle"]."</h5>".$i["prix"]."dt
                    
                </div>
            </div>
        </div>
    </div></a>";
        
    }
    echo "</section>
        </div>
            </div>";
    }
    
        catch (Exception $e) {
            echo "ERREUR : ".$e->getMessage() ;
            }
   ?> 
      
</body>
</html>