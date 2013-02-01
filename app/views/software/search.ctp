<?php
/* File: /app/views/software/search.ctp */
$archLabel = array('i386'=>'32bit','armel'=>'armel','x86_64'=>'64bit');
if (isset($result)) {
if (empty($result)){
    print "<h2 class='showdesc'>No results for: <i>".$query."</i></h2>";
}
else
{
    print "<h2 class='showdesc'>Results for: <i>".$query."</i></h2>";
}
print "<br />";
print '<ul style="text-align:left">';
foreach ($result as $user)
{
    $list = explode(',',$user);
    if(isset($list[1])){
    	print '<li>';
        print '<a href="/software/showDesc/'.$list[0].'/'.$list[1].'">' . str_replace("_"," ",$list[0]).'&nbsp;-&nbsp;'.$archLabel[$list[1]].'</a>';
	print '</li>';
    }
    else
    {
    	print '<li>';
        print '<a href="/software/showDesc/'.$list[0].'">' . str_replace("_"," ",$list[0]).'</a>';
    print '</li>';
    }
}
print '</ul>';
print '</div>';
}
//$this->layout = 'ajax';
?>
