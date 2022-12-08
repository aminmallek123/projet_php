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
    <?php
    try{
    $pdo=new PDO('mysql:host=localhost;dbname=mini_prog','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $num=$_GET['reference'];
    $pp=$pdo->query("SELECT * from produits where reference='$num'") ;
    $ll=$pp->fetch(PDO::FETCH_ASSOC);
    $ref=$ll['reference'];
    $lib=$ll['libelle'];
    $prix=$ll['prix'];
    $img=$ll['image'];
    $cat=$ll['categorie'];
    $sous=$ll['sous_categorie'];
    $mark=$ll['marque'];
    $des=$ll["desce"];
    }
    catch (Exception $e) {
        echo "ERREUR : ".$e->getMessage() ;
        }
    ?>
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h1>l'opération de modification</h1>
                <div class="my-5">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post"<?php echo "action='Eng_prod.php?reference={$num}'" ?> >
                        <div class="form-floating">
                            <input class="form-control" id="ref" name="ref" type="text" placeholder="Enter your name..." value=<?php echo $ref?> required />
                            <label for="name">Reference</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="email" name="lib" type="text" placeholder="Enter your email..." value=<?php echo $lib?> required />
                            <label for="email">Libelle</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="phone" name="prix" type="text" placeholder="Enter your phone number..." value=<?php echo $prix?> required />
                            <label for="phone">prix</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="phone" name="images" type="file" placeholder="Enter your phone number..." value=<?php echo $img?> required />
                            <label for="phone">images</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="phone" name="cat" type="text" placeholder="Enter your phone number..." value=<?php echo $cat?> required />
                            <label for="phone">Categorie</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="phone" name="sous" type="text" placeholder="Enter your phone number..." value=<?php echo $sous?> required />
                            <label for="phone">Sous-categorie</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="phone" name="mark" type="text" placeholder="Enter your phone number..." value=<?php echo $mark?> required />
                            <label for="phone">Marque</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="des" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"><?php echo $des?></textarea>
                            <label for="message">Description</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <br />
                        <a href=""><button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Enregister</button></a>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </main>
</body>
</html>