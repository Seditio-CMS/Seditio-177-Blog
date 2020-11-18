<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/pagethumb/pagethumb.edit.update.first.php
Version=120
Updated=2007-mar-01
Type=Plugin
Author=Neocrome
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=pagethumb
Part=edit.update.first
File=pagethumb.edit.update.first
Hooks=page.edit.update.first
Tags=
Minlevel=0
Order=10
[END_SED_EXTPLUGIN]

==================== */

if (!defined('SED_CODE')) { die('Wrong URL.'); }

require_once("plugins/pagethumb/inc/inc.php");
require_once("plugins/pagethumb/lang/pagethumb.".$lang.".lang.php");

$imagepath = $_FILES['thumb']['tmp_name'];

$image = open_image($imagepath);

$error_string .= (!empty($_FILES['thumb']['tmp_name']) && $_FILES['thumb']['error'] != UPLOAD_ERR_OK) ? $L['plu_uperror']."1<br />" : '';
$error_string .= (!empty($_FILES['thumb']['tmp_name']) && $image == FALSE) ? $L['plu_uperror2']."2<br />" : '';

if ($rpagedelete)
	{
	$sqltmp = sed_sql_query("SELECT * FROM $db_pages WHERE page_id='$id' LIMIT 1");

	if ($th = sed_sql_fetchassoc($sqltmp))
		{
		if (!$cfg['trash_page']) { 
		      $thumbpath = $th['page_thumb'];
				if (file_exists($thumbpath))
				  { unlink($thumbpath); }
			}
		}
	}
?>