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
    <input value='<?php echo $servicos['id_serv'];?>' type="number" placeholder="codigo" name="id" readonly>
        <div class='CardImagem'>
            <img  src='<?php echo $servicos['foto_serv'];?>' alt=''>
        </div>
            <input value='<?php echo $servicos['foto_serv'];?>' type="text" name="url"placeholder="Foto Profissional">
            <input value='<?php echo $servicos['nome_serv'];?>' type="text" name="nome" placeholder="Nome Profissional">
            <input value='<?php echo $servicos['preco_serv'];?>' type="phone" name="nome"placeholder="Numero Telefone">
            <input value='<?php echo $servicos['descriçao_serv'];?>' type="phone" name="text"placeholder="Numero Telefone">
            <button  type="submit" class="a_adm" >Salvar</button>
    </div>
</div>
</form>

<?php $this->endSection(); ?>