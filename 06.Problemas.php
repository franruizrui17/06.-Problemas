<center>
	<br>Problema 1 </br>
	<br>Calcula el perímetro y el área de un hexágono regular de 8 cm de lado </br>
	<br><img src="Hexagono.jpg"; width="300"; height="250"></br>
	<br><form></br>
	<input id="a" name="a" onkeyup="calcular()" placeholder="Lado" value="<?=$_GET['a']?>">
	<button onclick="calcular()">Calcular</button>
	</form>
	<div id="resultadoPerimetro"></div>
	<div id="resultadoArea"></div>

	<script>
		function calcular (){
		a=document.getElementById('a').value;
		perimetro=a*6;
		document.getElementById('resultadoPerimetro').innerHTML=perimetro + "cm es el perimetro";
		apotema=Math.sqrt(perimetro-((a/2)**2));
		A=(perimetro*apotema)/2;
		A=Math.round(A*100)/100;
		document.getElementById('resultadoArea').innerHTML=A + "cm cuadrados es el area";
	}
		calcular();
	</script>

	<?php
		$a=$_GET['a'];
		$perimetro=$a*6;
	
		$apotema=sqrt($perimetro-(($a/2)**2));
		$A=($perimetro*$apotema)/2;
		$A=round($A,2);
	
		echo "El perimetro son $perimetro cm y el area son $A cm cuadrados";
	?>
	<p><p><p>
	<br>Problema 2 </br>
	<br>Se quiere poner césped artificial en un sector de una pista de lanzamiento de jabalina circular. 
	El ángulo del sector es de 90 grados y el radio 5 metros. ¿Qué superficie será necesario cubrir?</br>
	<form>
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
	<p><p><p>
	<br>Problema 3 </br>
	<p>En el año 2010 la edad de Ana era el triple de la de su hija María. En 2015, sus edades sumaban 54 años. 
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
</center>