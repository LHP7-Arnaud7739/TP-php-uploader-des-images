
<?php
require '../my-config.php';
session_start();
session_destroy(); 


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
    <title>Deconnexion</title>
</head>

<body class="body">
    <div class="centrage row justify-content-center">
        <div class=" col-8 text-center  ">
            <h1 class="justify-content-center p-5">allPIX</h1>
            <div class="p-5 ">
                <p class="justify-content-center"><h2>Vous avez bien été déconnecté.<h2></p>
            </div>
            <div class="p-5">
            <a href="../index.php" class="justify-content-start   btn" type="button" value="accueil"style="background-color:white;" >Accueil</a>
</div>
  
</p>
</body>
</html>