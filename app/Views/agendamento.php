<?php $this->extend("layout_padrao");?>

<?php $this->section("agendamento");?>

<?php
$mindate = date("d-m-Y");
$mintime = date("h:i");
$min = $mindate."T".$mintime;
?><button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Por quê preciso colocar meus dados pessoais?" data-content="Política Privacidade                    
A sua privacidade é importante para nós. É política do King Agendamentos respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site King Agendamentos, e outros sites que possuímos e operamos.                    
Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.                                        
Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou                        
modificação não autorizados.                    
Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.                    O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas políticas de privacidade.                                        Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.                    O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de Aviso de Privacidad e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.                                        Compromisso do Usuário                                O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o King Agendamentos oferece no site e com caráter enunciativo, mas não limitativo:                                                                A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;                        B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, Onde Bola ou azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;                        C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do King Agendamentos, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.                                                            Mais informações                    Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.                    
Esta política é efetiva a partir de Junho/2022.">Dúvida?</button>  
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
        <input type="date" id="datePickerId" name="dia" required>
        <input type="time" id="datePickerId" name="hora" min="<?php echo $min ?>" required>
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