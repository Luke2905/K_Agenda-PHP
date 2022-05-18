<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link id="estilo" class="dia" rel="stylesheet" href="/estilo.css" />
  <link rel="stylesheet" href="/flickity.css">
  <script src="/flickity.pkgd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <title>King.Agendamentos</title>
</head>

<body>
<header id="header">
    <a id="logo" href="/Admin/adminHome">Kings Agendamento</a>
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
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">
         <span class="left"></span>
            <i class="valign-wrapper">
                <img src="data:image/jpeg;base64,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" alt="logo" id="avatar" class="responsive-img circle valign-wrapper">
            </i>      
        </a>
    </li>
      </ul>
    </nav>
  </header>
  <script src="/script.js"></script>

  <?php echo $this->renderSection("home");?>
  <?php echo $this->renderSection("Menu_Pro");?>
  <?php echo $this->renderSection("Cadastro");?>
  <?php echo $this->renderSection("Deletar");?>
  <?php echo $this->renderSection("Alterar");?>
  <?php echo $this->renderSection("Selecionar_Pro");?>
  <?php echo $this->renderSection("Menu_Serv");?>
  <?php echo $this->renderSection("Profissionais");?>
  <?php echo $this->renderSection("Cadastro_Servico");?>
  <?php echo $this->renderSection("Servicos");?>
  <?php echo $this->renderSection("Deletar_Servico");?>

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
