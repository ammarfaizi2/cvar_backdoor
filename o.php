<?php
$a = $b = file_get_contents("o5.php");
preg_match_all("/goto\s([a-zA-Z0-9\_]{5})\;/", $a, $m);

foreach ($m[1] as $k => $v) {
	$vv = [];
	preg_match_all("/{$v}\:(.*)/s", $a, $vv);
	$b = str_replace("RONJU:", "", $b);
	$b = str_replace($vv[1][0], "", $b);
	$b = str_replace("goto $v;", $vv[1][0], $b);
}

print $b;
// preg_match_all("/\\\\x[a-z0-9]{2}/Usi", $a, $m);
// // var_dump($m);
// // var_dump($m);die;
// foreach($m[0] as $q) {
// 	$a = str_replace($q, chr(hexdec(substr($q, 1))), $a);
// }
// print $a;