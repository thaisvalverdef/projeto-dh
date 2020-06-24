<body>
    <header>
    <nav class="navbar text-primary navbar-expand-lg navbar-light">
   
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo_danca.png" width="100" height="100">
                 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Como funciona</a>
                    </li>
                    
                    <li class="navbar-nav ml-auto">
                   <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" id="navDrop">Modalidades</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                        <a class="dropdown-item" href="#">Ballet</a>
                        <a class="dropdown-item" href="#">Contemporâneo</a>
                        <a class="dropdown-item" href="#">Dança de Salão</a>
                        <a class="dropdown-item" href="#">Dança do Ventre</a>
                        <a class="dropdown-item" href="#">Funk</a>
                        <a class="dropdown-item" href="#">Hip Hop/Breaking</a>
                        <a class="dropdown-item" href="#">Jazz</a>
                        <a class="dropdown-item" href="#">Samba</a>
                        <a class="dropdown-item" href="#">Sapateado</a>
                        <a class="dropdown-item" href="#">Vídeo Dance</a>
                        <a class="dropdown-item" href="#">Outros</a>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#btnLogin">Quero dar aulas</a>
                    </li>
                                  
                </ul>
            
        </nav>

        <!--Modal: Login / Register Form-->
<div class="modal fade" id="btnLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Faça o seu Login</a>
          </li>
        
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Seu email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Sua senha</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn">Acesse<i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-offset text-md-left mt-1">
                <p>Ainda não cadastrou seu perfil? <a href="#" class="blue-text">Cadastre-se!</a></p>
                <p>Esqueceu <a href="#" class="blue-text">a senha?</a></p>
              </div>
              <button type="button" class="btn" data-dismiss="modal">Fechar</button>
            </div>

          </div>
         

      
    </header>
    