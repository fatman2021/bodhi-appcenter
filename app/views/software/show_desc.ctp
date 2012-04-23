<h1 class="sectionedit1"><a><?PHP

#Deny ACL to handle oracle java licensing issues.
$deny_print_acl = array("Oracle_Java");

#Architecture Label workaround.
$archLabel = array('i386'=>'Desktop','armel'=>'Mobile','x86_64'=>'Work Station');

echo str_replace("_"," ",$data[0]['Software']['softName']."/&nbsp;".$archLabel[$data[0]['Software']['arch']]);?></a></h1>

<div class="level1">
<p>

<img src="<?PHP echo $data[0]['Software']['softScreenie'];?>" class="medialeft" align="left" alt="" width="200" />
</p>

<p>
<?PHP
echo $data[0]['Software']['softDesc'];
?>

</p>
<?PHP
if(!in_array($data[0]['Software']['softName'],$deny_print_acl))
{
?>
<p>
<h4>Download size:</h4><?PHP
echo $data[0]['Software']['softSize'];
?>
</p>

<p>
<h4>md5 checksum:</h4><?PHP
echo $data[0]['Software']['md5'];
?>
</p>
<?PHP
}
?>
<p>
<h4>Architectures:</h4><?PHP
foreach($archTypeList as $var)
{
echo $html->link($archLabel[$var['Software']['arch']],"showDesc/".$data[0]['Software']['softName']."/".$var['Software']['arch']);
echo "&nbsp;";
}

?>
</p>

</div>

<h2 class="sectionedit3"><a name="installation" id="installation">Installation</a></h2>
<div class="level2">

<p>

Please see the <a href="/pages/install_instructions" class="wikilink1" title="installation_instructions">Installation Instructions</a> for further information.
</p>

<p>
The <strong>Install Now</strong> button is for immediate installation on machines with a good internet connection
</p>

<p>
The <strong>Download</strong> button is to download and transfer the package to a machine with no or slow internet connection.
</p>

<p>

<table width="35%">

<tr>
<?PHP
if($data[0]['Software']['softApt']!="")
{
?>
<td align="center"><a href="<?PHP echo $data[0]['Software']['softApt'].'?refresh=yep';?>"><img src="http://www.bodhilinux.com/images/installnow.png" border="0"></a></td>
<?PHP
}

if(!in_array($data[0]['Software']['softName'],$deny_print_acl))
{
?>
<!--<<<<<<< HEAD-->
<td align="center"><a href="<?PHP echo $data[0]['Software']['softDown'];?>"><img src="http://www.bodhilinux.com/images/downloadoffline.png" border="0"></a>

<!--=======-->


<!-- >>>>>>> 37e5e366c0185773f4b4f2a3c8476ae440e0ee15-->
</td>
<?PHP
}

?>
<!--<<<<<<< HEAD-->
</tr>
</table>
<!--=======-->
</tr>
</table>
<!-- >>>>>>> 37e5e366c0185773f4b4f2a3c8476ae440e0ee15-->
 <strong><a href="<?PHP echo $data[0]['Software']['softApt']?>">FAST INSTALL</a></strong> bypasses the apt-get update done with the "Install Now" button and can <strong><u>NOT</u></strong> be used with a fresh installation.

</p>
<?PHP
if(!in_array($data[0]['Software']['softName'],$deny_print_acl))
{
?>
<p>
<h4>Download size:</h4><?PHP
echo $data[0]['Software']['softSize'];
?>
</p>

<p>
<h4>md5 checksum:</h4><?PHP
echo $data[0]['Software']['md5'];
?>
</p>
<p>Note: The download size will vary for install now method.</p>
<?PHP
}
?>
</div>

<?PHP
if (!empty($list))
{
	echo "<h2 class=\"sectionedit4\"><a>Related / Similar Applications</a></h2>";
	echo "<div class=\"level2\">";
	echo "<p>";
	foreach($list as $var)
	{
		# hack to make links to same arch as app displayed
		echo $html->link(str_replace("_"," ",$var), array('controller' => 'software','action' => 'showDesc',$var, $data[0]['Software']['arch']))."<br/>";
	}
	echo "</p>";
	echo "</div>";
	}
?>

<h2 class="sectionedit5"><a>Software Homepage</a></h2>
<div class="level2">
<p>
<?PHP
echo $html->link($data[0]['Software']['softHome'],$data[0]['Software']['softHome']);
?>
</p>
</div>
