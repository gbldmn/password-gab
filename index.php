<?php

include './generatore.php';

if(!empty($_GET['lunghezza_password'])){
    session_start();
    $_SESSION['lunghezza_password'] = randomPass($lunghezzaPassword);
    header('Location: ./password.php');
}
if(!empty($_GET['nome'])){
    session_start();
    $_SESSION['nome'] = $_GET['nome'];
    header('Location: ./password.php');
}
if(!empty($_GET['cognome'])){
    session_start();
    $_SESSION['cognome'] = $_GET['cognome'];
    header('Location: ./password.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file.css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <style>
           body {
            background-image: linear-gradient(to bottom, #ff0000, #00ff00);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .box {
            background-color: white;
            border: 1px solid white;
            border-radius: 20px;
            padding: 4px;
        }
        .item {
            border: 1px solid white;
            border-radius: 20px;
            padding: 4px;
        }
        .item1 {
            border: 1px solid white;
            border-radius: 20px;
            padding: 4px;
        }
        .son {
            border: 1px solid white;
            border-radius: 20px;
            padding: 4px;
        }
        .son1 {
            border: 1px solid white;
            border-radius: 20px;
            padding: 4px;
        }
    </style>
</head>
<body>
    <div class="box d-flex flex-column ">
        <div class="item d-flex justify-content-center align-items-center">
            <img src="./img/non-vedo.png" alt="">
            <img src="./img/non-sento2.png" alt="">
            <img src="./img/non-parlo.png" alt="">
        </div>
        <div class="item1 d-flex flex-column">
            <div class="son text-center">
                <h3>Vuoi una password sicura?</h3>
                <h3>Dicci chi sei</h3>
            </div>
            <div class="son1 text-center">
            <form action="index.php" method="GET">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cognome</label>
                    <input type="text" class="form-control" name="cognome" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Lunghezza di caratteri della tua password</label>
                    <input type="number" min="2" max="10" name="lunghezza_password" class="form-control" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text">Per noi la sicurezza viene prima di tutto</div>
                </div>
                <button type="submit" class="btn btn-danger">Genera</button>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>
