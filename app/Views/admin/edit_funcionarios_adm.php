<?php $this->extend("layout_padrao");?>

<?php $this->section("funcionarios");?>

<section class="pesquisa">
    <div class="center">
        <form action="/Profissional/pesquisarPro" method="post">
            <h2>Busque nossos funcionarios</h2>
            <input type="text" name="search" placeholder="Insira a pesquisa">
            <input type="submit" value="pesquisar">
        </form>
    </div>
</section>

<div class="edit_container_func">
    <div class='card'>
        <div class='CardImagem'>
            <img  src='https://cdn-icons-png.flaticon.com/512/32/32339.png' alt=''>
        </div>
            <input placeholder="Foto Profissional">
            <input placeholder="Nome Profissional">
            <input placeholder="Numero Telefone">
            <a href=''>Editar</a>
    </div>
</div>

<?php $this->endSection(); ?>