<?php
$path = 'http://' . $_SERVER["HTTP_HOST"] . '/Trabalho14042023';
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <div class="container-fluid">

    <a class="navbar-brand" href="index.php"><img src="./arquivos/imagens/Logo01.jpg" width="35%"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Sala de Informações</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./repositorio/cadastro.php">Se tornar um corredor</a></li>
            <li><a class="dropdown-item" href="#">Buscar Corredores</a></li>
          </ul>
        </li>
          <a class="nav-link" href="#">Notas e frequencia</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Boletim escolar</a>
        </li>  
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">Cadastro</a>
          <ul class="dropdown-menu" >

     <li><a class="dropdown-item" href="index.html">Sair da conta</a></li>
            <li><a class="dropdown-item" href="#">Alterar senha</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>