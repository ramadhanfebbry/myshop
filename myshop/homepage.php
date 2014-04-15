<?php require_once "shared/flash_messages.php"; ?>
<div id="myCarousel" class="carousel slide" style="height: 500px">
  <div class="carousel-inner">
    <div class="item">
      <img src="./assets/img/examples/slide-01.jpg" alt="" style="height: 500px">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example headline.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a href="#myModal" role="button" class="btn btn-primary btn-large" data-toggle="modal">Sign In</a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="./assets/img/examples/slide-02.jpg" alt="" style="height: 500px">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a href="#myModal" role="button" class="btn btn-primary btn-large" data-toggle="modal">Sign In</a>
        </div>
      </div>
    </div>
    <div class="item active">
      <img src="./assets/img/examples/slide-03.jpg" alt="" style="height: 500px">
      <div class="container">
        <div class="carousel-caption">
          <h1>One more for good measure.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a href="#myModal" role="button" class="btn btn-primary btn-large" data-toggle="modal">Sign In</a>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>



<div class="container">

  <div class="marketing">

    <h1>INC CORP</h1>
    <p class="marketing-byline">Need reasons to love Bootstrap? Look no further.</p>

    <div class="row-fluid">
      <div class="span4">
        <img class="marketing-img" src="assets/img/bs-docs-twitter-github.png">
        <h2>By nerds, for nerds.</h2>
        <p>Built at Twitter by <a href="http://twitter.com/mdo">@mdo</a> and <a href="http://twitter.com/fat">@fat</a>, Bootstrap utilizes <a href="http://lesscss.org">LESS CSS</a>, is compiled via <a href="http://nodejs.org">Node</a>, and is managed through <a href="http://github.com">GitHub</a> to help nerds do awesome stuff on the web.</p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="assets/img/kawasaki.jpg">
        <h2>Moto Cycle</h2>
        <p>Motor sport dengan tampilan elegan.</p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="assets/img/Android.jpg">
        <h2>Smartphone-Gadget !!!</h2>
        <p>Smartphone berbasis OS android  <a href="./scaffolding.html#gridSystem">Android</a>, masa kini, <a href="./javascript.html">sevice full</a>,  <a href="./customize.html">web-based Customizer</a> to make Bootstrap your own.</p>
      </div>
    </div>

    <hr class="soften">

    <h1>Built with Bootstrap.</h1>
    <p class="marketing-byline">For even more sites built with Bootstrap, <a href="http://builtwithbootstrap.tumblr.com/" target="_blank">visit the unofficial Tumblr</a> or <a href="./getting-started.html#examples">browse the examples</a>.</p>
    <div class="row-fluid">
      <ul class="thumbnails example-sites">
        <li class="span3">
          <a class="thumbnail" href="http://soundready.fm/" target="_blank">
            <img src="assets/img/example-sites/soundready.png" alt="SoundReady.fm">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://kippt.com/" target="_blank">
            <img src="assets/img/example-sites/kippt.png" alt="Kippt">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.gathercontent.com/" target="_blank">
            <img src="assets/img/example-sites/gathercontent.png" alt="Gather Content">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.jshint.com/" target="_blank">
            <img src="assets/img/example-sites/jshint.png" alt="JS Hint">
          </a>
        </li>
      </ul>
    </div>

  </div>

</div>


<?php require_once "shared/modal.php" ?>