<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
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
      img {
        width: 90px;
        height: 90px;
      }
      .due {
      margin-left: 630px;
      margin-top: 50px;
      }
      .sparisco {
      border-radius: 20px;
      }

    </style>
</head>
<body >
  
  <div class="due" >
    <img src="./img/freccia.jpg" alt="">
    <img src="./img/freccia.jpg" alt="">
    <img src="./img/freccia.jpg" alt="">
  </div>


  <div class=" sparisco mt-5 text-center">
      <div class="row justify-content-center">
          <div class="sparisco col-5 bg-white pb-4 pt-4">
            <h3>Ciao  <?php echo $_SESSION['nome']?> <?php echo $_SESSION['cognome']?></h3>
              
            <h3>Questa è la tua nuova password : <strong><?php echo $_SESSION['lunghezza_password'] ?></strong></h3>
            <a href="./index.php" class="btn btn-danger  btn-lg">Indietro</a>
          </div>
      </div>
  </div>
</body>
</html>
