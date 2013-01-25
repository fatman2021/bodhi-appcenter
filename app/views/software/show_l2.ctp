<h2 class="sectionedit1"><a><?PHP echo str_replace("_"," ",$softSubCat); ?></a></h2> 
<div class="level2"> 
<br />
<p> 
<?PHP
foreach($data as $var)
{
echo $html->link(str_replace("_"," ",$var['Software']['softName']), array('controller' => 'software','action' => 'showDesc',$var['Software']['softName']));
echo "<br/>";
}
?>

</p> 
 
</div> 
