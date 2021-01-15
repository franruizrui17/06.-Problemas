Se desea vender un solar rectangular de 12.800 m2 dividiéndolo en tres parcelas rectangulares iguales. 
Si se quieren vallar las lindes de las tres parcelas (los bordes y las separaciones de las parcelas), determina las dimensiones del solar 
para que la longitud de la valla utilizada sea mínima<form>
<input id="a" name="a" onkeyup="calcular()" placeholder="Area Terreno" value="<?=$_GET['a']?>">
<button onclick="calcular()">Calcular</button>
</form>
<div id="resultadoPerimetro"></div>
<div id="resultadoArea"></div>

<script>
function calcular (){

?>