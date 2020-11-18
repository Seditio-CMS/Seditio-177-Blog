<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/pagethumb/pagethumb.edit.update.done.php
Version=120
Updated=2007-mar-01
Type=Plugin
Author=Neocrome
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=pagethumb
Part=edit.update.done
File=pagethumb.edit.update.done
Hooks=page.edit.update.done
Tags=
Minlevel=0
Order=10
[END_SED_EXTPLUGIN]

==================== */

if (!defined('SED_CODE')) { die('Wrong URL.'); }

if(!empty($_FILES['thumb']['tmp_name']) && empty($error_string)){

	$width = imagesx($image);
	$height = imagesy($image);
	
	if ($width<$cfg['plugin']['pagethumb']['width'] && $height<$cfg['plugin']['pagethumb']['height']) {
		$new_width = $width;
		$new_height = $height;
	}else{
		if (($width/$height)<1) {
		$new_height = $cfg['plugin']['pagethumb']['height'];
		$new_width = $width * ($new_height/$height);
		}else{
		$new_width = $cfg['plugin']['pagethumb']['width'];	
		$new_height = $height * ($new_width/$width);
		}
	}
	
	$image_resized = imagecreatetruecolor($new_width, $new_height);
	imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	
	$cfg['pagethumb_dir'] = 'datas/pagethumb/';
	$thumb = $id."-thumb.jpg";
	$thumbpath = $cfg['pagethumb_dir'].$thumb;
	
	if (file_exists($thumbpath )) { unlink($thumbpath ); }
	imagejpeg($image_resized, $thumbpath );		
	$sql = sed_sql_query("UPDATE $db_pages SET page_thumb='$thumbpath' WHERE page_id='".$id."'");
	@chmod($thumbpath , 0666);
}	
?>