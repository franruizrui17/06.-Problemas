Programa para calcular el perímetro y el area de un hexágono introduciendo la medida del lado en centímetros (cm).
<form>
<input id="a" name="a" onkeyup="calcular()" value="<?=$_GET['a']?>"/>
<input id="b" name="b" onkeyup="calcular()" value="<?=$_GET['b']?>"/>
<button onclick="calcular()">Calcular</button>
</form>
<div id="resultado"></div>

<script>
function calcular () {
	a=document.getElementById('a').value;
	b=document.getElementById('b').value;
	document.getElementById('resultado').innerHTML=a*b;
}
calcular();
</script>

<?php
	$a=$_GET['a'];
	$b=$_GET['b'];
	echo $a*$b;
?>