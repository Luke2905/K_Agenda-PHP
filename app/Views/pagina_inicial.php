<?php $this->extend("layout_padrao");?>

<?php $this->section("pagina_inicial");?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false">
            <title> </title>
            <rect width="100%" height="100%" fill="#777"/>
            <text x="50%" y="50%" fill="#777" dy=".3em"> </text>
        </svg> -->
        <img src="/img/barber1.png" alt="">
        <div class="container">
            <div class="carousel-caption text-left">
              <h1>Example headline.</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false">
            <title> </title>
            <rect width="100%" height="100%" fill="#777"/>
            <text x="50%" y="50%" fill="#777" dy=".3em"> </text>
        </svg> -->
        <img src="/img/barber2.png" alt="">
        <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false">
            <title> </title>
            <rect width="100%" height="100%" fill="#777"/>
            <text x="50%" y="50%" fill="#777" dy=".3em"> </text>
        </svg> -->
        <img src="/img/barber3.png" alt="">
        <div class="container">
            <div class="carousel-caption text-right">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
        </div>
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </button>
</div>
<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
  <!-- Three columns of text below the carousel -->
  <div class="row">
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"/>
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg> -->
        <img src="/img/emanuel.png" width="250" height="250" alt="">
        <h2>Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"/>
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg> -->
        <img src="/img/hisllaylla.png" width="250" height="250" alt="">
        <h2>Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"/>
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg> -->
        <img src="/img/lucas.png" width="250" height="250" alt="">
        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->
  <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
  <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee"/>
            <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg> -->
        <img src="/img/barber1.png" width="400" height="400" alt="">
      </div>
  </div>
  <hr class="featurette-divider">
  <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee"/>
            <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg> -->
        <img src="/img/barber2.png" width="400" height="400" alt="">
      </div>
  </div>
  <hr class="featurette-divider">
  <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee"/>
            <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg> -->
        <img src="/img/barber3.png" width="400" height="400" alt="">
      </div>
  </div>
  <hr class="featurette-divider">
  <!-- /END THE FEATURETTES -->
</div>

<?php $this->endSection(); ?>