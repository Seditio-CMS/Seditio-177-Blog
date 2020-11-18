<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/pagethumb/pagethumb.add.tags.php
Version=120
Updated=2007-mar-01
Type=Plugin
Author=Neocrome
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=pagethumb
Part=add.tags
File=pagethumb.add.tags
Hooks=page.add.tags
Tags=page.add.tpl:{PAGEADD_FORM_THUMB}
Minlevel=0
Order=10
[END_SED_EXTPLUGIN]

==================== */

if (!defined('SED_CODE')) { die('Wrong URL.'); }

$page_form_thumb  = "<input type=\"file\" name=\"thumb\">";

$t->assign(array(
	"PAGEADD_FORM_THUMB" => $page_form_thumb
		));
?>