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
</head>
<body class="bg-secondary">
  <div class="container mt-5 text-center">
    <div class="row justify-content-center">
      <div class="col-5 bg-white pb-4 pt-4">
       <h3>La password generata è: <strong><?php echo $_SESSION['lunghezza_password'] ?></strong></h3>
       <a href="./index.php" class="btn btn-info bg-secondary mt-2 btn-lg">Indietro</a>
      </div>
    </div>
  </div>
</html>