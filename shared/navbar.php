 <?php
  $page_name = "";
  if(isset($_GET["page_name"])){
    $page_name = $_GET["page_name"];
  }     

 
 ?>
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
              <li class="<?php echo ($page_name == "listbarang") ? 'active' : ''; ?>">
                <a href="page.php?page_name=listbarang">Barang</a>
              </li>
              <li class="<?php echo ($page_name == "penjualan") ? 'active' : ''; ?>">
                <a href="page.php?page_name=penjualan">Penjualan</a>
              </li>
              
              <li class="dropdown <?php echo (($page_name == "laporan") || ($page_name == "laporan_stok")) ? 'active' : ''; ?>">
                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Laporan<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="page.php?page_name=laporan">Laporan Penjualan</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="page.php?page_name=laporan_stok">Laporan Stok</a></li>
                </ul>
              </li>
              <li class="dropdown <?php echo (($page_name == "surat_jalan") || ($page_name == "faktur")) ? 'active' : ''; ?>">
                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Sales Order<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="page.php?page_name=faktur">Faktur</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="page.php?page_name=surat_jalan">Surat Jalan</a></li>
                </ul>
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