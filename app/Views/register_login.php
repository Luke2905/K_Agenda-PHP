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
                    <label for="">Digite uma senha</label>
                    <input type="password" required>
                </div>
                <div class="input_box">
                    <label for="">Repita a senha</label>
                    <input type="password" required>
                </div>
                <div class="input_box">
                    <label for="">Digite seu email</label>
                    <input type="email" required>
                </div>
                <div class="input_box">
                    <label for="">Digite seu telefone celular</label>
                    <input type="tel" placeholder="(XX) XXXXX-XXXX" required>
                </div>
            </div>

            <div class="registrar">
                <button><a href="">Registrar</a></button>
            </div>

        </form>
    </div>
</div>

<?php $this->endSection(); ?>