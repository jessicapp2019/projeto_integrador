<?php
$page = 'novo_produto';
require('header.php');
?>
<!--Formulário-->
<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 display-4 titulo>Cadastrar Produto</h2>
            </div>
        </div>
        <hr>
        <form action="produto_include.php" method="GET">
            <div class="form-row">

            </div>
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label> ID</label>
                    <input class="form-control" type="number" disabled name="id_produto" id="">
                </div>
                <div class="form-group col-md-4">
                    <label><span class="text-danger">*</span>Nome do produto</label>
                    <input class="form-control" type="text" name="nome" id="" placeholder="Digite o nome do produto"
                        required>
                </div>
                <div class="form-group col-md-7">
                    <label><span class="text-danger">*</span> Descrição do produto</label>
                    <input class="form-control" type="text" name="descricao" id=""
                        placeholder="Digite uma descrição do produto" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label>Categoria</label>
                    <select name="categoria" id="categoria" class="form-control">
                        <option selected>*Selecione*</option>
                        <option value="1">Categoria 1</option>
                        <option value="2">Categoria 2</option>
                        <option value="2">Categoria 3</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label><span class="text-danger">*</span> Tipo</label>
                    <select class="form-control" name="tipo" id="" required>
                        <option selected>*Selecione*</option>
                        <option value="1">Simples</option>
                        <option value="2">Composto</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label><span class="text-danger">*</span> Unidade de medida</label>
                    <select class="form-control" name="unidade_medida" id="" required>
                        <option selected>*Selecione*</option>
                        <option value="1">Unidade</option>
                        <option value="2">KG</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label><span class="text-danger">*</span> Preço de Venda</label>
                    <input class="form-control" type="text" name="preco" id="" placeholder="R$:1,99" required>
                </div>
                <div class="form-group col-md-2">
                    <label>
                        <span class="text-danger">*</span> Preço de custo</label>
                    <input class="form-control" type="text" name="custo" id="" placeholder="R$:1,99" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label>Situação</label>
                    <select name="sistuacao" id="situacao" class="form-control">
                        <option selected>*Selecione*</option>
                        <option value="1">ativo </option>
                        <option value="2">inativo</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>
                        <span class="text-danger">*</span>Código EAN</label>
                    <input class="form-control" type="text" name="cod_ean" id="" placeholder="" required>
                </div>
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