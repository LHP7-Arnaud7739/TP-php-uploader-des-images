<?php
require '../my-config.php';
session_start();


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css%22%3E">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload1</title>
</head>

<body class="body">
    <div class="centrage row justify-content-center">
        <div class="col-8 text-start  ">
            <h1 class="text-center p-5">allPIX</h1>
            <div class="col-8 m-4 p-1 text-start  ">
            <?php if(!empty($_SESSION)) {  ?>
                <p>Bonjour, (..........)</p>
            </div>
            <div class="col-8 m-4 text-start  ">
                <p><b>Quota: (..... / .....)</b></p>


                <p><b>Total image(s): (.....)</b></p>
            </div>
        </div>

        <div>
        <?php }else{ header("location:no-allowed.php"); }  ?>
            <a href="...php" class="text-center  btn" type="button" value="Upload" style="background-color:white;">Upload</a>
        </div>
        <div class=" text-center  ">Vos message ici</div>
        <div class=" text-center  ">-Upload OK</div>
        <div class=" text-center  ">-Echec Upload</div>
        <div class="text-center">
            <div><a href="dashboard.php" class=" btn justify-conter-center col-8 boutons m-2" type="button" value="Retour">Retour </a></div>


            <a href="gallery.php" class=" btn justify-conter-center col-8 boutons m-2" type="button" value="Tarifs" style="background-color:white;">Gallery</a>
            <div><a href="dashboard.php" class=" btn justify-conter-center col-8 boutons m-2" type="button" value="Retour">Retour </a></div>
            <div><a href="deconnexion.php" class=" btn justify-conter-center col-8 boutons m-2" type="button" value="Deconnexion">Deconnexion </a></div>

        </div>


    </div>




</body>

</html>