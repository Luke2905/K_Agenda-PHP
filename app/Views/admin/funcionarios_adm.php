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

<div class="container_func">
    
<?php 

foreach($profissionais as $row){

    echo "<div class='card'>";
    echo "<div class='CardImagem'>";
    echo "<img  src='".$row['foto_pro']."'alt=''>";
    echo "</div>";
    echo "<h3>".$row['nome_pro']."</h3>";
    echo "<h4>".$row['telefone_pro']."</h4>";
    echo "<form action='/Profissional/delProfissional'' method='post'>";
	echo "<button name='deletePro' type='submit' value='".$row['id_pro']."'>Deletar</button>";
    echo "</form>";
    echo "<a class='a_adm' href=''>❌</a>";
    echo "<a class='a_adm' href=''>✏️</a>";
    echo "</div>";


}

?>
</div>

</div>

<div class="container_func">
    <div class='card'>
        <div class='CardImagem'>
            <a class="adicionar" href="/Profissional/cadPro"><img  src='https://cdn-icons-png.flaticon.com/512/32/32339.png' alt=''></a>
        </div>
            <h3>Adicionar Novo Funcionario</h3>
            <a href='/Profissional/cadPro'>Adicionar</a>
    </div>
</div>

<?php $this->endSection(); ?>