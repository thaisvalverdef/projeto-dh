<?php $tituloPagina = "Lista de Categorias"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container" id="containerlista">
    <article class="row" style="padding-bottom:95px">
        <section class="col-11 mx-auto my-5 py-5" id="usuariosTb">
            <h3 class="col-11 text-center my-2"><?= $tituloPagina ?></h3>
            <table class="table my-5">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Modalidades</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col" style="text-align:right";>Excluir</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>            
                        <td style="text-align:right";>
                            <a href="#" data-toggle="modal" data-target="#modal">
                                <i class="fas fa-trash"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="modal"> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Deseja realmente excluir ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="text-align:left";>
                                            <p>Modalidade:</p>
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
                </tbody>
            </table>
        </section>
    </article>
</main>
<?php require_once("./inc/footer.php"); ?>