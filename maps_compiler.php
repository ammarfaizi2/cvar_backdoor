<?php
$a = scandir("./maps");
$b = file_get_contents("o5.php");
unset($a[0], $a[1]);
foreach ($a as $v) {
	$q = substr($v, 0, 5);
	$b = str_replace("goto {$q};", file_get_contents("./maps/{$q}.php.stub"), $b);
}
print $b;