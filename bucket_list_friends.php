<?php
echo "Hoeveel vrienden zal ik vragen om hun droom?\r\n";
$a = readline();
if (!is_numeric($a)) {
	echo "'$a' is geen geldig getal, probeer het opnieuw";
	exit();
}
$b = 1;
$c = array();
while($b <= $a) {
	echo "Wat is jouw naam?\r\n";
	$naam = readline();
	echo "Wat is jouw droom?\r\n";
	$droom = readline();
	$c[] = array("naam"=>$naam, "droom"=>$droom);
	$b++;
}
echo "\r\n\r\nLijst:\r\n";
foreach ($c as $d) {
	echo $d['naam']." heeft dit als droom: ".$d['droom']."\r\n";
}
?>