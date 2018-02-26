<?php
include 'kullanici_giris_veri.php';
 ?>
 <?php
 if (isset($_SESSION["oturum"]) && $_SESSION["oturum"] == true) { ?>
   <header>
     <nav class="navbar navbar-inverse">
       <div class="container-fluid">
          <div class="navbar-header">
            <a href="home.php">
              <img src="cinema-logo.jpg" alt="" width="50px;" style="border-radius:10px;">
            </a>
          </div>
           <ul class="nav navbar-nav">
               <col span="2"class="">
               <li class="active"><a href="home.php">Home</a></li>
               <li><a href="filmler.php">Filmler</a></li>
           </ul>
           <navbar class="navbar-form navbar-right">
             <div class="input-group">
               <div class="input-group-btn">
                  <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Seçenekler
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Profil</a><br>
                        <a class="dropdown-item" href="#">Hesabım</a><br>
                        <a class="dropdown-item" href="kullanici_giris.php">Çıkış</a>
                     </div>
                    </div>
               </div>
             </div>
           </navbar>
       </div>
     </nav>
   </header>

<?php } else if ($_SESSION["oturum"] == false) { ?>

<header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
       <div class="navbar-header">
         <a href="home.php">
           <img src="cinema-logo.jpg" alt="" width="50px;" style="border-radius:10px;">
         </a>
       </div>
        <ul class="nav navbar-nav">
            <col span="2"class="">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="filmler.php">Filmler</a></li>
        </ul>
        <navbar class="navbar-form navbar-right">
          <div class="input-group">
            <div class="input-group-btn">
              <div class="dropdown show">
                 <a href="kullanici_giris.php" class="btn btn-secondary dropdown-toggle" type="Button" id="dropdownMenu" aria-haspopup="true" aria-expanded="false">
                  Giriş Yap
                </a>
              </div>
            </div>
          </div>
        </navbar>
    </div>
  </nav>
</header>
<?php }  ?>
