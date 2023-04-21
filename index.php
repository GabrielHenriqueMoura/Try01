<!<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>
    <link  href="./arquivos/css/style.css"rel="stylesheet">
</head>

<body>
  <?php include("./menu.php") ?>

  <div class="bg"> 
  <div class="container">
   <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <img src="./arquivos/imagens/Logo01.jpg" alt="CorridaMaluca" width="250" height="100"> 
        <p class="lead">
        <h3>uma quadrilha de pilotos animados que disputavam corridas
        entre eles e o objetivo era ganhar o título de piloto mais louco do mundo.
        </h3></p>
 </div>
    
   
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                               <img src="./arquivos/imagens/Rider001.jpg" alt="Corredor Numero 1"  class="d-block w-100" Height="400" width="600">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./arquivos/imagens/Racer01.jpg" alt="Corredor Numero 2"  class="d-block w-100" Height="400" width="600">
                        </div>
                        <div class="carousel-item">
                                <img src="./arquivos/imagens/Racer03.jpg" alt="Corredor Numero 3"  class="d-block w-100" Height="400" width="600">
                        </div>
                             <div class="carousel-item">
                                <img src="./arquivos/imagens/Racer04.jpg" alt="Corredor Numero 4"  class="d-block w-100" Height="400" width="600">
                        </div>
                             <div class="carousel-item">
                                <img src="./arquivos/imagens/Racer05.jpg" alt="Corredor Numero 5"  class="d-block w-100" Height="400" width="600">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
            </div>
            </div>
</body>
</html> 