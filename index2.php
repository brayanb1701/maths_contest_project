<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMPS00034</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/superfish.css" media="screen">
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script>
window.history.forward (1);
</script>
<script>

		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>
</head>
<body>
<div class="header-wrapper">
  <div class="wrapper">
    <div class="logo">
      <h1>TEMPORIZADOR ahldfhfg</h1>
      <!-- Display the countdown timer in an element -->
<p id="demo"></p>
<script>
var centesimas = 0;
var segundos = 0;
var minutos = 0;
var horas = 0;
function inicio () {
	control = setInterval(cronometro,10);
	document.getElementById("inicio").disabled = true;
	document.getElementById("parar").disabled = false;
	document.getElementById("continuar").disabled = true;
	document.getElementById("reinicio").disabled = false;
}
function parar () {
	clearInterval(control);
	document.getElementById("parar").disabled = true;
	document.getElementById("continuar").disabled = false;
}
function reinicio () {
	clearInterval(control);
	centesimas = 0;
	segundos = 0;
	minutos = 0;
	horas = 0;
	Centesimas.innerHTML = ":00";
	Segundos.innerHTML = ":00";
	Minutos.innerHTML = ":00";
	Horas.innerHTML = "00";
	document.getElementById("inicio").disabled = false;
	document.getElementById("parar").disabled = true;
	document.getElementById("continuar").disabled = true;
	document.getElementById("reinicio").disabled = true;
}
function cronometro () {
	if (centesimas < 99) {
		centesimas++;
		if (centesimas < 10) { centesimas = "0"+centesimas }
		Centesimas.innerHTML = ":"+centesimas;
	}
	if (centesimas == 99) {
		centesimas = -1;
	}
	if (centesimas == 0) {
		segundos ++;
		if (segundos < 10) { segundos = "0"+segundos }
		Segundos.innerHTML = ":"+segundos;
	}
	if (segundos == 59) {
		segundos = -1;
	}
	if ( (centesimas == 0)&&(segundos == 0) ) {
		minutos++;
		if (minutos < 10) { minutos = "0"+minutos }
		Minutos.innerHTML = ":"+minutos;
	}
	if (minutos == 59) {
		minutos = -1;
	}
	if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
		horas ++;
		if (horas < 10) { horas = "0"+horas }
		Horas.innerHTML = horas;
	}
	 if (minutos==20){
	 alert("El tiempo acabo")
	 
	 }
	
}
</script><div id="contenedor">
		<div class="reloj" id="Horas">00</div>
		<div class="reloj" id="Minutos">:00</div>
		<div class="reloj" id="Segundos">:00</div>
		<div class="reloj" id="Centesimas">:00</div>
		<input type="button" class="boton" id="inicio" value="Start &#9658;" onclick="inicio();">
		<input type="button" class="boton" id="parar" value="Stop &#8718;" onclick="parar();" disabled>
		<input type="button" class="boton" id="continuar" value="Resume &#8634;" onclick="inicio();" disabled>
		<input type="button" class="boton" id="reinicio" value="Reset &#8635;" onclick="reinicio();" disabled>
	</div>


	</div>
    <div class="menu">
      <ul class="sf-menu" id="example">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li class="current"> <a href="services.php">Services </a>
          <ul>
            <li> <a href="#">Lorem ipsum </a> </li>
            <li class="current"> <a href="#">Dolor sit amet</a>
              <ul>
                <li class="current"><a href="#">Consectetuer</a></li>
                <li><a href="#">Aliquam </a></li>
                <li><a href="#">Tincidunt </a></li>
                <li><a href="#">Dapibus </a></li>
                <li><a href="#">Vivamus </a></li>
              </ul>
            </li>
            <li> <a href="#">Placerat </a></li>
            <li> <a href="#">Ut aliquam </a></li>
          </ul>
        </li>
        <li> <a href="page.php">Pages </a>
          <ul>
            <li class="current"><a href="#">Dolor tempor  </a></li>
            <li><a href="#">vestibulum</a></li>
            <li><a href="#"> Fusce lobortis</a></li>
            <li><a href="#">Pellentesque </a></li>
            <li><a href="#">Malesuada </a></li>
          </ul>
        </li>
        <li> <a href="projects.php">Projects </a> </li>
        <li> <a href="contact.php">Contact</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="banner-wrapper">
    <div class="banner">
      <div class="content">
        <div class="title">
          <h1>Mae cena</h1>
          <span>Aenean magna tortor porta quis <br />
          rdiet quis tincidunt</span> </div>
        <div class="clear"></div>
        <div class="button"><a href="#">portfolio</a></div>
      </div>
      <img src="images/image1.png" alt="image" />
      <div class="clear"></div>
    </div>
  </div>
