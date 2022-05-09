<?php $this->extend("layout_padrao");?>

<?php $this->section("funcionarios");?>

<div class="container_func">
    
<?php 
    $model = model('LoginModel');
    $dados = $model ->find();

foreach($dados as $row){

    echo "<div class='card'>";
    echo "<div class='CardImagem'>";
    echo "<img  src='https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-a.jpg' alt=''>";
    echo "</div>";
    echo "<h3>".$row['nome']."</h3>";
    echo "<h4>".$row['email']."</h4>";
    echo "<a href=''>Agendar</a>";
    echo "</div>";


}

?>
</div>

<?php $this->endSection(); ?>