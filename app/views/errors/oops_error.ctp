<br />
<?PHP 
echo "<img class='oops' src='/img/404.png' alt=' ' />";
echo "<br />";
if (isset($page)){
	echo "<h2 style='text-align: center;'>Error code to report:".base64_encode($page)."</h2>";
}
?>
<br />
