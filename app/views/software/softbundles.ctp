<?PHP
echo $data[0]['Softbundle']['bundleDesc'];
?>

<h2><a name="packages" id="packages">Packages</a></h2>
<div>
<br />
<p>
<?PHP
$list = explode(',',$data[0]['Softbundle']['softList']);
foreach($list as $var)
{
$data1 = ClassRegistry::init('Software')->find('all',array('conditions'=>'Software.id='.$var,'fields'=>array('Software.softName','Software.softSubCat')));

echo "&nbsp;&nbsp;".$html->link(str_replace("_"," ",$data1[0]['Software']['softName']), array('controller' => 'software','action' => 'showDesc',$data1[0]['Software']['softName']))."&nbsp;-&nbsp;".$html->link(str_replace("_"," ",$data1[0]['Software']['softSubCat']), array('controller' => 'software','action' => 'showL2',$data1[0]['Software']['softSubCat']))."<br/>";
}
?>
</p>

</div>
<div>
<p> 
<h4>Download size:</h4><?PHP 
echo $data[0]['Softbundle']['softSize']; 
?>
<h4>md5 checksum:</h4><?PHP 
echo $data[0]['Softbundle']['md5']; 
?> 
<h4>Available Architectures:</h4>
<?PHP
    # Fixme please
    if ($data[0]['Softbundle']['id'] == "1" OR $data[0]['Softbundle']['id'] == "3" ){
		echo "&nbsp;".$html->link("32bit","softbundles/"."1");
		echo ",&nbsp;".$html->link("64bit","softbundles/"."3");  
    }
    else{
		echo "&nbsp;".$html->link("32bit","softbundles/"."2");
		echo ",&nbsp;".$html->link("64bit","softbundles/"."4"); 
	}
?>
</p>
</div>
<h2><a name="installation" id="installation">Installation</a></h2>
<div>

<p>
<table width="35%">
<tr><td align="center"><a href="<?PHP echo $data[0]['Softbundle']['bundleApt']."?refresh=yep";?>"><img src="http://www.bodhilinux.com/images/installnow.png" border="0"></a></td>

<td align="center"><a href="<?PHP echo $data[0]['Softbundle']['bundleDown'];?>"><img src="http://www.bodhilinux.com/images/downloadoffline.png" border="0"></a>

</td></tr>
</table>
<strong><a href="apt:bodhi-recommends">FAST INSTALL</a></strong> bypasses the apt-get update done with the "Install Now" button and can <strong><u>NOT</u></strong> be used with a fresh installation.
</p>

<p>
Please see the <strong><a href="/pages/install_instructions" class="wikilink1" title="installation_instructions">Installation Instructions</a></strong> for further information.

</p>

</div>
