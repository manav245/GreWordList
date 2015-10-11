<HTML>
<BODY>
<?php
$file = fopen("https://raw.githubusercontent.com/manav245/GreWordList/master/list.txt", "r") or die("Unable to open file!");
$list = array();
while(!feof($file)){
    $line = fgets($file);
    $list[] = $line;
}
foreach ($list as $x) {
	echo $x;
	echo "<br>";
	}
fclose($file);
?>
</BODY>
</HTML>
