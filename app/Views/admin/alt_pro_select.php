<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Selecionar_Pro");?>

<h1 class="titulo" >Selecionar Profissional</h1>

<form action="/Profissional/altPro" method="post">

<select class="form-select" aria-label="Default select example" name="id">
<?php foreach($profissionais as $row){

    echo "<option value='".$row['id_pro']."'>".$row['nome_pro']."</option>";
}
?>
</select>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form><br>

<a style="color:black;" href="/Admin/menuPro">Voltar</a>

<?php $this->endSection(); ?>