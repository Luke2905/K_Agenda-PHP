<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Menu_Serv");?>
<h1 class="titulo">Tela de Administração dos Cortes e Serviços</h1>
<div class="menu_adm">
    <div id="item1" class="btn-group">
    <a href="/Servico/cadServ" class="btn  btn-warning active" aria-current="page">Cadastrar</a>
    </div>
    <div id="item2" class="btn-group">
    <a href="/Servico/delServ" class="btn btn-dark active" aria-current="page">Deletar</a>
    </div>
    <div id="item3" class="btn-group">
    <a href="/Servico/selectServ" class="btn btn-warning active" aria-current="page">Alterar</a>
    </div>
    <div id="item4" class="btn-group">
    <a href="/Servico/index" class="btn btn-dark active" aria-current="page">Ver</a>
    </div>
</div>

<?php $this->endSection(); ?>