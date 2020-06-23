<?php require_once("./inc/header.php"); ?>
<?php require_once("./inc/head.php"); ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Divulgue suas aulas online!</h1>
    <p class="lead">Cadastre o seu perfil no <strong>Dança Em Casa</strong> e conquista mais alunos para as suas aulas on-line.</p>
  </div>
</div>

<div class="container">
  <form>
    <div class="form-group">
      <label for="foto">Insira a sua imagem de divulgação</label>
      <input type="file" class="form-control-file" id="foto">
    </div>
  </form>

  <form>
    <div class="form-group">
      <label for="nome">Nome completo</label>
      <input type="email" class="form-control" id="nome">
    </div>
    <div class="form-group">
      <label for="email">Endereço de email</label>
      <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
    </div>
    <div class="form-group">
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
    <div class="form-group">
      <label for="apresentacao">Apresentação</label>
      <textarea class="form-control" id="apresentacao" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="metodologia">Metodologia</label>
      <textarea class="form-control" id="metodologia" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="niveis">Níveis</label>
      <select class="form-control" id="niveis">
        <option>Iniciante</option>
        <option>Intermediário</option>
        <option>Avançado</option>
        <option>Todos os níveis</option>
    </div>
</div>
</form>
</br>
<div class="container">
  <input class="btn-primary" type="submit" value="Submit">
</div>
</div>

<?php require_once("./inc/footer.php"); ?>