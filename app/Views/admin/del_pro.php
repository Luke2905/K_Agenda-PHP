<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Deletar");?>

<h1 class="titulo" >Deletar Profissional</h1>

<form action="/Profissional/delProfissional" method="post">

<select class="form-select" aria-label="Default select example" name="id">
<?php foreach($profissionais as $row){

    echo "<option value='".$row['id_pro']."'>".$row['nome_pro']."</option>";
}
?>
</select>
  <button type="submit" class="btn btn-primary">Deletar</button>
</form><br>

<a style="color:black;" href="/Admin/menuPro">Voltar</a>

<?php $this->endSection(); ?>