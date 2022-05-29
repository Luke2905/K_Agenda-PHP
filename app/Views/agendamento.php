<?php $this->extend("layout_padrao");?>

<?php $this->section("agendamento");?>

<?php
$mindate = date("d-m-Y");
$mintime = date("h:i");
$min = $mindate."T".$mintime;
?>

<div class="container_agendamento">
  <form action="/Agendamento/cadAgendamento" method="POST">
    <div class="row">
      <h4>Conta</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Nome Completo" name="nome" required/>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="email" name="email" required/>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Data Agendamento</h4>
        <div class="input-group">
        <input type="datetime-local" id="datePickerId" name="agendamento" min="<?php echo $min ?>" required>
        </div>
      </div>
      <div class="col-half">
        <h4>Genero do Corte</h4>
        <div class="input-group">
          <input id="gender-male" type="radio" name="gender" value="male"/>
          <label for="gender-male">Masculino - 30R$</label>
          <input id="gender-female" type="radio" name="gender" value="female"/>
          <label for="gender-female">Feminino - 60R$</label>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Select de Profissionais -->
    <select class="form-select bg-light text-dark"  aria-label="Default select example" name="id">
  <?php foreach($profissionais as $row){

echo "<option  class='p-3 mb-2 bg-light text-dark' value='".$row['id_pro']."'>".$row['nome_pro']."</option>";
}
?>
</select>
  <!--Fim Select de Profissionais -->
    </div><br>
    <div class="row">
      <h4>Adicionais</h4>
      <div class="input-group input-group-icon">
        <input type="checkbox" id="sobrancelha" name="interest" value="sobrancelha">
        <label for="sobrancelha">Sobrancelha - 5R$</label>
        <input type="checkbox" id="risco" name="interest" value="risco">
        <label for="risco">Risco no Cabelo - 5R$</label>
        <input type="checkbox" id="barba" name="interest" value="barba">
        <label for="barba">Barba - 10R$</label>
        <input type="checkbox" id="mecha" name="interest" value="mecha">
        <label for="mecha">Pintura de Mechas - 50R$</label>
        <input type="checkbox" id="pintura" name="interest" value="pintura">
        <label for="pintura">Pintura de Cabelo - 125R$</label>
      </div>
    </div>
    <div class="row">
      <h4>Termos e Condições</h4>
      <div class="input-group">
        <input id="terms" type="checkbox" required />
        <label for="terms">Eu aceito receber uma mensagem de texto no WhatsApp confirmando o agendamento.</label>
      </div>
    </div>

    <input type="submit" value="Agendar">
  </form>
</div>

<?php $this->endSection(); ?>