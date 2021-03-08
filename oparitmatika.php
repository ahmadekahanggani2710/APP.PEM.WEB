<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>oparitmatika</title>
</head>

<body>
<?php

$operand1 = $_REQUEST['operand1'];
$operand2 = $_REQUEST['operand2'];
$operator = $_REQUEST['operator'];


$perhitungan = $operand1.$operator.$operand2;

eval ("\$hasil = $perhitungan;");

echo "hasil perhitungan : <b> $hasil </b>";

?>
</body>
</html>

