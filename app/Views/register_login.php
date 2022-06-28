<?php $this->extend("layout_padrao");?>

<?php $this->section("register_login");?>

<div class="container_login">
    <div class="login_img">
        <img alt="">
    </div>
    <div class="login_form">
        <form action="">
            <div class="login_header">
                <div class="titulo_login">
                    <h1>Cadastro</h1>
                </div>
                <div class="login_button">
                    <button><a href="/home/login">ENTRAR</a></button>
                </div>
            </div>

            <div class="input_grupo">
                <div class="input_box">
                    <label for="">Nome Completo</label>
                    <input type="text" required>
                </div>
                <div class="input_box">
                    <label for="">Digite seu melhor email</label>
                    <input type="email" required>
                </div>
                <div class="input_box">
                    <label for="">Digite sua melhor senha</label>
                    <input type="password" id="password" required>
                </div>
                <div class="input_box">
                    <label for="">Repita a senha</label>
                    <input type="password" id="confirm_password" required>
                </div>
                <div class="input_box">
                    <label for="">Digite seu número de celular</label>
                    <input type="tel" placeholder="(XX) XXXXX-XXXX" required>
                </div>
            </div>

            <div class="registrar">
                <button><a href="">Registrar</a></button>
            </div>

        </form>
    </div>
</div>

<script src="/checar_senha.js"></script>

<?php

/*Chamada do Greetings*/

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://nest-mail-service.herokuapp.com/mailer/greetings',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"to": email,
	"name": "Hisllaylla"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>

<?php $this->endSection(); ?>