<html>
<body>
<?php
$x = "Hello Everyone!<br>";
$y = "Jack";
$z = "Daniels";
$c = $y."   ".$z;
echo strtoupper("$x<br><br>");
echo strlen("$c<br><br>");
echo strtolower("$x<br><br>");
echo str_replace("Everyone"  ,"World","$x<br><br>");
echo "$c<br><br>";
echo substr($c,4)

?>
</body>
</html>