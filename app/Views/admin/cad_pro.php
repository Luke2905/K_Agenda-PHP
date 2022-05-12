
<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Cadastro");?>

<form action="/Profissional/cadProfissional" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="senha" name="senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nome</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="nome" name="nome">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Foto</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="URL" name="url">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">telefone</label>
      <input type="phone" class="form-control" id="inputCity" name="telefone">
    </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php $this->endSection(); ?>