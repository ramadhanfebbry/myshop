 <!-- Navbar
    ================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="./index.html"><?php echo PROJECT_NAME ?></a>
      <div class="nav-collapse collapse">
        <ul class="nav">

          <li class="">
            <a href="index.php">Home</a>
          </li>
          <?php
            if(isset($_SESSION["username"])){
              ?>
              <li class="">
                <a href="list_barang.php">Barang</a>
              </li>
              <li class="">
                <a href="penjualan.php">Penjualan</a>
              </li>
              <li class="">
                <a href="laporan.php">Laporan</a>
              </li>
          <?php
            }else{
            ?>
              <li class="">
                <a href="#myModal" role="button" data-toggle="modal">Sign In</a>
              </li>
          <?php
            }
          ?>
          
        </ul>

        <?php
          
        if(isset($_SESSION["username"])){
          ?>
          <ul class="nav pull-right">
          <li id="fat-menu" class="dropdown">
           <a href="logout.php">Sign Out</a> 
          </li>
        </ul>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>