<?php $this->extend("layout_padrao");?>

<?php $this->section("pagina_inicial");?>

<!--Paralax-->
<div class="container_parallax">
  <main>
    <section class="parallax">
      <img class="logo" alt="">
    </section>
  </main>
</div>

<!--Sobre-->
<section class="sobre_equipe">
  <div class="container_sobre">
    <div class="equipe_container">
      <div class="line_text">
        <div style="width: 60%; height: 4px;"></div>
        <h2>Equipe</h2>
      </div>
      <div class="imagem_circulo">
        <div class="img_avatar"></div>
        <div class="descicao_avatar">
          <h3>Alberto</h3>
          <p>Otimo lugar para se trabalhar!</p>
        </div>
      </div>
      <div class="imagem_circulo">
        <div class="img_avatar2"></div>
        <div class="descicao_avatar">
          <h3>Michael</h3>
          <p>É uma experiencia muito gratificante poder fazer parte desta equipe.</p>
        </div>
      </div>
    </div>
    <div class="sobre_container">
      <div class="line_text">
        <div class="line" style="width: 10%; height: 4px;"></div>
        <h2>Sobre</h2>
        <p>A King Agendamentos é um site que tem como objetivo automatizar e facilitar o gerenciamento de horários agendados em salões de beleza.</p>
        <p>Nossa equipe é formada por profissionais comprometidos com excelência nas realizações de suas atividades e focados nas necessidades de nossos clientes.</p>
      </div>
    </div>
</section>

<!--Galeria-->

<h1>Galeria - Melhores Cortes</h1>

<!-- Flickity HTML init -->
<div class="carousel" data-flickity='{ "adaptiveHeight": true }'>
  <div class="carousel-cell carousel-cell--height3" style="background-image: url(https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-o.jpg); background-size: cover; background-repeat: no-repeat; " ></div> <!-- Imagem -->
  <div class="carousel-cell carousel-cell--height2" style="background-image: url(https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-z-.jpg); background-size: cover; background-repeat: no-repeat; " >></div>  <!-- Imagem -->
  <div class="carousel-cell carousel-cell--height3" style="background-image: url(https://blog.trinks.com/wp-content/uploads/2019/08/corte-degradê-masculino-cabelo-crespo.jpg); background-size: cover; background-repeat: no-repeat; " ></div> <!-- Imagem -->
  <div class="carousel-cell carousel-cell--height3" style="background-image: url(https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-h.jpg); background-size: cover; background-repeat: no-repeat; "></div> <!-- Imagem -->
  <div class="carousel-cell carousel-cell--height2" style="background-image: url(https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-b.jpg); background-size: cover; background-repeat: no-repeat; "></div> <!-- Imagem -->
</div>

<!--Comentarios-->

<div class="comentarios">
  <div class="wrapper">
    <div class="outer">
      <div class="card" style="--delay:-1;">
        <div class="content">
          <div class="img"><img src="https://voxnews.com.br/wp-content/uploads/2017/04/unnamed.png"
              alt=""></div>
          <div class="details">
            <span class="name">Sumit Kapoor</span>
            <p>Ótimo atendimento, local limpo e bem frequentado.</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:0;">
        <div class="content">
          <div class="img"><img src="https://voxnews.com.br/wp-content/uploads/2017/04/unnamed.png"
              alt=""></div>
          <div class="details">
            <span class="name">Andrew Neil</span>
            <p>Lugar aconchegante, simpático e tranquilo.
Equipe atenciosa e educada. Gostei muito do atendimento e do corte de cabelo.</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:1;">
        <div class="content">
          <div class="img"><img src="https://voxnews.com.br/wp-content/uploads/2017/04/unnamed.png"
              alt=""></div>
          <div class="details">
            <span class="name">Jasmine Carter</span>
            <p>Ótimos profissionais!! Sempre que fui la saí satisfeita com o resultado.</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="https://voxnews.com.br/wp-content/uploads/2017/04/unnamed.png"
              alt=""></div>
          <div class="details">
            <span class="name">Justin Chung</span>
            <p>Amei, super recomendo! Profissionais excelentes, ambiente muito agradável e o preço melhor ainda.</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="https://voxnews.com.br/wp-content/uploads/2017/04/unnamed.png"
              alt=""></div>
          <div class="details">
            <span class="name">Adrina Calvo</span>
            <p>Profissionais excelentes,  vc se sente bem cuidada e satisfeita com os cortes e colorações.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php $this->endSection(); ?>