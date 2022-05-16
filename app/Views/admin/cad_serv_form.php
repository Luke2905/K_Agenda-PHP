<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Cadastro_Servico");?>

<style>
    .card-body{
        border-style:  solid;
        border-width: 2px;
    }
</style>
<h2 class="h2titulo">Cadastro de Serviços</h2>
<div class="cadjg">
<form class="row g-3" method="POST" action="/Servico/cadServico">

<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Nome</label>
    <input id="jg" type="text" required="required"  name="nome" placeholder="NOME">
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Preço</label>
    <input id="jg" type="decimal" min="0" required="required"  name="preco" placeholder="Preco">  
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">URL</label>
    <input id="jg"  type="url" required="required"  name="url" placeholder="URL da imagem">
</div>
<div class="col-sm-3">
  <button type="submit" id="a01" class="btn btn-danger" value="cadastrar" name="botao">Cadastrar</button>
</div>
</form>
</div>

<a style="color:black;" href="/Admin/menuServ">Voltar</a>

<span class="placeholder col-12"></span>


<?php $this->endSection(); ?>