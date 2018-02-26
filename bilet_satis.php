
<!DOCTYPE html>
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Movie Ticket Booking Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <title></title>
    <link href="css/style_dene.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="background-image:url(img/banner2.jpg)">
    <form id="form1" runat="server">
            <div class="content">
	            <h1>Sinema Bilet Satış</h1>
	            <div class="main">
		            <div class="demo">
			            <div id="seat-map">
				            <div style class="front">SAHNE</div>
                  
                              <div class="form-inline my-2 my-lg-0">
                          <div class="navbar navbar-toggleable-md navbar-light bg-faded">
                                  1<input type="checkbox" name="" value="1">
                                    2<input type="checkbox" name="" value="2">
                                      3<input type="checkbox" name="" value="3">
                                        4<input type="checkbox" name="" value="4">
                                          5<input type="checkbox" name="" value="5">
                                            6<input type="checkbox" name="" value="6">
                                              7<input type="checkbox" name="" value="7">
                                                8<input type="checkbox" name="" value="8">
                                                  9<input type="checkbox" name="" value="9">
                                                    10<input type="checkbox" name="" value="10">
                                                      11<input type="checkbox" name="" value="11">
                                                        12<input type="checkbox" name="" value="12"><br>
                                                          13<input type="checkbox" name="" value="13">
                                                            14<input type="checkbox" name="" value="14">
                                                              15<input type="checkbox" name="" value="15">
                                                                16<input type="checkbox" name="" value="16">
                                                                  17<input type="checkbox" name="" value="17">
                                                                    18<input type="checkbox" name="" value="18">
                                                                      19<input type="checkbox" name="" value="19">
                                                                        20<input type="checkbox" name="" value="20">
                                                                          21<input type="checkbox" name="" value="21">
                                                                            22<input type="checkbox" name="" value="22"><br>
                                                                              23<input type="checkbox" name="" value="23">
                                                                                24<input type="checkbox" name="" value="24">
                                                                                  25<input type="checkbox" name="" value="25">
                                                                                    26<input type="checkbox" name="" value="26">
                                                                                      27<input type="checkbox" name="" value="27">
                                                                                        28<input type="checkbox" name="" value="28">
                                                                                          29<input type="checkbox" name="" value="29">
                                                                                            30<input type="checkbox" name="" value="30">
                                                                                              31<input type="checkbox" name="" value="31">
                                                                                                32<input type="checkbox" name="" value="32"><br>
                                                                                                  33<input type="checkbox" name="" value="33">
                                                                                                    34<input type="checkbox" name="" value="34">
                                                                                                    35<input type="checkbox" name="" value="34">
                                                                                                    36<input type="checkbox" name="" value="34">
                                                                                                    37<input type="checkbox" name="" value="34">
                                                                                                    38<input type="checkbox" name="" value="34">
                                                                                                    39<input type="checkbox" name="" value="34">
                                                                                              40<input type="checkbox" name="" value="34">
                                </div></div>
			             </div>
			            <div class="booking-details">
				            <ul class="book-left">
                                <li>Salon No</li>
					            <li>Film Adı </li>
					            <li>Saati </li>
					            <li>Bilet Sayısı</li>
					            <li>Toplam Fiyat</li>
				            </ul>
				            <ul class="book-right">
                                <li  ID="salon_no" runat="server" Text="Label">:</li>
                                <li ID="film_adi" runat="server" Text="Label" >: </li>
					            <li ID="seans_saat" runat="server" Text="Label">:</li>
					            <li ID="counter" runat="server" Text="0">:</li>
					            <li ID="total" runat="server" Text="0">:</li>
				            </ul>
				            <div class="clear"></div>
				            <ul id="selected-seats" class="scrollbar scrollbar1"></ul>
                    <button type="button" name="button" >Satın al</button>
                    <button type="button"  name="button">İptal</button>

				            <div id="legend"></div>
			            </div>
			            <div style="clear:both"></div>

	                </div>

	            </div>
            </div>
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
    </form>
</body>
</html>
