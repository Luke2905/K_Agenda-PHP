<?php $this->extend("layout_padrao");?>

<?php $this->section("galeria");?>

<div class="container">

<?php 

foreach($servicos as $row){

    echo " <div class='card'>";
    echo "<div class='CardImagem'>";
    echo "<img  src='".$row['foto_serv']."'alt=''>";
    echo "</div>";
    echo "<h3>".$row['nome_serv']."</h3>";
    echo "<h4>R$ ".$row['preco_serv']."</h4>";
    echo "<p>Corte chave de mais confia</p>";
    echo "</div>";


}

?>
</div>
<?php $this->endSection(); ?>

<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Servicos");?>

<div class="container">
    
<?php 

foreach($servicos as $row){

    echo " <div class='card'>";
    echo "<div class='CardImagem'>";
    echo "<img  src='".$row['foto_serv']."'alt=''>";
    echo "</div>";
    echo "<h3>".$row['nome_serv']."</h3>";
    echo "<h4>R$ ".$row['preco_serv']."</h4>";
    echo "<p>Corte chave de mais confia</p>";
    echo "</div>";


}

?>
</div>

<a style="color:black;" href="/Admin/menuServ">Voltar</a>
<?php $this->endSection(); ?>