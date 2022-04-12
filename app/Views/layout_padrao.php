<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/estilo.css" />
  <link rel="stylesheet" href="/flickity.css">
  <script src="/flickity.pkgd.js"></script>
  <title>King.Agendamentos</title>
</head>

<body>
<header id="header">
    <a id="logo" href="/Home/index">Kings Agendamento</a>
    <nav id="nav">
      <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
        <span id="hamburger"></span>
      </button>
      <ul id="menu" role="menu">
        <li><a href="/Home/galeria">Galeria</a></li>
        <li><a href="/Home/funcionario">Profissional</a></li>
        <li><a href="/Home/agendamento">Agendamento</a></li>
        <li><a href="/Home/localizacao">Localizacão</a></li>
      </ul>
    </nav>
  </header>
  <script src="/script.js"></script>

  <?php echo $this->renderSection("pagina_inicial");?>
  <?php echo $this->renderSection("galeria");?>
  <?php echo $this->renderSection("funcionarios");?>
  <?php echo $this->renderSection("agendamento");?>
  <?php echo $this->renderSection("localizacao");?>
  <?php echo $this->renderSection("mapa");?>

</body>

<footer class="footer1">
  <div class="center">
    <div class="w501">
      <p><i class="fas fa-envelope"></i> kingcut@gmail.com</p>
      <p><i class="fas fa-phone-alt"></i> (XX) 9XXXX-XXXX</p>
    </div>
  </div>
  <div class="w502">
    <a href="https://twitter.com/n_oels"><i class="fab fa-twitter"></i> /n_oels</a>
    <br />
    <a href="https://www.instagram.com/n.oel.s/"><i class="fab fa-instagram"></i> /n.oel.s</a>
    <br />>
  </div>
  <div class="clear"></div>
</footer>
<footer class="footer2">
  <p>
    <i class="far fa-copyright"></i> Atividade de PRWII - ETECJK - Professor:
    Jefferson
  </p>
</footer>

</html>
