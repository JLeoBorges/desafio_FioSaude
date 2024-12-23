<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Novo Funcionário</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="addnew.php">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Nome
                                    Funcionário:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="nome">
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">CPF:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="cpf">
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Salário:</label>
                            </div>

                            <div class="col-lg-10">


                                <select style="text-transform:uppercase" name="salario" class="form-control input cUf">
                                    <option>...</option>
                                    <?php
                                    $valor = mysqli_query($conn, "select * from salarios");
                                    $erow = mysqli_fetch_array($valor); ?>
                                    <?php foreach ($valor as $salario): ?>

                                        <option value="<?= $salario['id'] ?>"><?= $salario['salario']; ?></option>
                                    <?php endforeach; ?>
                                </select>


                            </div>
                            <div style="height:10px;"></div>

                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="control-label" style="position:relative; top:7px;">Alocação de Projeto:</label>
                                </div>
                                <div class="col-lg-10">
                                <select style="text-transform:uppercase" name="projeto_id" class="form-control input cUf">
                                    <option>...</option>
                                    <?php
                                    $valor = mysqli_query($conn, "select * from projetos");
                                    $erow = mysqli_fetch_array($valor); ?>
                                    <?php foreach ($valor as $projeto): ?>

                                        <option value="<?= $projeto['id'] ?>"><?= $projeto['nome']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                            </div>
                            <div style="height:10px;"></div>

                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="control-label" style="position:relative; top:7px;">Alocação de Departamento:</label>
                                </div>
                                <div class="col-lg-10">
                                <select style="text-transform:uppercase" name="departamento_id" class="form-control input cUf">
                                    <option>...</option>
                                    <?php
                                    $valor = mysqli_query($conn, "select * from departamentos");
                                    $erow = mysqli_fetch_array($valor); ?>
                                    <?php foreach ($valor as $departamento): ?>

                                        <option value="<?= $departamento['id'] ?>"><?= $departamento['nome']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                            </div>
                            <div style="height:10px;"></div>

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>
                        Salvar</a>
                        </form>
                </div>

            </div>
        </div>
    </div>