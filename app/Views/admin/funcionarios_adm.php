<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Ver_Pro");?>

<section class="pesquisa">
    <div class="center">
        <form action="/Profissional/pesquisarPro" method="post">
            <h2>Busque nossos funcionarios</h2>
            <input type="text" name="search" placeholder="Insira a pesquisa">
            <input type="submit" value="pesquisar">
        </form>
    </div>
</section>

<a style="margin:10px;" class="btn btn-warning" href="/Admin/menuPro" role="button">Voltar</a>
<div class="container_func">
    
<?php 

foreach($profissionais as $row){

    echo "<div class='card'>";
    echo "<div class='buttons_adm'>";
    echo "<a href=''>❌</a>";
    echo "<a href=''>✏️</a>";
    echo "</div>";
    echo "<div class='CardImagem'>";
    echo "<img  src='".$row['foto_pro']."'alt=''>";
    echo "</div>";
    echo "<h3>".$row['nome_pro']."</h3>";
    echo "<h4>".$row['telefone_pro']."</h4>";
    echo "<a href=''>Agendar</a>";
    echo "</div>";

}

?>
</div>

<div class="container_func">
    <div class='card'>
        <div class='CardImagem'>
            <img  src='https://cdn-icons-png.flaticon.com/512/32/32339.png' alt=''>
        </div>
            <h3>"Adicionar Novo Funcionario"</h3>
            <a href=''>Adicionar</a>
    </div>
</div>

<?php $this->endSection(); ?>