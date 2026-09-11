<!DOCTYPE html>
<html>
<head><title>Calculadora de compra</title></head>
<body>
<h2>Calculadora de compra con descuento</h2>
<form method="POST">
Cliente: <input name="cliente"><br>
Producto: <input name="producto"><br>
Precio: <input type="number" step="0.01" name="precio"><br>
Cantidad: <input type="number" name="cantidad"><br>
<button type="submit">Calcular</button>
</form>
<?php
if($_POST){
$cliente=$_POST["cliente"];
$producto=$_POST["producto"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];
$subtotal=$precio*$cantidad;

if($subtotal<100){$porcentaje=0;}
elseif($subtotal<300){$porcentaje=0.05;}
elseif($subtotal<500){$porcentaje=0.10;}
else{$porcentaje=0.15;}

$descuento=$subtotal*$porcentaje;
$total=$subtotal-$descuento;

echo "<h3>Resultado</h3>";
echo "Cliente: $cliente<br>Producto: $producto<br>";
echo "Subtotal: S/ ".number_format($subtotal,2)."<br>";
echo "Descuento: S/ ".number_format($descuento,2)."<br>";
echo "Total a pagar: S/ ".number_format($total,2);
}
?>
</body>
</html>