</div>
<!---header-wrapper--->
<div class="clear"></div>
<div class="page-wrapper">
  <div class="wrapper2">
    <div class="box bg-color1">
      <div class="icon"><img src="images/icon1.png" alt="icon" /></div>
      <div class="content">
        <h2>Vestibulum aliq uam <br />
          quam a felis scel</h2>
      </div>
    </div>
    <div class="box bg-color2">
      <div class="icon"><img src="images/icon2.png" alt="icon" /></div>
      <div class="content">
        <h2>Fusce vestibulum tell<br />
          us ut ante</h2>
      </div>
    </div>
    <div class="box bg-color3">
      <div class="icon"><img src="images/icon3.png" alt="icon" /></div>
      <div class="content">
        <h2>Sed at tortor lectus<br />
          fringilla nisi.</h2>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="wrapper">
    <div class="services marRight30">
      <div class="ititle">
        <h1>Quisque at sem</h1>
      </div>
      <img src="images/image2.jpg" alt="image" />
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        <div class="button"><a href="#">More</a></div>
      </div>
    </div>
    <div class="services marRight30">
      <div class="ititle">
        <h1>Quisque at sem</h1>
      </div>
      <img src="images/image3.jpg" alt="image" />
      <div class="content">
        <p>Nam et nulla sit amet nulla pulvinar mattis. Nunc quis venenatis nunc. Sed tincidunt ligula arcu. Mauris elementum, tellus sed sagittis sodales, est metus pulvinar</p>
        <div class="button"><a href="#">More</a></div>
      </div>

    </div>
    <div class="services">
      <div class="ititle">
        <h1>Quisque at sem</h1>
      </div>
      <img src="images/image4.jpg" alt="image" />
      <div class="content">
        <p>Donec varius neque vel nibh sollicitudin pretium. In et enim ut erat consequat sceleri sque porttitor nec magna  gravida ac varius tempor, euismod a leo </p>
        <div class="button"><a href="#">More</a></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div id="time_countdown" class="time-count-container">

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash days_dash animated" data-animation="rollIn" data-animation-delay="300">
								<span class="time-number">
									<span class="digit">0</span>
									<span class="digit">0</span>
									<span class="digit">0</span>
								</span>
								<span class="time-name">Days</span>
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash hours_dash animated" data-animation="rollIn" data-animation-delay="600">
								<span class="time-number">
									<span class="digit">0</span>
									<span class="digit">0</span>	
								</span>
								<span class="time-name">Hours</span>
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash minutes_dash animated" data-animation="rollIn" data-animation-delay="900">
								<span class="time-number">
									<span class="digit">0</span>
									<span class="digit">0</span>
								</span>
								<span class="time-name">Minutes</span>
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash seconds_dash animated" data-animation="rollIn" data-animation-delay="1200">
								<span class="time-number">
									<span class="digit">0</span>
									<span class="digit">0</span>
								</span>
								<span class="time-name">Seconds</span>
							</div>
						</div>
					</div>
					
				</div><!-- /.time-count-container -->

				<p class="time-until">
					<span>Time Until Launce</span>
				</p><!-- /.time-until -->

<!---page-wrapper--->
<div class="footer-wrapper">
  <div class="footer">
    <div class="panel marRight30">
      <div class="title">
        <h1>Aliquam vel urna</h1>
        <h6>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod.</h6>
      </div>
      <div class="contnet">
        <ul>
          <li><a href="#">Aliquam vel urna in elit molestie lipsum</a></li>
          <li><a href="#">Etiam tincidunt lacus vitae ligula interdum</a></li>
          <li><a href="#">Maecenas eget nisi ac risus placerat</a></li>
          <li class="border-bottom"><a href="#">In venenatis gravida massa, vitae ele</a></li>
        </ul>
      </div>
    </div>
    <div class="panel marRight30">
      <div class="title">
        <h1>ipsum dolor </h1>
      </div>
      <div class="contnet"> <img src="images/icon4.png" alt="icon" />
        <spna>10-21-2012</spna>
        <p>Suspendisse ultrices augue ultrices urna gestas quis dapibus vallis</p>
      </div>
      <div class="contnet"> <img src="images/icon4.png" alt="icon" />
        <spna>10-19-2012</spna>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
      </div>
      <div class="contnet"> <img src="images/icon4.png" alt="icon" />
        <spna>10-17-2012</spna>
        <p>Pellentesque bibendum vehicula varius, eleifend at mauris.</p>
      </div>
    </div>
    <div class="panel">
      <div class="title">
        <h1>Curabi tur ultri</h1>
      </div>
      <div class="content">
        <p>Sed neque lectus, blandit tempor eleifend ut, lacinia vitae sapien. </p>
      </div>
      <div class="phone"> <img src="images/icon5.png" alt="icon" />
        <h1>(000) 888 88888</h1>
      </div>
      <div class="content">
        <p>Copyright (c) websitename. All rights reserved. 
          < <a href="#">www.alltemplateneeds.com</a> > <br />
          Images From: <a href="www.photorack.net">www.photorack.net</a></p>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<!---footer-wrapper--->
</body>
</html>