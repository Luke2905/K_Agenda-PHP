<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Selecionar_Serv");?>

<a style="margin:10px;" class="btn btn-warning" href="/Admin/menuServ" role="button">Voltar</a>

<h1 class="titulo" >Selecionar Serviço ou Corte</h1><br>

<div class="select_pro">
<form action="/Servico/altServ" method="post">
<select id="sel_pro"class="form-select bg-light text-dark" size="5" aria-label="size 5 select example" name="id">
  <?php foreach($servicos as $row){

echo "<option  class='p-3 mb-2 bg-light text-dark' value='".$row['id_serv']."'>".$row['nome_serv']."</option>";
}
?>
</select>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form><br>

</div>

<?php $this->endSection(); ?>