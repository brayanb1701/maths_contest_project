
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function()
		{
		$("boton").click(function () {	 
			if($('input:radio[name=edad]:checked').val())==30{
			document.getElementById("formulario").submit();
		}});
		 });
</script>


<form name="formulario" id="formulario" action="formulario.php" method="POST">
	<input type="radio" name="edad" id="edad1" value="20"> 20<br>
	<input type="radio" name="edad" id="edad2" value="30"> 30<br>
	<input type="radio" name="edad" id="edad3" value="40"> 40 
	<br><br>
	<input type="button" id="boton" value="Enviar">
</form>

