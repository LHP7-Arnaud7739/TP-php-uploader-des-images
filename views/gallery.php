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
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style.css">
    <!-- CSS lightbox -->
    <link rel="stylesheet" href="../assets/css/lightbox.css">
    <!-- ICONE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css%22%3E">
    <!-- ICONE FONTAWESONE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>

<body class="body">
    <div class="centrage row justify-content-center">
        <div class=" col-8 text-center  ">
            <h1 class="justify-content-center p-5">allPIX</h1>
            <div class="p-5col-8 m-4  justify-content-center  ">
                <?php if (!empty($_SESSION)) {  ?>
                    <div class="row">
                       <?php
                       $img=scandir('../upload/', SCANDIR_SORT_DESCENDING);
                       $userPicture = [];
                      
                       foreach($img as $key => $value){
                           if (stristr($value , $_SESSION['login']."_")){
                               array_push($userPicture, $value);
                           }
                           $totalPicture = count($userPicture);
                          
                           ?>
                       <div class="col-3">
                    <div><a href="../upload/<?= $value ?>" data-lightbox="image-1" data-title="My caption"><img class="img-fluid" src="../upload/<?= $value ?>" alt=""></a></div>
</div>
                       <?php   
                    
                    }?>
                       
                    
                </div>


        <?php } else {
                    header("location:no-allowed.php");
                }  ?>
               

        <div><a href="dashboard.php" class=" btn justify-conter-center col-2 boutons m-2" type="button" value="Retour" style="background-color:white;">Retour </a></div>
        <div><a href="deconnexion.php" class=" btn justify-conter-center col-2 boutons m-2" type="button" value="Deconnexion" style="background-color:white;">Deconnexion </a></div>


        </div>
    </div>









    </div>

    <script src="../assets/js/lightbox-plus-jquery.js"></script>

</body>

</html>