<h2 class="home">Bodhi Linux AppCenter</h2> 
<br />
<div class="level1"> 
<p>Welcome to the Bodhi Linux software page. </p>
<p>Here you will find easy to install software for any task on your Bodhi desktop! </p>
<p>Note that Midori or Firefox are <strong>REQUIRED</strong> for the “Install Now” method. The “Download” method will work in any browser. Please see the <a href="/pages/install_instructions" class="wikilink1" title="installation_instructions">Installation Instructions.</a></p>
<p>The main page lists only the 32bit software. For now, please use the architecture pages to search for <strong>64bit</strong> and <strong>armel</strong> software or use the software search feature for the same.</p>
</div> 
<h1>Software bundles</h1> 
<div class="level2"> 
 
<?PHP  
#History
#cleanedup, now runs using Catorder to change order of categories
foreach($softbundle as $var)
{   if($var['Softbundle']['arch'] == 'i386')
   {
		echo "<p>";
		echo "&nbsp;&nbsp;";
		echo $html->link($var['Softbundle']['bundleName'], array('controller' => 'software',      'action' => 'softbundles',$var['Softbundle']['id']));
		echo "<br />";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $var['Softbundle']['bundleShrtDesc'];
		echo "</p>";
    }
 }
#software packages section
?>
<h1>Bodhi Software Packages</h1>
<div> 
<?PHP  
foreach($softPackages as $var)
{   
    if($var['Software']['arch'] == 'i386')
    {    echo "&nbsp;&nbsp;";
         echo $html->link(str_replace("_"," ",$var['Software']['softName']), array('controller' => 'software',  'action' => 'showDesc',$var['Software']['softName']));
	     echo "<br />";
	}
 } ?>
</div>
<br />

<h1>Software Categories</h1> 
<div> 

<?PHP
$var="";
foreach($software as $var)
{   $ul_closed = false;
?>
    <h3><?PHP echo str_replace("_"," ",$var); ?></h3>
    <?PHP
	for($i = 0; $i < $softcount; $i++)
	{   $ul_display = true;	    
		foreach(${'w00t' . $i} as $w01t)
		{   if($w01t['Software']['softCat'] == $var){ 
			    # Only want <ul> once for each list not wrapped around every <li> 	
			    if ($ul_display) {
				    echo PHP_EOL.'<ul>'. PHP_EOL;
					$ul_display = false;
				}
				$count = ClassRegistry::init('Software')->find('count',array('conditions'=>'Software.softSubCat='."'".$w01t['Software']['softSubCat']."' and Software.arch='i386'"));
			echo '<li class="count">';
			echo "&nbsp;&nbsp;";
			if ($count ==1){
				echo $html->link(str_replace("_"," ",$w01t['Software']['softSubCat']), array( 'controller' => 'software',      'action' => 'showL2',$w01t['Software']['softSubCat'])); 
			}
			else
			{
				echo $html->link(str_replace("_"," ",$w01t['Software']['softSubCat']), array( 'controller' => 'software',      'action' => 'showL2',$w01t['Software']['softSubCat']))."&nbsp;&nbsp;".$count; 
			}
			echo '</li>' . PHP_EOL;
			}
		}
		if($w01t['Software']['softCat'] == $var and ! $ul_closed)
		{   # Admitted hack to keep </ul> from sometimes being generated twice
		    #  for reasons unknown to me :(
			echo '</ul>'.PHP_EOL;
			$ul_closed = true;
		}
	}
	echo '<br />'.PHP_EOL;
}
?>
</div>
</div>
