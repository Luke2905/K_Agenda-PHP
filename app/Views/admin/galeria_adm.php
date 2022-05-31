<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Ver_Sev");?>

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
    echo "<form action='/Profissional/altPro' method='post'>";
	echo "<button class='a_adm' name='id' type='submit' value='".$row['id_serv']."'>✏️</button>";
    echo "</form>";
    echo "</div>";
}

?>
</div>
<?php $this->endSection(); ?>
