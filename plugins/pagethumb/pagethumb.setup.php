<?PHP

/* ====================
pro-tasarim.net- Website engine
Copyright pro-tasarim.net
http://www.seditiocms.com

[BEGIN_SED]
File=plugins/pagethumb/pagethumb.setup.php
Version=V5
Updated=19:26 22.01.2016
Type=Plugin
Author=
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=pagethumb
Name=Küçük Resim
Description=Sayfalar ve Listeler için Küçük resim modülü
Version=100
Date=22.01.2016
Author=
Copyright=
Notes=
SQL=
Auth_guests=R
Lock_guests=W12345A
Auth_members=R
Lock_members=W12345A
[END_SED_EXTPLUGIN]

[BEGIN_SED_EXTPLUGIN_CONFIG]
height=01:string::750:Resim Genişlik
width=02:string::450:Resim Yükseklik
style=03:string::img-responsive:CSS Class for thumb image
[END_SED_EXTPLUGIN_CONFIG]

==================== */

if (!defined('SED_CODE')) { die('Wrong URL.'); }

?>
