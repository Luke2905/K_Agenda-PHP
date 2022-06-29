<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Ver_Serv");?>

<div class="container">

<?php 

foreach($servicos as $row){

    echo " <div class='card'>";
    echo "<div class='CardImagem'>";
    echo "<img  src='".$row['foto_serv']."'alt=''>";
    echo "</div>";
    echo "<h3>".$row['nome_serv']."</h3>";
    echo "<h4>R$ ".$row['preco_serv']."</h4>";
    echo "<p>".$row['descriçao_serv']."</p>";
    echo "<form action='/Servico/delServico' method='post'>";
	echo "<button class='a_adm' name='id' type='submit' value='".$row['id_serv']."'>❌</button>";
    echo "</form>";
    echo "<form action='/Servico/altServ' method='post'>";
	echo "<button class='a_adm' name='id' type='submit' value='".$row['id_serv']."'>✏️</button>";
    echo "</form>";
    echo "</div>";
}

?>

<div class='card'>
    <div class='CardImagem'>
        <a class="adicionar" href="/Servico/cadServ"><img  src='https://cdn-icons-png.flaticon.com/512/32/32339.png' alt=''></a>
    </div>
    <h3>Adicionar na Galeria</h3>
    <a href='/Servico/cadServ'>Adicionar</a>
</div>

</div>
<?php $this->endSection(); ?>
