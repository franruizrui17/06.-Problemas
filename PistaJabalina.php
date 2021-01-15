<center>
	<br>Se quiere poner césped artificial en un sector de una pista de lanzamiento de jabalina circular. 
	El ángulo del sector es de 90 grados y el radio 5 metros. ¿Qué superficie será necesario cubrir?</br>
	<br><form></br>
	<input id="a" name="a" onkeyup="calcular()" placeholder="Radio" value="<?=$_GET['a']?>">
	<input id="b" name="b" onkeyup="calcular()" placeholder="Angulo" value="<?=$_GET['b']?>">
	<button onclick="calcular()">Calcular</button>
	</form>
	<div id="resultadoAreaSector"></div>

	<script>
		function calcular (){
		a=document.getElementById('a').value;
		b=document.getElementById('b').value;
		areacirculo=Math.PI*a**2;
		porcioncirculo=360/b;
		areasector=areacirculo/porcioncirculo;
		areasector=Math.round(areasector*100)/100;
		document.getElementById('resultadoAreaSector').innerHTML=areasector + "m cuadrados es el area";
	}
		calcular();
	</script>

	<?php
		$a=$_GET['a'];
		$b=$_GET['b'];
		$areacirculo=M_PI*$a**2;
		$porcioncirculo=360/$b;
		$areasector=$areacirculo/$porcioncirculo;
		$areasector=round($areasector,2);
	
		echo "El area del sector son $areasector m cuadrados";
	?>
</center>