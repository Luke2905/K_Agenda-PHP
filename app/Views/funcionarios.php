<?php $this->extend("layout_padrao");?>

<?php $this->section("funcionarios");?>

<div class="container_func">
    
<?php 

foreach($profissionais as $row){

    echo "<div class='card'>";
    echo "<div class='CardImagem'>";
    echo "<img  src=".$row['foto_pro']."alt=''>";
    echo "</div>";
    echo "<h3>".$row['nome_pro']."</h3>";
    echo "<h4>".$row['telefone_pro']."</h4>";
    echo "<a href=''>Agendar</a>";
    echo "</div>";


}

?>
</div>

<?php $this->endSection(); ?>