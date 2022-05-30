<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
  <link id="estilo" class="dia" rel="stylesheet" href="/estilo_adm.css" />
  <link rel="stylesheet" href="/flickity.css">
  <script src="/flickity.pkgd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <title>King.Agendamentos</title>
</head>

<!--Header-->
<body>

<header id="header">
    <a id="logo" href="/Admin/adminHome"><img src="/img/logo_branco.png" alt=""></a>
    <nav id="nav">
      <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
        <span id="hamburger"></span>
      </button>
      <ul id="menu" role="menu">
        <li><a href="/Admin/menuServ">Galeria</a></li>
        <li><a href="/Admin/menuPro">Profissional</a></li>
        <li><a href="/Home/agendamento">Agendamento</a></li>
        <li><a href="/Home/index">Localizacão</a></li>
        <li><a href="/Home/index">Sair</a></li>
        
        <label for="modo-escuro">
            <button class="checkbox_dark" role="switch" id="checkbox_dark"></button>
            <input type="checkbox" id="modo-escuro">
        </label>

        <script src="/estilo.js"></script>
      </ul>
    </nav>
  </header>
  <script src="/menu_mobile.js"></script>

  <?php echo $this->renderSection("home");?>
  <?php echo $this->renderSection("Menu_Pro");?>
  <?php echo $this->renderSection("Cadastro");?>
  <?php echo $this->renderSection("Deletar");?>
  <?php echo $this->renderSection("Alterar");?>
  <?php echo $this->renderSection("Alterar_pro");?>
  <?php echo $this->renderSection("Ver_Pro");?>
  <?php echo $this->renderSection("Selecionar_Pro");?>
  <?php echo $this->renderSection("Menu_Serv");?>
  <?php echo $this->renderSection("Profissionais");?>
  <?php echo $this->renderSection("Cadastro_Servico");?>
  <?php echo $this->renderSection("Servicos");?>
  <?php echo $this->renderSection("Deletar_Servico");?>
  <?php echo $this->renderSection("Alterar_Servico");?>
  <?php echo $this->renderSection("Selecionar_Serv");?>

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
    <a href="https://twitter.com/n_oels"><i class="fab fa-twitter"></i> /n_oels</a>
    <br />
    <a href="https://www.instagram.com/n.oel.s/"><i class="fab fa-instagram"></i> /n.oel.s</a>
    <br />
    <a href="https://twitter.com/n_oels"><i class="fab fa-twitter"></i> /n_oels</a>
    <br />
    <a href="https://www.instagram.com/n.oel.s/"><i class="fab fa-instagram"></i> /n.oel.s</a>
    <br />
  </div>
  <div class="clear"></div>
</footer>
<footer class="footer2">
  <p class="footer_p">Atividade de PRWII - ETECJK - Professor: Jefferson</p>
</footer>

</html>
