<?php
// 1 - obtendo o conteudo do arquivo usuarios.json
$usuariosJson = file_get_contents("./data/usuarios.json");

// 2 - transformando o conteudo do arquivo usuarios.json em um array associativo
$arrayUsuarios = json_decode($usuariosJson, true);
?>
<?php $tituloPagina = "Lista de Usuários"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container" id="containerlista">
    <article class="row">
        <section class="col-12 mx-auto my-5 py-5" id="usuariosTb">
            <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
            <table class="table my-5">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Modalidade</th>
                        <th scope="col">Metodologia</th>
                        <th scope="col">Níveis</th>
                        <th scope="col" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 3 - percorrendo o array associativo da lista de usuarios -->
                    <?php foreach ($arrayUsuarios["usuarios"] as $usuario) : ?>
                        <tr>
                            <th scope="row"><?= $usuario["nome"] ?></th>
                            <td><?= $usuario["sobrenome"] ?></td>
                            <td><?= $usuario["email"] ?></td>
                            <td><?= $usuario["modalidade"] ?></td>
                            <td><?= $usuario["metodologia"] ?></td>
                            <td><?= $usuario["niveis"] ?></td>
                            <td>
                                <a href="edicaoperfil.php?id=<?= $usuario["id"] ?>">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal<?= $usuario["id"] ?>">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modal<?= $usuario["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Deseja realmente excluir ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Usuário: <?= $usuario["nome"] ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <a href="listausuario.php?id=<?= $usuario["id"] ?>">
                                                    <button type="button" class="btn btn-danger">Excluir</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </article>
</main>
<?php require_once("./inc/footer.php"); ?>