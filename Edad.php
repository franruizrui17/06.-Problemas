En el año 2010 la edad de Ana era el triple de la de su hija María. En 2015, sus edades sumaban 54 años. 
¿Qué edad tenía María en 2010? ¿En qué año nació María? ¿Qué años tenía su madre cuando nació María?<form>
<input id="A" name="A" onkeyup="calcular()" placeholder="Año1" value="<?=$_GET['A']?>">
<input id="B" name="B" onkeyup="calcular()" placeholder="Año2" value="<?=$_GET['B']?>">
<input id="F" name="F" onkeyup="calcular()" placeholder="Factor" value="<?=$_GET['F']?>">
<input id="S" name="S" onkeyup="calcular()" placeholder="SumaEdades" value="<?=$_GET['S']?>">
<button onclick="calcular()">Calcular</button>
</form>
<div id="resultadoEdadMaria"></div>
<div id="resultadoAñoMaria"></div>
<div id="resultadoEdadAnaCuandoNaceMaria"></div>

<script>
function calcular (){
	A=document.getElementById('A').value;
	B=document.getElementById('B').value;
	F=document.getElementById('F').value;
	S=document.getElementById('S').value;
	
	Y=Math.round(S-(2*B)+(2*A))/4;
	document.getElementById('resultadoEdadMaria').innerHTML=Y + " años es la edad de María";
	
	X=Math.round(Y*F);
	Z=Math.round(A-X);
	document.getElementById('resultadoAñoMaria').innerHTML="María nació en el año "+Z;
	
	W=Math.round(X-Y);
	document.getElementById('resultadoEdadAnaCuandoNaceMaria').innerHTML=W+" años tiene Ana cuando nace María";
}
calcular();
</script>

<?php
	$A=$_GET['A'];
	$B=$_GET['B'];
	$F=$_GET['F'];
	$S=$_GET['S'];
	$Y=($S-(2*$B)+(2*$A))/4;
	$Y=round($Y,0);
	
	$X=$Y*$F;
	$Z=$A-$X;
	$Z=round($Z,0);
	
	$W=$X-$Y;
	$W=round($W,0);
	
	echo "$Y años es la edad de Maria,
	Maria nació en el año $Z,
	$W años tiene Ana cuando nace María";
?>

