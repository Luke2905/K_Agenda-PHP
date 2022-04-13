<?php $this->extend("layout_padrao");?>

<?php $this->section("pagina_inicial");?>

<!--Paralax-->
<div class="container_parallax">
  <main>
    <section class="parallax">
      <h1>Kings</h1>
    </section>
  </main>
</div>

<!--Sobre-->
<section class="sobre_equipe">
  <div class="container_sobre">
    <div class="equipe_container">
      <div class="line_text">
        <div style="width: 30px;"></div>
        <h2>Equipe</h2>
      </div>
      <div class="imagem_circulo">
        <div class="img_avatar"></div>
        <div class="descicao_avatar">
          <h3>Nome</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusamus nostrum vel porro minima qui,
            explicabo sunt.</p>
        </div>
      </div>
      <div class="imagem_circulo">
        <div class="img_avatar2"></div>
        <div class="descicao_avatar">
          <h3>Nome</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusamus nostrum vel porro minima qui,
            explicabo sunt.</p>
        </div>
      </div>
    </div>
    <div class="sobre_container">
      <div class="line_text">
        <div style="width: 30px;"></div>
        <h2>Sobre</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque quos reiciendis minus laboriosam
          culpa consequuntur vero dicta dolor vitae. Enim voluptatem sint impedit nesciunt corporis, quas ut laboriosam
          quia. lorem</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque quos reiciendis minus laboriosam
          culpa consequuntur vero dicta dolor vitae. Enim voluptatem sint impedit nesciunt corporis, quas ut laboriosam
          quia. lorem</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque quos reiciendis minus laboriosam
          culpa consequuntur vero dicta dolor vitae. Enim voluptatem sint impedit nesciunt corporis, quas ut laboriosam
          quia. lorem</p>
      </div>
    </div>
</section>

<!--Galeria-->

<h1>Galeria - Melhores Cortes</h1>

<!-- Flickity HTML init -->
<div class="carousel" data-flickity='{ "adaptiveHeight": true }'>
  <div class="carousel-cell"></div> <!-- Imagem -->
  <div class="carousel-cell carousel-cell--height2"></div>  <!-- Imagem -->
  <div class="carousel-cell carousel-cell--height3"></div> <!-- Imagem -->
  <div class="carousel-cell"></div> <!-- Imagem -->
  <div class="carousel-cell carousel-cell--height2"></div> <!-- Imagem -->
</div>

<!--Comentarios-->

<div class="comentarios">
  <div class="wrapper">
    <div class="outer">
      <div class="card" style="--delay:-1;">
        <div class="content">
          <div class="img"><img src="https://img.r7.com/images/ariel-barbeiro-instagram-sucesso-18122018131137018"
              alt=""></div>
          <div class="details">
            <span class="name">Sumit Kapoor</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque quos reiciendis minus laboriosam</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:0;">
        <div class="content">
          <div class="img"><img src="https://img.r7.com/images/ariel-barbeiro-instagram-sucesso-18122018131137018"
              alt=""></div>
          <div class="details">
            <span class="name">Andrew Neil</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque quos reiciendis minus laboriosam</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:1;">
        <div class="content">
          <div class="img"><img src="https://img.r7.com/images/ariel-barbeiro-instagram-sucesso-18122018131137018"
              alt=""></div>
          <div class="details">
            <span class="name">Jasmine Carter</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque quos reiciendis minus laboriosam</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="https://img.r7.com/images/ariel-barbeiro-instagram-sucesso-18122018131137018"
              alt=""></div>
          <div class="details">
            <span class="name">Justin Chung</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque quos reiciendis minus laboriosam</p>
          </div>
        </div>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="https://img.r7.com/images/ariel-barbeiro-instagram-sucesso-18122018131137018"
              alt=""></div>
          <div class="details">
            <span class="name">Adrina Calvo</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque quos reiciendis minus laboriosam </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php $this->endSection(); ?>