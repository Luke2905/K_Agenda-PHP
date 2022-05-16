<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Deletar_Servico");?>

<h1 class="titulo" >Deletar Serviço/Corte</h1>

<form action="/Servico/delServico" method="post">

<select class="form-select" aria-label="Default select example" name="id">
<?php foreach($servicos as $row){

    echo "<option value='".$row['id_serv']."'>".$row['nome_serv']."</option>";
}
?>
</select>
  <button type="submit" class="btn btn-primary">Deletar</button>
</form><br>

<a style="color:black;" href="/Admin/menuServ">Voltar</a>

<?php $this->endSection(); ?>