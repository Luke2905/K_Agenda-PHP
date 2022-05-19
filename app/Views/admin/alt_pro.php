<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Alterar");?>

<h1 class="titulo" >Dados do Profissional</h1>
<form id="altForm" action="/Profissional/altProfissional" method="post" >
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="inputEmail4">Cod. Profissional</label>
      <input value='<?php echo $profissionais['id_pro'];?>' type="number" class="form-control" id="inputEmail4" placeholder="codigo" name="id" readonly>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Nome</label>
    <input value='<?php echo $profissionais['nome_pro'];?>' type="text" class="form-control" id="inputAddress" placeholder="nome" name="nome">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Foto</label>
    <input value='<?php echo $profissionais['foto_pro'];?>' type="text" class="form-control" id="inputAddress2" placeholder="URL" name="url">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">telefone</label>
      <input value='<?php echo $profissionais['telefone_pro'];?>' type="phone" class="form-control" id="inputCity" name="telefone">
    </div>

  <button  type="submit" class="btn btn-primary" >Salvar</button>
</form><br>

<a style="color:black;" href="/Profissional/selectPro">Voltar</a>

<?php $this->endSection(); ?>