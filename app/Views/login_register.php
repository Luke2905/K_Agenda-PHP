<?php $this->extend("layout_padrao");?>

<?php $this->section("login_register");?>

<div class="container_login">
    <div class="login_img">
        <img alt="">
    </div>
    <div class="login_form">
        <form action="/Login/autenticar" method="post">
            <div class="login_header">
                <div class="titulo_login">
                    <h1>Login</h1>
                </div>
                <div class="login_button">
                    <button><a href="/Home/register">Registrar</a></button>
                </div>
            </div>

            <div class="input_grupo">
                <div class="input_box">
                    <label for="">Digite seu email</label>
                    <input type="email" name="usuario" required>
                </div>
                <div class="input_box">
                    <label for="">Digite sua senha</label>
                    <input type="password" name="senha" required>
                </div>
            </div>

            <div class="registrar">
                <button  type="submit" >Registrar</button>
            </div>

        </form>
    </div>
</div>

<?php $this->endSection(); ?>