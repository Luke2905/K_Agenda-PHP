<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/estilo.css" />
  <title>King.Agendamentos</title>
</head>

<body>
  <header>
    <div class="center">
      <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
      <div class="logo"><a href="/Home/index">Kings.Agendamento</a></div>
      <div class="menu">
        <ul>
          <li><a href="/Home/galeria">Galeria</a></li>
          <li><a href="/Home/funcionario">Profissional</a></li>
          <li><a class="selected" href="/Home/agendamento">Agendamentos</a></li>
        </ul>
      </div>
    </div>
  </header>

  <?php echo $this->renderSection("pagina_inicial");?>
  <?php echo $this->renderSection("galeria");?>
  <?php echo $this->renderSection("funcionarios");?>
  <?php echo $this->renderSection("agendamento");?>

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
