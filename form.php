<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Welcome to book seller</title>
<link rel="stylesheet" href="main.css" />
</head>
<body>
<h1>you are welcome</h1>
<?php
$name=$_POST['name'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$way=$_POST['pay'];
$web_price=$q1*5;
$mathematics_price=$q2*6.2;
$principle_price=$q3*10;
$theory_price=$q4*7.8;
print "<p>customer name $name</p>
<p>customer address $address</p>
<p>customer zip $zip</p>
<h3>please fill in the quantity field of the following form</h3>
<table border='1px'>
	<tr class='color'>
		<th>book</th><td>publisher</td><td>price</td><td>quantity</td><td>total cost</td>
	</tr>
	<tr>
		<th>Web technology</th><td>Springer press</td><td>$5.0</td><td>$q1</td><td>$web_price</td>
	</tr>
	<tr>
	    <th>mathematics</th><td>ACM press</td><td>$6.2</td><td>$q2</td><td>$mathematics_price</td>
	</tr>
	<tr>
		<th>principle of OS</th><td>Science press</td><td>$10</td><td>$q3</td><td>$principle_price</td>
	</tr>
	<tr>
		<th>Theory of matrix</th><td>High education press</td><td>$7.8</td><td>$q4</td><td>$theory_price</td>
	</tr>
</table>"
?>
<?php
$sum=$q1+$q2+$q3+$q4;
$total_price=$web_price+$mathematics_price+$principle_price+$theory_price;
print "<p>$name has bought $sum books</p>
<p>$name paid $total_price</p>
<p>paid by $way</p>"
?>

</body>
</html>
