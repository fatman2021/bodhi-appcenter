<br /><br />
<center><img src='/img/404.png' /></center>
<br /><br />

<?php if (isset($query)){ ?>
	<center><p>One or all of your search keywords were below 3 characters: &nbsp;<b><?php echo $query;?></b></p></center>
<?php
}
else
{?>
	<center><p><b>Search query was empty. Please Try again.</b></p></center>
<?php } ?>
