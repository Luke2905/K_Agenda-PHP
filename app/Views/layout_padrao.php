<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
  <link id="estilo" class="dia" rel="stylesheet" href="/estilo.css" />
  <link rel="stylesheet" href="/flickity.css">
  <script src="/flickity.pkgd.js"></script>
  <title>King.Agendamentos</title>
</head>

<!--Header-->
<body>

<header id="header">
    <a id="logo" href="/Home/index"><img src="/img/logo_branco.png" alt=""></a>
    <nav id="nav">
      <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
        <span id="hamburger"></span>
      </button>
      <ul id="menu" role="menu">
        <li><a href="/Servico/index">Galeria</a></li>
        <li><a href="/Profissional/index">Profissional</a></li>
        <li><a href="/Agendamento/index">Agendamento</a></li>
        <li><a href="/Home/localizacao">Localizacão</a></li>
        <li><a href="/Home/login">Login</a></li>
         <li><a href="">FAQ</a></li> <! -- ADICIONAR NOVA PÁGINA PARA PERGUNTAS FREQUENTES -->
        
        <label for="modo-escuro">
            <button class="checkbox_dark" role="switch" id="checkbox_dark"></button>
            <input type="checkbox" id="modo-escuro">
        </label>

        <script src="/estilo.js"></script>
      </ul>
    </nav>
  </header>
  <script src="/menu_mobile.js"></script>

  <?php echo $this->renderSection("pagina_inicial");?>
  <?php echo $this->renderSection("galeria");?>
  <?php echo $this->renderSection("funcionarios");?>
  <?php echo $this->renderSection("agendamento");?>
  <?php echo $this->renderSection("localizacao");?>
  <?php echo $this->renderSection("register_login");?>
  <?php echo $this->renderSection("login_register");?>
  <?php echo $this->renderSection("mapa");?>

</body>

<!--footer-->

<footer class="footer1">
  <div class="center">
    <div class="w50">
      <p class="footer_p"><i class="fas fa-envelope"></i> kingcut@gmail.com</p>
      <p class="footer_p">(XX) 9XXXX-XXXX</p>
      <br>
    </div>
  </div>
  <div class="w50">
    <a href="https://twitter.com/n_oels"><i class="fab fa-twitter"></i>Twitter</a>
    <br />
    <a href="https://www.instagram.com/n.oel.s/"><i class="fab fa-instagram"></i>Instagram</a>
    <br />
    <a href="https://twitter.com/n_oels"><i class="fab fa-twitter"></i>Facebook</a>
    <br />
    <a href="https://www.instagram.com/n.oel.s/"><i class="fab fa-instagram"></i>LinkedIn</a>
    <br />
  </div>
  <div class="clear"></div>
</footer>
<footer class="footer2">
  <p class="footer_p">King Agendamentos © Todos os Direitos Reservados 2022</p>
</footer>

</html>
