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
    <title>Dashboard</title>
</head>

<body class="body">
    <div class="centrage row justify-content-center">
        <div class=" col-8 text-center  ">
            <h1 class="justify-content-center p-5">allPIX</h1>
            <div class="p-5col-8 m-4  justify-content-center  ">
            <?php if(!empty($_SESSION)) {  ?>
                <p>
                    Bonjour <b class="text-danger"><?= $_SESSION['login'] ?></b> </p>
            </div>
            <div class="p-5col-8 m-4 justify-content-center ">
                <p><b>Formule: </b><b class="text-danger"><?= $_SESSION['formule'] ?></b> </p>

                <p><b>Quota</b>: ..... / <b class="text-danger"><?= $_SESSION['quota'] ?> </b></p>


                <p><b>Total image(s): (.....)</p></b>
                <?php }else{ header("location:no-allowed.php"); }  ?>

                <div><a href="upload.php" class=" btn justify-content-center col-2 boutons m-2" type="button" value="Upload Image" style="background-color:white;">Upload Image</a></div>
                <div><a href="gallery.php" class=" btn justify-content-center col-2 boutons m-2" type="button" value="Gallery" style="background-color:white;">Gallery</a></div>
                <div><a href="deconnexion.php" class=" btn justify-conter-center col-2 boutons m-2" type="button" value="Deconnexion"  style="background-color:white;">Deconnexion </a></div>

            </div>
        </div>









    </div>




</body>

</html>