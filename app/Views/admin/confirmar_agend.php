<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Selecionar_Agend");?>

<a style="margin:10px;" class="btn btn-warning" href="/Admin/menuServ" role="button">Voltar</a>

<h1 class="titulo" >Confirmar Agendamento</h1><br>

<div class="select_pro">
<form action="/Agendamento/confirmarAgendamento" method="post">
<select id="sel_pro"class="form-select bg-light text-dark" size="5" aria-label="size 5 select example" name="id">
  <?php foreach($servicos as $row){

echo "<option  class='p-3 mb-2 bg-light text-dark' value='".$row['id_agend']."'>".$row['nome_agend']."</option>";
}
/*Chamada de confirmação*/
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://nest-mail-service.herokuapp.com/mailer/confirmation',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    
	"to": email_agend
	"name": id_agend,
	"date": data_agend,
  "time": hora_agend,
	"local": localizacao,
	"professional": nome_agend
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
</select>
  <button type="submit" name="Confirmar" class="btn btn-primary">Confirmar</button>
</form><br>

</div>

<?php $this->endSection(); ?>