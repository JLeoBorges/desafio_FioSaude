<!-- Delete -->
<div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Delete</h4>
                </center>
            </div>
            <div class="modal-body">
                <?php
                $del = mysqli_query($conn, "select * from funcionarios where id='" . $row['id'] . "'");
                $drow = mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h5>
                        <center>Você têm certeza que quer excluir <strong><?php echo ucwords($drow['nome']); ?></strong>
                            da lista? isso não poderá ser desfeito.</center>
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Deletar</a>
            </div>

        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit</h4>
                </center>
            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "select * from funcionarios where id='" . $row['id'] . "'");
                $erow = mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">nome:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="nome" class="form-control"
                                    value="<?php echo $erow['nome']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">CPF:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="cpf" value="<?php echo $erow['cpf']; ?>">
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
                                    //$erow = mysqli_fetch_array($valor); ?>
                                    <?php foreach ($valor as $salario):
                                        if ($salario['id'] == $erow['salario_id']) { ?>
                                            <option value="<?= $salario['id'] ?>" selected><?= $salario['salario']; ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $salario['id'] ?>"><?= $salario['salario']; ?></option>
                                        <?php }endforeach; ?>

                                </select>


                            </div>
                            <div style="height:10px;"></div>

                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="control-label" style="position:relative; top:7px;">Alocação de
                                        Projeto:</label>
                                </div>
                                <div class="col-lg-10">
                                    <select style="text-transform:uppercase" name="projeto_id"
                                        class="form-control input cUf">
                                        <option>...</option>
                                        <?php
                                        $valor = mysqli_query($conn, "select * from projetos");
                                        //$erow = mysqli_fetch_array($valor); ?>
                                        <?php foreach ($valor as $projeto): 
                                            if ($projeto['id'] == $erow['projeto_id']) { ?>
                                            <option value="<?= $projeto['id'] ?>" selected><?= $projeto['nome']; ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $projeto['id'] ?>"><?= $projeto['nome']; ?></option>
                                        <?php }endforeach; ?>

                                        
                                    </select>
                                </div>
                            </div>
                            <div style="height:10px;"></div>

                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="control-label" style="position:relative; top:7px;">Alocação de
                                        Departamento:</label>
                                </div>
                                <div class="col-lg-10">
                                    <select style="text-transform:uppercase" name="departamento_id"
                                        class="form-control input cUf">
                                        <option>...</option>
                                        <?php
                                        $valor = mysqli_query($conn, "select * from departamentos");
                                        //$erow = mysqli_fetch_array($valor); ?>
                                        <?php foreach ($valor as $departamento): 
                                            if ($departamento['id'] == $erow['departamento_id']) { ?>
                                            <option value="<?= $departamento['id'] ?>" selected><?= $departamento['nome']; ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $departamento['id'] ?>"><?= $departamento['nome']; ?></option>
                                        <?php }endforeach; ?>
                                            
                                    </select>
                                </div>
                            </div>
                            <div style="height:10px;"></div>

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span>
                        Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal -->