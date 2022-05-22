<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Alterar_Servico");?>

<h1 class="titulo" >Dados do Serviço</h1>
<form id="altForm" action="/Servico/altServico" method="post" >
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="inputEmail4">Cod. Servviço</label>
      <input value='<?php echo $servicos['id_serv'];?>' type="number" class="form-control" id="inputEmail4" placeholder="codigo" name="id" readonly>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Nome</label>
    <input value='<?php echo $servicos['nome_serv'];?>' type="text" class="form-control" id="inputAddress" placeholder="nome" name="nome">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Foto</label>
    <input value='<?php echo $servicos['foto_serv'];?>' type="text" class="form-control" id="inputAddress2" placeholder="URL" name="url">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Preço</label>
      <input value='<?php echo $servicos['preco_serv'];?>' type="number" class="form-control" id="inputCity" name="Preco">
    </div>

  <button  type="submit" class="btn btn-primary" >Salvar</button>
</form><br>

<a style="color:black;" href="/Profissional/selectPro">Voltar</a>

<?php $this->endSection(); ?>