<?PHP 
$archLabel = array('i386'=>'32bit','armel'=>'armel','x86_64'=>'64bit');
if(!isset($archError))
{
?>
<h2 class="sectionedit1"><a><?PHP echo $archLabel[$archType]; ?></a></h2> 
<div class="level2">
<br />
<h3>*Warning* This will be a long page with all the apps listed for the architecture requested.</h3>
<p> 
<?PHP
foreach($softNames as $var)
{
echo $html->link(str_replace("_"," ",$var['Software']['softName']), array('controller' => 'software','action' => 'showDesc',$var['Software']['softName']."/".$archType));
echo "<br/>";
}
?>
</p> 
 
</div> 
<?PHP
}
else
{   echo "<img class='opps' src='/img/404.png' alt=' ' />";
    echo "<h3 style='text-align: center;'>Architecture not supported. Please post a support request on the <a href='http://forums.bodhilinux.com'>forums.</a></h3>";
}
?>
