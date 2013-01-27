<h2><a><?PHP 

#Deny ACL to handle oracle java licensing issues.
$deny_print_acl = array("Oracle_Java", "Netflix_Desktop");

$archLabel = array('i386'=>'32bit','armel'=>'armel','x86_64'=>'64bit');
echo str_replace("_"," ",$data[0]['Software']['softName']."/&nbsp;".$archLabel[$data[0]['Software']['arch']]);?></a></h2> 
<div> 
<?php
if (!empty($data[0]['Software']['softScreenie'])){ ?>
<p> 
<img src="<?PHP echo $data[0]['Software']['softScreenie'];?>" class="medialeft" align="left" alt="" width="200" style="margin:5px 5px 5px 5px;"/>
</p>
 <?php 
 } else echo "<br />" ?>

<?PHP 
echo $data[0]['Software']['softDesc'];
?>

<p>
<h4>Version:</h4><?PHP
echo $data[0]['Software']['version'];
?>
<?PHP
if(!in_array($data[0]['Software']['softName'],$deny_print_acl) && $data[0]['Software']['arch']!="armel")
{
?>
<h4>Download size:</h4><?PHP 
echo $data[0]['Software']['softSize']; 
?>
<h4>md5 checksum:</h4><?PHP 
echo $data[0]['Software']['md5']; 
?> 
<?PHP
}
?> 
<h4>Available Architectures:</h4><?PHP
$archCount=0;
foreach($archTypeList as $var)
{
echo $html->link($archLabel[$var['Software']['arch']],"showDesc/".$data[0]['Software']['softName']."/".$var['Software']['arch']);
if($archCount!=sizeof($archTypeList)-1)
{
	echo ",&nbsp;";
}
else
{
	echo "&nbsp;";
}
$archCount++;
}
 
?> 
</p>  

</div> 
<h1><a name="installation" id="installation">Installation</a></h1> 
<div> 
 
<p> 
Please see the <a href="/pages/install_instructions" class="wikilink1" title="installation_instructions">Installation Instructions</a> for further information.
</p> 
 
<p> 
The <strong>Install Now</strong> button is for immediate installation on machines with a good internet connection
</p> 
<?PHP
if(!in_array($data[0]['Software']['softName'],$deny_print_acl) && $data[0]['Software']['arch']!="armel")
{
?>
<p> 
The <strong>Download</strong> button is to download and transfer the package to a machine with no or slow internet connection.
</p> 
<?PHP
}
?>
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
?>

<?PHP
if(!in_array($data[0]['Software']['softName'],$deny_print_acl) && $data[0]['Software']['arch']!="armel")
{
?>
<td align="center"><a href="<?PHP echo $data[0]['Software']['softDown'];?>"><img src="http://www.bodhilinux.com/images/downloadoffline.png" border="0"></a> 
 
</td>
<?PHP
}
?>
</tr> 
</table> 
 <strong><a href="<?PHP echo $data[0]['Software']['softApt']?>">Quick Install</a></strong> bypasses the apt-get update done with the "Install Now" button and can <strong><u>NOT</u></strong> be used with a fresh installation.
<?PHP
if($data[0]['Software']['arch']!="armel")
{
?>
<p>Note: The download size will vary for install now method.</p>
<?PHP
} else {
echo "<br /><br />";}
?> 
 
</div>
<?PHP
if (count($list) != 1)
{?>
<h1><a>Related / Similar Applications</a></h1> 
<div> 
<p>
<?PHP
foreach($list as $var)
{	if ($var != $data[0]['Software']['softName']){
		echo $html->link(str_replace("_"," ",$var), array('controller' => 'software','action' => 'showDesc',$var))."<br/>";
    }
}
?>
</p> 
<?PHP 
} ?>
</div> 
<h1><a>Software Homepage</a></h1> 
<div> 
<p> 
<?PHP
echo $html->link($data[0]['Software']['softHome'],$data[0]['Software']['softHome']);
?>
</p> 
</div>
