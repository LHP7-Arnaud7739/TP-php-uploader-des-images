<?php
require 'my-config.php';
require 'controllers/index-controller.php';
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css%22%3E">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>INDEX</title>
</head>

<body class="body  justify-content-center">
    <div class=" centrage row justify-content-center">
        <div class="justify-content-center p-5 ">
            <h1 class="text-center p-5">allPIX</h1>
            <form action="" method="POST">

                <div class="text-center p-4 ">
                    <label><b>Login</b></label>
                </div>
                <div class="text-center">
                    <input type="text" name="login">
                </div>
                <div class="text-center p-4">
                    <label><b>Password</b></label>
                </div>
                <div class="text-center">
                    <input type="password" name="password">
                </div>
                <div class="text-center p-5 ">
                    <input type="submit" name="btn-submit" value="CONNEXION">


                </div>
            </form>
        </div>

    </div>




</body>

</html>