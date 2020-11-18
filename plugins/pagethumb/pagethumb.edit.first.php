<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/pagethumb/pagethumb.edit.first.php
Version=120
Updated=2007-mar-01
Type=Plugin
Author=Neocrome
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=pagethumb
Part=edit.first
File=pagethumb.edit.first
Hooks=page.edit.first
Tags=
Minlevel=0
Order=10
[END_SED_EXTPLUGIN]

==================== */

if (!defined('SED_CODE')) { die('Wrong URL.'); }

if ($a=='thdelete' && !empty($pag['page_thumb'])){

    $r=sed_import('r','P','ALP');
    sed_check_xg();
	
    $sql = sed_sql_query("SELECT * FROM $db_pages WHERE page_id='$id' LIMIT 1");
	
    if ($row = sed_sql_fetchassoc($sql)) {

	$thumbpath = $row['page_thumb'];
    $thowner = $row['page_ownerid'];
	
	if (file_exists($thumbpath))
		{ 
		$thfile = basename($thumbpath);
		$sql1 = sed_sql_query("SELECT * FROM $db_pfs WHERE pfs_file='$thfile' AND pfs_userid='$thowner' LIMIT 1");
		if ($row1 = sed_sql_fetcharray($sql1))
			{
			$thid = $row1['pfs_id'];
			$sql = sed_sql_query("DELETE FROM $db_pfs WHERE pfs_id='$thid'");
			}
		unlink($thumbpath); 
		}

	$sql = sed_sql_query("UPDATE $db_pages SET page_thumb='' WHERE page_id='".$row['page_id']."'");
	}
	header("Location: page.php?m=edit&id=".$row['page_id']."&r=".$r."#thumb");
	exit;

}
		
?>