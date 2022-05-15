<?php $this->extend("agendamento");?>

<?php $this->section("servicos");?>

<div class="container_func">
    
<?php 

foreach($agendamento as $row){

   
    echo "<h3>".$row['nome_serv']."</h3>";
    echo "<h4>".$row['foto_serv']."</h4>";
    echo "<h4>".$row['preco_serv']."</h4>";

    echo "<a href=''>Agendar</a>";
    echo "</div>";


}

?>
</div>

<?php $this->endSection(); ?>