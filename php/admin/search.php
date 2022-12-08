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
     <!-- Navigation-->
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
    <!--header-->
    <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">You are welcom to viste your cite web</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
    <!--Affichage de tout les produis-->
    <?php
    try{
        $Produit=new PDO('mysql:host=localhost;dbname=mini_prog','root','');
        $Produit->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $s=$_POST["search"];
        $P=$Produit->query("SELECT * from produits where reference='$s'");
        $P->setFetchMode(PDO::FETCH_ASSOC);
        echo "<section class='py-5'>
            <div class='container px-4 px-lg-5 mt-5'>
                <div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'>";
        foreach($P as $i){
            echo "<div class='col mb-5'>
            <div class='card h-100'>
                <img class='card-img-top' src='".$i["image"] ."' alt='...' />
                <div class='card-body p-4'>
                    <div class='text-center'>
                        <h5 class='fw-bolder'>".$i["libelle"]."</h5>".$i["prix"]."dt
                        
                    </div>
                </div>
                <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                    <a class='btn btn-outline-dark mt-auto' href='Modif_prod.php?reference={$i["reference"]}'>editer</a>
                    <a class='btn btn-outline-danger mt-auto' href='Supp_prod.php?reference={$i["reference"]}'>Supp</a>
                </div>
            </div>
        </div>";
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