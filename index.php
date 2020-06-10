<?php require_once("./inc/header.php"); ?>   

<head>
<link rel="stylesheet" href="./assets/css/style.css">
</head>

<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="inc/img/slide4.png" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="inc/img/slide1.png" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="inc/img/slide2.png" alt="Terceiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="inc/img/slide3.png" alt="Quarto Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<h2 class="col-12 text-center text info mt-5 mb-5">Aulas da semana</h2>

  <div class="card-deck">
  <div class="card ml-5">
    <img class="card-img-top" src="inc/img/aula1.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior.</p>
      <a href="#" class="btn" class="saiba">Saiba mais</a>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="inc/img/aula5.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
      <a href="#" class="btn btn btn-dark">Saiba mais</a>
    </div>
  </div>
  <div class="card mr-5">
    <img class="card-img-top" src="inc/img/aula7.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
      <a href="#" class="btn btn btn-dark">Saiba mais</a>
    </div>
  </div>
</div>
<div class="card-deck">
  <div class="card mt-5 mb-5 ml-5">
    <img class="card-img-top" src="inc/img/aula4.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior.</p>
      <a href="#" class="btn btn btn-dark btn-rigth">Saiba mais</a>
    </div>
  </div>
  <div class="card mt-5 mb-5">
    <img class="card-img-top" src="inc/img/aula8.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
      <a href="#" class="btn btn btn-dark">Saiba mais</a>
    </div>
  </div>
  <div class="card mt-5 mb-5 mr-5">
    <img class="card-img-top" src="inc/img/aula6.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
      <a href="#" class="btn btn btn-dark">Saiba mais</a>
    </div>
  </div>
</div>


<?php require_once("./inc/footer.php"); ?>

    