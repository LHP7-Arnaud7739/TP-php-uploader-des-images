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
    <title>Upload</title>
</head>

<body class="body">
    <div class="centrage row justify-content-center">
        <div class=" col-8 text-center  ">
            <h1 class="justify-content-center p-5">allPIX</h1>
            <div class="p-5col-8 m-4  justify-content-center  ">
                <?php if (!empty($_SESSION)) {  ?>
                    <p>
                        Bonjour <b class="text-danger"><?= $_SESSION['login'] ?></b> </p>
            </div>
            <div class="p-5col-8 m-4 justify-content-center ">
                <p><b>Formule: </b><b class="text-danger"><?= $_SESSION['formule'] ?></b> </p>

                <p><b>Quota</b>: ..... / <b class="text-danger"><?= $_SESSION['quota'] ?> </b></p>


                <p><b>Total image(s): (.....)</p></b>
            </div>
        <?php } else {
                    header("location:no-allowed.php");
                }  ?>

        <div>

            <form method="POST" enctype="multipart/form-data">

                <p><label class="m-2" for="file"></label></p>
                <p><input type="file" name="fileToUpload" id="fileToUpload"></p>
                <p ><img class="text-center" id="imgPreview"></p>
                <p><button class="btn btn-light" type="submit"> <i class="fa fa-upload"> UPLOAD</i></button>
                </p>
                <p class="text-danger"> <?php
                                        if (isset($_FILES['fileToUpload'])) {

                                            $tmpName = $_FILES['fileToUpload']['tmp_name'];
                                            $name = $_FILES['fileToUpload']['name'];
                                            $size = $_FILES['fileToUpload']['size'];
                                            $error = $_FILES['fileToUpload']['error'];
                                            $maxSize = 2000000;
                                            $tabExtension = explode('.', $name);
                                            $extension = strtolower(end($tabExtension));
                                            $extensions = ['jpg', 'jpeg', 'png',];


                                            if (in_array($extension, $extensions) && $size < $maxSize && $error == 0) {

                                                $uniqueName = uniqid('', true);
                                                $file = $uniqueName . "." . $extension;
                                                move_uploaded_file($tmpName, '../upload/' . $file); 

                                                ?>
                <p class="imgUpload p-3 text-center"><strong><b> <?= 'Votre image "'?> <b class="text-success"><?= $name  ?> </b><b><?=' "a bien été uploader !'; ?></b></strong></p>
        <?php
                                            } else {
                                                echo 'Taille ou format incorrect !';
                                            }
                                        }
        ?></p>
        </div>
        <p class="p-3 text-center  ">Vos message ici</p>


        <div class="text-center">
            <div><a href="gallery.php" class=" btn justify-content-center col-2 boutons m-2" type="button" value="Gallery" style="background-color:white;">Gallery</a></div>
            <div><a href="dashboard.php" class=" btn justify-conter-center col-2 boutons m-2" type="button" value="Retour" style="background-color:white;">Retour </a></div>
            <div><a href="deconnexion.php" class=" btn justify-conter-center col-2 boutons m-2" type="button" value="Deconnexion" style="background-color:white;">Deconnexion </a></div>
        </div>
        </div>
    </div>



    <script src="../assets/script.js"></script>

</body>

</html>