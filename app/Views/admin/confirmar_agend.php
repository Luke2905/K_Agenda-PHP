<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Selecionar_Agend");?>

<a style="margin:10px;" class="btn btn-warning" href="/Admin/menuServ" role="button">Voltar</a>

<h1 class="titulo" >Confirmar Agendamentos</h1><br>

<div class="select_pro">
<form action="/Agendamento/confirmarAgendamento" method="post">
<select id="sel_pro"class="form-select bg-light text-dark" size="5" aria-label="size 5 select example" name="id">
  <?php foreach($servicos as $row){

echo "<option  class='p-3 mb-2 bg-light text-dark' value='".$row['id_agend']."'>".$row['nome_agend']."</option>";
}
?>
</select>
  <button type="submit" name="Confirmar" class="btn btn-primary">Confirmar</button>
</form><br>

</div>

<?php $this->endSection(); ?>