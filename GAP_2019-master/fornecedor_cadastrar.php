<?php
$page = 'novo_fornecedor';
require('header.php');
?>

<!--Formulário-->
<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 display-4 titulo>Cadastrar Fornecedor</h2>
            </div>
        </div>
        <hr>
        <form action="fornecedor_include.php" method="GET">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label><span class="text-danger">*</span> Código</label>
                    <input name="id_fornecedor" type="text" class="form-control" id="idFornecedor" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label><span class="text-danger">*</span> Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" placeholder="nome" required>
                </div>
                <div class="form-group col-md-4">
                    <label>CNPJ</label>
                    <input name="cnpjFornecedor" type="text" class="form-control" id="cnpjFornecedor"
                        placeholder="cnpjFornecedor">

                </div>
            </div>

            <p>
    </div>

    </p>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>
</div>
</div>
</div>
<!-- Modal para confirmar a exclusão de um registo-->
<div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistro"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Excluir item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir o item selecionado?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Apagar</button>
            </div>
        </div>
    </div>
</div>
<?php
    require('footer.php');
?>