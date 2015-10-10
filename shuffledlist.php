<?php
$file = fopen("list.txt", "r") or die("Unable to open file!");
$list = array();
while(!feof($file)){
    $line = fgets($file);
    $list[] = $line;
}
shuffle($list);
foreach ($list as $x) {
	echo $x;
	}
fclose($file);
?>
