<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php
$contents = file_get_contents('http://www.bodhilinux.com/header.php');

echo $contents;
?>
<?PHP
	echo $javascript->link('prototype');
    echo $javascript->link('scriptaculous');	
?>
<link rel="stylesheet" media="all" type="text/css" href="/css/screen.css" /> 
<section>
<div id='searchBar' style='text-align:right'>
<?php echo $form->create('Software', array('url' => '/software/searchPost')); ?>
<?php 
echo '<p class=search>Search for software:&nbsp;</p>';
echo $ajax->autoComplete('Software.search', '/software/search')?>
<?php echo $form->end()?>
<a href='/software/feed.rss' title='Software update RSS feed'><img src='/img/rss.png' alt='RSS' height='28' width='28' /></a>

</div>

<div class="page"> 
<!--Adding for arch types -->
<div class='arch'>
<?PHP 
if (isset($archTypeDBList)){ 
?>
<b>Architectures:&nbsp;&nbsp;</b>
<?PHP
$archLabel = array('i386'=>'32bit','armel'=>'armel','x86_64'=>'64bit');
$archCount = 0;
foreach($archTypeDBList as $var)
{
        echo $html->link($archLabel[$var['Software']['arch']], array('controller' => 'software',      'action' => 'arch',$var['Software']['arch']));
	if($archCount==sizeof($archLabel)-1)
	{
		echo '&nbsp;';
	}
	else
	{
		echo ',&nbsp;&nbsp;';
	}
	$archCount++;
}
}
?>
</div>
<!-- end -->
<br />
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
</div>
</section>
<div id='footer'>
	<?php echo $this->element('sql_dump'); ?>
	<footer class="gradient">
		<p class='copyleft'>&copy; Copyleft Bodhi Linux 2013. All Wrongs Reserved - Hosted by <a target="_blank" href="https://www.vaultnetworks.com">vaultnetworks</a></p>
	</footer>
<?PHP
echo "<p class='build'>Bodhi Appcenter, &nbsp;".Configure::read( 'Appcenter.build' )."</p>";
?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>window.jQuery || document.write("&lt;script src='http://www.bodhilinux.com/guts/js/jquery-1.5.1.min.js'&gt;\x3C/script&gt;")</script>
<script src="quote.js" type="text/javascript">
</script>

</div>
<br />
<script> 
jQuery.noConflict();
</script>
</body>
</html>
