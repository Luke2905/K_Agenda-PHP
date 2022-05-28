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
    echo "<p>".$row['descriçao_serv']."</p>";
    echo "</div>";
}

?>
</div>
<?php $this->endSection(); ?>
