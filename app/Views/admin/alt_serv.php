<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Alterar_Servico");?>

<h1 class="titulo" >Dados do Agendamento</h1>
<form id="altForm" action="/Agendamento/confirmarAgendamento" method="post" >
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="inputEmail4">Cod. Agendamento</label>
      <input value='<?php foreach($servicos->getResult('array') as $row){ echo $row['id_agend'];} ?>' type="number" class="form-control" id="inputEmail4" placeholder="codigo" name="id" readonly>
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Nome</label>
    <input value='<?php foreach($servicos->getResult('array') as $row){ echo $row['nome_agend'];} ?>' type="text" class="form-control" id="inputAddress" placeholder="nome" name="nome" readonly>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Nome do Profissional</label>
    <input value='<?php foreach($servicos->getResult('array') as $row){ echo $row['nome_pro'];} ?>' type="text" class="form-control" id="inputAddress2" placeholder="name" name="profissional" readonly>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Email do Cliente</label>
    <input value='<?php foreach($servicos->getResult('array') as $row){ echo $row['email_agend'];} ?>' type="text" class="form-control" id="inputAddress2" placeholder="name" name="email" readonly>
</div>
<div class="form-group col-md-6">
    <label for="inputAddress2">Data do Agendamento</label>
    <input value='<?php foreach($servicos->getResult('array') as $row){ echo $row['data_agend'];} ?>' type="text" class="form-control" id="inputAddress2" placeholder="name" name="data" readonly>
</div>
<div class="form-group col-md-6">
    <label for="inputAddress2">Hora do Agendamento</label>
    <input value='<?php foreach($servicos->getResult('array') as $row){ echo $row['hora_agend'];} ?>' type="text" class="form-control" id="inputAddress2" placeholder="name" name="hora" readonly>
</div>

  <button  type="submit" class="btn btn-primary" >Confirmar</button>
</form><br>
<a href="/Agendamento/selectAgendamento" ><button   class="btn btn-primary" >voltar</button></a>




<?php $this->endSection(); ?>