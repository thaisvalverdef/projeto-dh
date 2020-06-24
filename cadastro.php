<?php require_once("./inc/header.php"); ?>
<?php require_once("./inc/head.php"); ?>

<?php

if (isset($_POST) && $_POST) {
  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $modalidade = $_POST["modalidade"];
  $apresentacao = $_POST["apresentacao"];
  $metodologia = $_POST["metodologia"];
  $niveis = $_POST["niveis"];


  $usuariosJson = file_get_contents("./data/usuarios.json");

  $arrayUsuarios = json_decode($usuariosJson, true);

  $ultimoUsuario = end($arrayUsuarios["usuarios"]);

  $novoUsuario = [
    "id" => $ultimoUsuario["id"] + 1,
    "nome" => $nome,
    "sobrenome" => $sobrenome,
    "email" => $email,
    "senha" => $senha,
    "modalidade" => $modalidade,
    "apresentacao" => $apresentacao,
    "metodologia" => $metodologia,
    "niveis" => $niveis
  ];

  array_push($arrayUsuarios["usuarios"], $novoUsuario);

  $jsonUsuarios = json_encode($arrayUsuarios);

  $cadastrou = file_put_contents("./data/usuarios.json", $jsonUsuarios);
}

?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Divulgue suas aulas online!</h1>
    <p class="lead">Cadastre o seu perfil no <strong>Dança Em Casa</strong> e conquista mais alunos para as suas aulas on-line.</p>
  </div>
</div>

<div class="container">
  <form>
    <div class="form-group col-sm-10">
      <label for="foto">Insira a sua imagem de divulgação</label>
      <input type="file" class="form-control-file" id="foto">
    </div>
  </form>

  <form>
    <div class="form-group col-sm-10">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome">
    </div>
    <div class="form-group col-sm-10">
      <label for="nome">Sobrenome</label>
      <input type="text" class="form-control" id="sobrenome">
    </div>
    <div class="form-group col-sm-10">
      <label for="email">Endereço de email</label>
      <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
    </div>
    <div class="form-group col-sm-10">
      <label for="modalidade">Modalidade</label>
      <select class="form-control" id="modalidade">
        <option>Ballet</option>
        <option>Contemporâneo</option>
        <option>Dança de Salão</option>
        <option>Dança do Ventre</option>
        <option>Funk</option>
        <option>Hip Hop/Breaking</option>
        <option>Jazz</option>
        <option>Sapateado</option>
        <option>Vídeo Dance</option>
        <option>Outros</option>
      </select>
    </div>
    <div class="form-group col-sm-10">
      <label for="apresentacao">Apresentação</label>
      <textarea class="form-control" id="apresentacao" rows="3"></textarea>
    </div>
    <div class="form-group col-sm-10">
      <label for="metodologia">Metodologia</label>
      <textarea class="form-control" id="metodologia" rows="3"></textarea>
    </div>
    <div class="form-group col-sm-6">
      <label for="niveis">Níveis</label>
      <select class="form-control" id="niveis">
        <option>Iniciante</option>
        <option>Intermediário</option>
        <option>Avançado</option>
        <option>Todos os níveis</option>
      </select>
    </div>

    <div class="form-group col-sm-6">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>
    <button type="submit" class="btn btn-primary" id="btnCadastrar">Cadastrar</button>
    <div class="form-group">
      <?php
      if (isset($_POST) && $_POST) {
        if ($cadastrou) {
          echo '<div class="col-md-6 mt-2 alert alert-success">Usuário cadastrado com sucesso</div>';
        } else {
          echo '<div class="col-md-6 mt-2 alert alert-danger">Falha ao processar requisição</div>';
        }
      }
      ?>
    </div>
  </form>
</div>




<?php require_once("./inc/footer.php"); ?>