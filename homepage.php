<?php require_once "shared/flash_messages.php"; ?>
<div id="myCarousel" class="carousel slide" style="height: 500px">
  <div class="carousel-inner">
    <div class="item">
      <img src="./assets/img/examples/slide-01.jpg" alt="" style="height: 500px">
      <div class="container">
        <div class="carousel-caption">
          <h1><?php echo PROJECT_NAME; ?></h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a href="#myModal" role="button" class="btn btn-primary btn-large" data-toggle="modal">Sign In</a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="./assets/img/examples/slide-02.jpg" alt="" style="height: 500px">
      <div class="container">
        <div class="carousel-caption">
          <h1><?php echo PROJECT_NAME; ?></h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a href="#myModal" role="button" class="btn btn-primary btn-large" data-toggle="modal">Sign In</a>
        </div>
      </div>
    </div>
    <div class="item active">
      <img src="./assets/img/examples/slide-03.jpg" alt="" style="height: 500px">
      <div class="container">
        <div class="carousel-caption">
          <h1><?php echo PROJECT_NAME; ?></h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a href="#myModal" role="button" class="btn btn-primary btn-large" data-toggle="modal">Sign In</a>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>


<!-- 
<div class="container">

  <div class="marketing">

    <h1><?php echo PROJECT_NAME; ?></h1>
    <p class="marketing-byline"><?php echo PROJECT_DESCRIPTION; ?></p>

    <div class="row-fluid">
      <div class="span4">
        <img class="marketing-img" src="assets/img/bs-docs-twitter-github.png">
        <h2>By nerds, for nerds.</h2>
        <p>Built at Twitter by <a href="http://twitter.com/mdo">@mdo</a> and <a href="http://twitter.com/fat">@fat</a>, Bootstrap utilizes <a href="http://lesscss.org">LESS CSS</a>, is compiled via <a href="http://nodejs.org">Node</a>, and is managed through <a href="http://github.com">GitHub</a> to help nerds do awesome stuff on the web.</p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="assets/img/bs-docs-responsive-illustrations.png">
        <h2>DIKI :*</h2>
        <p>Bootstrap was made to not only look and behave great in the latest desktop browsers (as well as IE7!), but in tablet and smartphone browsers via <a href="./scaffolding.html#responsive">responsive CSS</a> as well.</p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="assets/img/diksandika.jpg">
        <h2>Tes Brooooo,, Hehehehe !!!</h2>
        <p>A 12-column responsive <a href="./scaffolding.html#gridSystem">grid</a>, dozens of components, <a href="./javascript.html">JavaScript plugins</a>, typography, form controls, and even a <a href="./customize.html">web-based Customizer</a> to make Bootstrap your own.</p>
      </div>
    </div>

   

  </div>

</div>
 -->

<?php require_once "shared/modal.php" ?>