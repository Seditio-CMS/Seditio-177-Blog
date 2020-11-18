<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/pagethumb/pagethumb.edit.tags.php
Version=120
Updated=2007-mar-01
Type=Plugin
Author=Neocrome
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=pagethumb
Part=edit.tags
File=pagethumb.edit.tags
Hooks=page.edit.tags
Tags=page.edit.tpl:{PAGEEDIT_FORM_THUMB}
Minlevel=0
Order=10
[END_SED_EXTPLUGIN]

==================== */

if (!defined('SED_CODE')) { die('Wrong URL.'); }

$page_form_thumb  = "<a name=\"thumb\" id=\"thumb\"></a>";
$page_form_thumb .= (!empty($pag['page_thumb'])) ? "<img src=\"".$pag['page_thumb']."\" alt=\"\" width=\"190px\" height=\"200px\"/> ".$L['Delete']." [<a href=\"page.php?m=edit&amp;a=thdelete&amp;id=".$pag['page_id']."&amp;r=".$r."&amp;".sed_xg()."\">x</a>]<br /><br />" : '';
$page_form_thumb .= "<input type=\"hidden\" name=\"rpagethumb\" value=\"".$pag['page_thumb']."\" />";
$page_form_thumb .= "<input name=\"thumb\" type=\"file\" class=\"file\" size=\"24\" /><br />";

$t->assign(array(
	"PAGEEDIT_FORM_THUMB" => $page_form_thumb
		));
?>