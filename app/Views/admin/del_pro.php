<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Deletar");?>

<form action="/Profissional/delProfissional" method="post">

<select class="form-select" aria-label="Default select example" name="id">
<?php foreach($profissionais as $row){

    echo "<option value='".$row['id_pro']."'>".$row['nome_pro']."</option>";
}
?>
</select>
  <button type="submit" class="btn btn-primary">Deletar</button>
</form>

<?php $this->endSection(); ?>