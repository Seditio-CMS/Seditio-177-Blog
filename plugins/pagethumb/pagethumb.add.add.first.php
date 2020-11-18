<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/pagethumb/pagethumb.add.add.first.php
Version=120
Updated=2007-mar-01
Type=Plugin
Author=Neocrome
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=pagethumb
Part=add.add.first
File=pagethumb.add.add.first
Hooks=page.add.add.first
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

$error_string .= (!empty($_FILES['thumb']['tmp_name']) && $_FILES['thumb']['error'] != UPLOAD_ERR_OK) ? $L['plu_uperror']."<br />" : '';
$error_string .= (!empty($_FILES['thumb']['tmp_name']) && $image == false) ? $L['plu_uperror2']."<br />" : '';
?>