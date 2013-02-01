<?PHP
echo $data[0]['Softbundle']['bundleDesc'];
?>

<h2 class="home">Packages</h2>
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

<h4 class="appinfo">Download size:&nbsp;</h4><?PHP 
echo $data[0]['Softbundle']['softSize']; 
?>
<br />
<h4 class="appinfo">md5 checksum:&nbsp;</h4><?PHP 
echo $data[0]['Softbundle']['md5']; 
?> 
<br /><br />
<h4>Available Architectures:</h4>
<?PHP
    # Fixme please
    if ($data[0]['Softbundle']['id'] == "1" OR $data[0]['Softbundle']['id'] == "3" ){
		echo "&nbsp;&nbsp;".$html->link("32bit","softbundles/"."1");
		echo ",&nbsp;&nbsp;".$html->link("64bit","softbundles/"."3");  
    }
    else{
		echo "&nbsp;&nbsp;".$html->link("32bit","softbundles/"."2");
		echo ",&nbsp;&nbsp;".$html->link("64bit","softbundles/"."4"); 
	}
?>
<br />
<br />
<h2 class="install">Installation</h2>
<p>Please see the <a href="/pages/install_instructions" class="wikilink1" title="installation_instructions">Installation Instructions</a> for further information.</p> 
<p>The <strong>Install Now</strong> button is for immediate installation on machines with a good internet connection.</p> 
<p>The <strong>Download</strong> button is to download and transfer the package to a machine with no or slow internet connection.</p> 

<table class="appbtn"> 
<tr>
<td><a href="<?PHP echo $data[0]['Softbundle']['bundleApt'].'?refresh=yep';?>"><img class="appbtn" src="http://www.bodhilinux.com/images/installnow.png" alt=" "></a></td> 
<td><a href="<?PHP echo $data[0]['Softbundle']['bundleDown'];?>"><img class="appbtn" src="http://www.bodhilinux.com/images/downloadoffline.png" alt=" "></a></td>
</tr> 
</table> 

<strong><a href="apt:bodhi-recommends">FAST INSTALL</a></strong> bypasses the apt-get update done with the "Install Now" button and can <strong><u>NOT</u></strong> be used with a fresh installation.
<br /><br />
<p><strong>Note:</strong> The download size will vary for install now method.</p>
