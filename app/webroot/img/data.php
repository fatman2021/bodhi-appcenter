<?php
$fh = fopen("data.txt", 'r');
$link = mysql_connect('localhost', 'appcenter', '5A5WU7HeteSp');
mysql_select_db("appcenter");
while ( $theData = fgets($fh) ) { 
	#echo $theData; 
	$str = explode(':',$theData);
	$query = "update appcenter_softwares set md5='".$str[1]."' where softName='".$str[0]."'";
	$result = mysql_query($query) or die(mysql_error());
	print_r($str);
} 
fclose($fh);
?>
