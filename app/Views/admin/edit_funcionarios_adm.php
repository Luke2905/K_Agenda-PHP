<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Alterar_pro");?>

<!-- <section class="pesquisa">
    <div class="center">
        <form action="/Profissional/pesquisarPro" method="post">
            <h2>Busque nossos funcionarios</h2>
            <input type="text" name="search" placeholder="Insira a pesquisa">
            <input type="submit" value="pesquisar">
        </form>
    </div>
</section> -->
<h1 class="titulo" >Dados do Profissional</h1>
<a style="margin:10px;" class="btn btn-warning" href="/Profissional/selectPro" role="button">Voltar</a>
<form  action="/Profissional/altProfissional" method="post">
    <div class="edit_container_func">
    <div class='card'>
    <input value='<?php echo $profissionais['id_pro'];?>' type="number" placeholder="codigo" name="id" readonly>
        <div class='CardImagem'>
            <img  src='<?php echo $profissionais['foto_pro'];?>' alt=''>
        </div>
            <input value='<?php echo $profissionais['foto_pro'];?>' type="text" name="url"placeholder="Foto Profissional">
            <input value='<?php echo $profissionais['nome_pro'];?>' type="text" name="nome" placeholder="Nome Profissional">
            <input value='<?php echo $profissionais['telefone_pro'];?>' type="phone" name="telefone"placeholder="Numero Telefone">
            <button  type="submit" class="a_adm" >Salvar</button>
    </div>
</div>
</form>

<?php $this->endSection(); ?>