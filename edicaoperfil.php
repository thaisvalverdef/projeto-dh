<?php require_once("./inc/header.php"); ?>
<?php require_once("./inc/head.php"); ?>



<!-- <div class="edite">
    Página de edição do perfil
</div> -->


<header class="bg-danger text-white">
    <div class="container text-center">
      <h3>Página da edição do perfil</h3>
      <p class="lead"> </p>
    </div>
  </header>

<div class="container" id="containeredicao">

    <form>
        <div class="form-group col-sm-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome">
        </div>
        <div class="form-group col-sm-9">
            <label for="nome">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome">
        </div>
        <div class="form-group col-sm-9">
            <label for="email">Endereço de email</label>
            <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
        </div>
        <br>
        <div class="form-group col-sm-9">
            <label for="apresentacao">Edite seu texto de apresentação</label>
            <textarea class="form-control" id="apresentacao" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group col-sm-9">
            <label for="metodologia">Adicione ou exclua as suas metodologias de ensino</label>
            <textarea class="form-control" id="metodologia" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group col-sm-6">
            <label for="modalidade">Adicione ou exclua suas modalidades</label>
            <div>
                <input type="checkbox" id="ballet" name="ballet" checked>
                <label for="scales">Ballet</label>
            </div>
            <div>
                <input type="checkbox" id="contemporaneo" name="contemporaneo">
                <label for="horns">Contemporâneo</label>
            </div>
            <div>
                <input type="checkbox" id="salao" name="salao">
                <label for="horns">Dança de Salão</label>
            </div>
            <div>
                <input type="checkbox" id="ventre" name="ventre">
                <label for="horns">Dança do Ventre</label>
            </div>
            <div>
                <input type="checkbox" id="funk" name="funk">
                <label for="horns">Funk</label>
            </div>
            <div>
                <input type="checkbox" id="break" name="break">
                <label for="horns">Hip Hop / Break</label>
            </div>
            <div>
                <input type="checkbox" id="jazz" name="jazz">
                <label for="horns">Jazz</label>
            </div>
            <div>
                <input type="checkbox" id="sapateado" name="sapateado">
                <label for="horns">Sapateado</label>
            </div>
            <div>
                <input type="checkbox" id="sertanejo" name="sertanejo">
                <label for="horns">Sertanejo</label>
            </div>
            <div>
                <input type="checkbox" id="outros" name="outros">
                <label for="horns">Outros</label>
            </div>
        </div>
        <div class="form-group col-sm-6">
            <label for="niveis">Altere o nível das suas aulas</label>
            <select class="form-control" id="niveis">
                <option>Iniciante</option>
                <option>Intermediário</option>
                <option>Avançado</option>
                <option>Todos os níveis</option>
            </select>
        </div>


        <div class="form-group col-sm-6">
            <label for="senha">Nova Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <br>
        <form>
            <div class="form-group col-sm-10">
                <label for="foto">Altere suas imagens de divulgação (Dimensões recomendadas: 285x175) </label>
                <input type="file" class="form-control-file" id="foto">
            </div>
        </form>
        <br>

        <button type="submit" class="btn" id="btnConfirmar" style="margin-left: 10px; margin-bottom:40px">Confirmar</button>
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