<h2><a>Bodhi Linux AppCenter</a></h2> 
<br />
<div class="level1"> 
<p> 
Welcome to the Bodhi Linux software page. 
<p/>
<p>Here you will find easy to install software for any task on your Bodhi desktop! <p/>
<br />
<p>Note that Midori or Firefox are <strong>REQUIRED</strong> for the “Install Now” method. The “Download” method will work in any browser. Please see the <a href="/pages/install_instructions" class="wikilink1" title="installation_instructions">Installation Instructions.</a></p>
</p> 
<br />
<p>The main page lists only the 32bit software. For now, please use the architecture pages to search for <strong>64bit</strong> and <strong>armel</strong> software or use the software search feature for the same.
</p>
</div> 
<br />
<h1><a>Software bundles</a></h1> 
<div class="level2"> 
 
<?PHP  

#History
#cleanedup, now runs using Catorder to change order of categories

foreach($softbundle as $var)
{   if($var['Softbundle']['arch'] == 'i386')
   {
		echo "<p>";
		echo $html->link($var['Softbundle']['bundleName'], array('controller' => 'software',      'action' => 'softbundles',$var['Softbundle']['id']));
		echo "<br/>";

		echo $var['Softbundle']['bundleShrtDesc'];
		echo "</p>";
		echo "<br />";
    }
 } ?>

<?PHP
#software packages section
?>
<br />
<h1><a>Bodhi Software Packages</a></h1>

<div> 
<?PHP  
foreach($softPackages as $var)
{   
    if($var['Software']['arch'] == 'i386')
    {    echo "<p>";
	     echo $html->link(str_replace("_"," ",$var['Software']['softName']), array('controller' => 'software',  'action' => 'showDesc',$var['Software']['softName']));
	     echo "</p>";
	}
 } ?>
 
</div>
<br />
 
</div>
<br />

<h1><a>Software Categories</a></h1> 
<div> 
 
<?PHP
$var="";
foreach($software as $var)
{ 
?>
<h3><a><?PHP echo str_replace("_"," ",$var); ?></a></h3>
<?PHP
	
	for($i=0;$i<$softcount;$i++)
	{ 
		foreach(${'w00t' . $i} as $w01t)
		{
			if($w01t['Software']['softCat'] == $var)
			{
			echo '<div class="level3"> 
						 <ul>';
			}
			if($w01t['Software']['softCat'] == $var)
			{ 
				$count = ClassRegistry::init('Software')->find('count',array('conditions'=>'Software.softSubCat='."'".$w01t['Software']['softSubCat']."' and Software.arch='i386'"));
		?> 
			<li class="level1">
			<div class="li"> 
			
				<?PHP echo $html->link(str_replace("_"," ",$w01t['Software']['softSubCat']), array( 'controller' => 'software',      'action' => 'showL2',$w01t['Software']['softSubCat']))."&nbsp;(".$count.")"; ?>
			</div> 
			</li> 
		
	<?PHP 	}
			if($w01t['Software']['softCat'] == $var and $w01t['Software']['softCat'] != 'The_Bodhi_Store')
			{
				echo '</ul></div>';
			}

		}
		?>
		
	<?PHP
	}
	echo '<br />';
}
?>

</div>
