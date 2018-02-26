<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap/css/cover.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap/css/home.css">
 <link rel="stylesheet" href="bootstrap/css/like.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<body>


  <script>
    function createDiv() {
      var div = document.createElement('div');
      div.innerHTML = document.getElementById('getText').innerHTML;
      document.body.appendChild(div);
    }
  </script>

    <div class="container-fluid" >
      <div class="row">
        <!--sol taraf için bırakılan boşluk-->
        <div class="col-md-2">.col-md-2 </div>
        <!--canlı tutulan orta gövde kısım-->
        <div class="col-md-8">
          <!--film paylaşılan kısım col -->

          <div class="col-md-4"></div>
          <div class="col-md-4" >
            <div class="navbar navbar-form">
              <div class="navbar navbar-default" style="width:350px; margin-left:70px; padding-bottom:10px;">
                <div class="container-fluid">
                  <div class="row" style="margin-left:10px;">
                    <form class="" name="myform1" action="index.html" method="post">
                      <h4>FİLM BİLGİLERİ</h4>
                      <input type="text" name="gelentext" value="" style="width:300px; border-radius:1px  ;" placeholder="filmin resminin linkini adresini kopyalayınız"><br><br>
                      <input type="text" name="cikantext" value="" style="width:300px; border-radius:1px;" placeholder="filmin adını giriniz"><br>

                    </form>
                  </div>
                </div>
              </div>
              <div class="navbar navbar-default" style="width:370px; margin-left:60px;">
                <div class="container-fluid">
                  <div class="row" >
                    <div class="salonlar">
                      <h4>SALONLAR</h4>
                        <input type="radio" name="salon"
                          value="s1">solan 1</input>
                        <input type="radio" name="salon"
                          value="s2">salon 2</input>
                        <input type="radio" name="salon"
                          value="s3">salon 3</input>
                        <input type="radio" name="salon"
                          value="s4">salon 4</input>
                        <input type="radio" name="salon"
                          value="s5">salon 5</input>
                        <input type="radio" name="salon"
                          value="s6">salon 6</input><br>
                    </div>
                    <div class="seanslar">
                           <h4>SEANSLAR</h4>
                        <input type="checkbox" name="seans1"
                           value="9">09:00</input>
                        <input type="checkbox" name="seans2"
                           value="10">10:00</input>
                        <input type="checkbox" name="seans3"
                          value="11">11:00</input>
                        <input type="checkbox" name="seans4"
                          value="12">12:00</input>
                        <input type="checkbox" name="seans5"
                          value="13">13:00</input>
                        <input type="checkbox" name="seans6"
                          value="14">14:00</input>
                        <input type="checkbox" name="seans1"
                          value="15">15:00</input>
                        <input type="checkbox" name="seans1"
                          value="16">16:00</input>
                        <input type="checkbox" name="seans1"
                          value="17">17:00</input>
                        <input type="checkbox" name="seans1"
                          value="18">18:00</input>
                        <input type="checkbox" name="seans1"
                          value="19">19:00</input>
                        <input type="checkbox" name="seans3"
                          value="20">20:00</input>
                        <input type="checkbox" name="seans4"
                          value="21">21:00</input>
                        <input type="checkbox" name="seans1"
                          value="22">22:00</input>
                      </div>
                  </div>
               </div>
              </div>
              <div id="create" style="margin-left:200px;">
                <button class="btn btn_default" onClick="createDiv()">Film Ekle !</button>
              </div>
            </div>
            </div>
          <div class="col-md-4">

          </div>
          <div class="" >
                <div class="container-fluid">
                      <div class="row">
                        <div id="getText" style="display: none;">
                        <div class="navbar navbar-default" id="film_1">
                          <div class="col-md-2">
                              <div class=""><a href="/ayi-paddington-2-filmi">
                                <img src="https://marsmediaapp.azurewebsites.net/153//files/filmler/HO00002580_636449654405729223_kardesim-benim-2.png" alt=""></a>
                              </div>
                          </div>
                          <div class="col-md-8">
                            <div class="">
                              <div class="pull-left">
                                <h3  ></h3>
                                 <div class="pull-left" id="salon_no">Salon 4
                                </div>
                              </div>
                                <div >
                                  <ul  class="pull-left" id="saatler" >
                                      <li  class="btn btn-default" >
                                      <a href="/biletleme/~step~ticket~code~0000000028~session~58639" class=" " data-show-time="09" data-next-show-time="28.11.2017 Salı">
                                      <span class="sessions-display__saloon__session-list__time" name="" >09:15</span>
                                      <span class="sessions-display__saloon__session-list__prop" >2D</span>
                                      </a>
                                      </li>
                                      <li class="btn btn-default" >
                                      <a href="/biletleme/~step~ticket~code~0000000028~session~58640" class="nxm-session-btn " data-show-time="11" data-next-show-time="28.11.2017 Salı">
                                      <span class="sessions-display__saloon__session-list__time">11:10</span>
                                      <span class="sessions-display__saloon__session-list__prop" >2D</span>
                                      </a>
                                      </li>
                                      <li class="btn btn-default" >
                                      <a href="/biletleme/~step~ticket~code~0000000028~session~58641" class="nxm-session-btn " data-show-time="13" data-next-show-time="28.11.2017 Salı">
                                      <span class="sessions-display__saloon__session-list__time">13:35</span>
                                      <span class="sessions-display__saloon__session-list__prop" >2D</span>
                                      </a>
                                      </li>
                                      <li class="btn btn-default" >
                                      <a href="/biletleme/~step~ticket~code~0000000028~session~58642" class="nxm-session-btn " data-show-time="16" data-next-show-time="28.11.2017 Salı">
                                      <span class="sessions-display__saloon__session-list__time">16:00</span>
                                      <span class="sessions-display__saloon__session-list__prop" >2D</span>
                                      </a>
                                      </li>
                                      <li class="btn btn-default" >
                                      <a href="/biletleme/~step~ticket~code~0000000028~session~58643" class="nxm-session-btn " data-show-time="18" data-next-show-time="28.11.2017 Salı">
                                      <span class="sessions-display__saloon__session-list__time">18:25</span>
                                      <span class="sessions-display__saloon__session-list__prop" >2D</span>
                                      </a>
                                      </li>
                                    </ul>
                                </div>
                            </div>

                          </div>
                          <div class="col-md-2">
                            <div class="container">
                              <div class="row">
                                    <!-- Like Button -->
                                    <div class="like">
                                      <i class="fa fa-thumbs-up"></i>
                                      <i class="outer fa fa-circle-thin"></i>
                                    </div>
                                  <!-- Dislike Button -->
                              <div class="dislike">
                                <i class="fa fa-thumbs-down"></i>
                                <i class="outer fa fa-circle-thin"></i>
                              </div>
                              <!-- Creds -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <div class="col-md-8"></div>
                  <div class="col-md-2"></div>
                </div>
          </div>
          </div>
        </div>
        <!--sağ taraf için bırakılan boşluk-->
        <div class="col-md-2">.col-md-2</div>
      </div>
  </div>



<!--  <form name="myform">
    <input type="text" name="gelentext" value="" style="width:300px; border-radius:1px  ;" placeholder="filmin resminin linkini adresini kopyalayınız"><br><br>
    <input type="text" name="cikantext" value="" style="width:300px; border-radius:1px;" placeholder="filmin adını giriniz"><br>
    <textarea name="gelentext" rows="4" cols="20" placeholder="bu metni ekle"></textarea>
    <textarea name="cikantext" rows="4" cols="20"></textarea><br>

    <input type="radio" name="secim" value="append" checked> Metinin sonuna ekle
    <input type="radio" name="secim" value="replace"> Var olan metin ile değiştir<br>
    <input type="button" value="Metni ekle" onclick="addtext();">
 </form>

<script language="javascript" type="text/javascript">
function addtext() {
    var newtext = document.myform.gelentext.value;
    if (document.myform.secim[1].checked) {
        document.myform.cikantext.value = "";
        }
    document.myform.cikantext.value += newtext;
}
</script>-->

</body>
</html>
</html>
