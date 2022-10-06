<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>matematicas</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/superfish.css" media="screen">
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script>

		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>
</head>
<?php 
if(isset($_GET["error"])){
echo "<script>alert('".$_GET['error']."')</script>";
}
?>
<body>
<script>
window.history.forward (1);
</script>
<div class="header-wrapper">
	<div class="wrapper">
		<div class="logo">
            	<h1>Matematicas</h1>
                <span>Registro</span>        </div>

    
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<!---header-wrapper--->
<div class="clear"></div>
<div class="page-content">
<div class="page">
<div class="panel">&nbsp;</div>
<div class="title">
	
    <h2>Registro de Equipos participantes</h2>
</div>
	
    
 <div class="content">
 <script>
				function hacer(){
					
					var a=document.getElementById("name").value
					var b=document.getElementById("password").value
					
				if(a.length>0 && b.length>0 ){
						document.getElementById("index").submit()
					} else {
						alert("Aun no se ha registrado")
						
					}
				}
				</script>
        <form action="conexion1.php" id="index" name="index" method="post">
          <div class="contact-form mar-top30">
            <label> <span>Equipo</span>
            <input type="text" class="input_text" name="name" id="name" autocomplete="off"/>
            </label>
           
            <label> <span>Contraseña</span>
            <input type="password" class="input_text" name="password" id="password" autocomplete="off"/>
            </label>
			
			 <label> <span>Email</span>
            <input type="text" class="input_text" name="email" id="email" autocomplete="off"/>
			</label>
            <label> <span>Categoria</span><select class="input_text" name="categoria" id="categoria">
			<option value="1">Prejuvenil</option>
			<option value="4">Juvenil</option>
			</select>
			</label>
            <input type="button" class="button" value="Registrar" onclick="hacer()"/>
          	
          </div>
        </form>
        <div class="address">
          <div class="panel">
            <div class="title">
              <h3>Respecto al Equipo</h3>
            </div>
            <div class="content">
              <p>Registre un nombre para su equipo,tenga en cuenta que los participantes seran reconocidos por el mismo,ejemplo<br />
                Equipo: Pitagoras</p>
              
            </div>
          </div>
          <div class="panel marginTop">
            <div class="title">
              <h3>Respecto a la contraseña</h3>
            </div>
            <div class="content">
              <p>Se recomienda una combinacion de numeros y letras,ejemplo<br />
               Contraseña: Pitago0118</p>
            
            </div>
          </div>
        </div>
      </div>   
    
    
    
</div>
</div>
<div class="clear"></div>
</div><!---page-content--->
<script>
if (history.forward(1)) {
	location.replace(history.forward(1));
}
</script>
</body>
</html>
