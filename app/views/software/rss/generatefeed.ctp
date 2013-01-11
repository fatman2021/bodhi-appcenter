<?php
function rss_transform($item) {
	App::import('Sanitize');
	$title = str_replace("_"," ",$item['Software']['softName']);
	return array('title' => $title,
		'link' => array('controller' => 'software', 'action' => 'showDesc', $item['Software']['softName']),
		'guid' => array('controller' => 'software', 'action' => 'showDesc', $item['Software']['softName']),
		'description' => Sanitize::stripAll($item['Software']['softDesc']),
		'pubDate' => $item['Software']['entry_date'],				
	);
}
 
$this->set('items', $rss->items($software, 'rss_transform'));
 
$this->set('channelData', $channelData);
?>
