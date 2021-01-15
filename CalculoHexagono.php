<center>
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
</center>