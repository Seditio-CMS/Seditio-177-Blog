<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/pagethumb/pagethumb.list.php
Version=120
Updated=2007-mar-01
Type=Plugin
Author=Neocrome
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=pagethumb
Part=list
File=pagethumb.list
Hooks=list.loop
Tags=list.tpl:{LIST_ROW_THUMB}
Minlevel=0
Order=10
[END_SED_EXTPLUGIN]

==================== */

if (!defined('SED_CODE')) { die('Wrong URL.'); }

$class = $cfg['plugin']['pagethumb']['style'];

//$list_thumb  = (!empty($pag['page_extra1'])) ? "<img class=\"".$class."\" src=\"".$pag['page_extra1']."\" />" : "";

if (!empty($pag['page_thumb']))
{
$list_thumb = "<img src=\"".$pag['page_thumb']."\" />";
}
else
{
$list_thumb = "<img src=\"plugins/pagethumb/inc/14-thumb.gif\" />";
}



$t->assign(array(
	"LIST_ROW_THUMB" => $list_thumb
		));
		
?>