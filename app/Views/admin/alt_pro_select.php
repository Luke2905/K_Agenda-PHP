<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Selecionar_Pro");?>

<a style="margin:10px;" class="btn btn-warning" href="/Admin/menuPro" role="button">Voltar</a>

<h1 class="titulo" >Selecionar Profissional</h1><br>

<div class="select_pro">
<form action="/Profissional/altPro" method="post">
<select id="sel_pro"class="form-select bg-light text-dark" size="5" aria-label="size 5 select example" name="id">
  <?php foreach($profissionais as $row){

echo "<option  class='p-3 mb-2 bg-light text-dark' value='".$row['id_pro']."'>".$row['nome_pro']."</option>";
}
?>
</select>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form><br>

</div>

<?php $this->endSection(); ?>