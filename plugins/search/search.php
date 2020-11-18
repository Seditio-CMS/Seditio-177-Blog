<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
http://www.neocrome.net
http://www.seditio.org
[BEGIN_SED]
File=plugins/search/search.php
Version=177
Date=2008-jun-04
Type=Plugin
Author=Olivier C. & Spartan
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=search
Part=main
File=search
Hooks=standalone
Tags=
Order=10
[END_SED_EXTPLUGIN]
==================== */

if (!defined('SED_CODE') || !defined('SED_PLUG')) { die('Wrong URL.'); }

$cfg_maxwords = 5;
$cfg_maxitems = 50;


$sq = sed_import('sq','P','TXT');
$a = sed_import('a','G','TXT');
      
$plugin_title = '';

if ($a=='search' && $sq=='')
  {
  unset($a);
  }

if ($a=='search')
  {
	if (mb_strlen($sq)<3)
		{
		$plugin_body .= "<p>".$L['plu_querytooshort']."</p>";
		unset($a);
		}
  else
    {
    $sq = sed_sql_prep($sq);
    $words = explode(" ", $sq);
    $words_count = count($words);

    if ($words_count>$cfg_maxwords)
      {
      $plugin_body .= "<p>".$L['plu_toomanywords']." ".$cfg_maxwords."</p>";
      unset($a);
      }
    }
  }



if ($a=='search')
	{
  $sqlsearch = implode("%", $words);
	$sqlsearch = "%".$sqlsearch."%";

	if (!$cfg['disable_page'])
		{
		$pag_sub = sed_import('pag_sub','P','ARR');

		if (!is_array($pag_sub) || $pag_sub[0]=='all')
			{ $sqlsections = ''; }
	  else
	   	{
	   	$sub = array();
			foreach($pag_sub as $i => $k)
   			{ $sub[] = "page_cat='".sed_sql_prep($k)."'"; }
		  $sqlsections = "AND (".implode(' OR ', $sub).")";
			}

    $pagsql = "(p.page_title LIKE '".$sqlsearch."' OR p.page_text LIKE '".sed_sql_prep($sqlsearch)."') AND ";

    $sql  = sed_sql_query("SELECT page_id, page_ownerid, page_title, page_cat, page_date from $db_pages p, $db_structure s
   	 		WHERE $pagsql (p.page_title LIKE '".$sqlsearch."' OR p.page_text LIKE '".sed_sql_prep($sqlsearch)."') AND 
     	 	 p.page_cat=s.structure_code
      	 	AND p.page_cat NOT LIKE 'system' $sqlsections2
      	 	$sqlsections ORDER by page_date DESC 
       	 	LIMIT $cfg_maxitems");
          
		$items = sed_sql_numrows($sql);

    $plugin_body .= "<h4>".$L['Pages'].", ".$L['plu_found']." ".$items." ".$L['plu_match'].": </h4>";

    if ($items>0)
      {
		  $plugin_body .= "<table class=\"cells striped\" width=\"100%\">";      
      $plugin_body .= "<tr>";
      $plugin_body .= "<td style=\"width:35%;\" class=\"coltop\">".$L['Category']."</td>";
      $plugin_body .= "<td style=\"width:35%;\" class=\"coltop\">".$L['Page']."</td>";
      $plugin_body .= "<td style=\"width:15%;\" class=\"coltop\">".$L['Date']."</td>";      
      $plugin_body .= "<td style=\"width:15%;\" width=\"15%\"class=\"coltop\">".$L['Owner']."</td>";
      $plugin_body .= "</tr>";
      
      
      while ($row = sed_sql_fetchassoc($sql))
        {
        if (sed_auth('page', $row['page_cat'], 'R'))
				  {
          $ownername = sed_sql_fetchassoc(sed_sql_query("SELECT user_name FROM $db_users WHERE user_id='".$row['page_ownerid']."'"));
          $plugin_body .= "<tr><td><a href=\"".sed_url("list", "c=".$row['page_cat'])."\">".$sed_cat[$row['page_cat']]['tpath']."</a></td>";
		  		$plugin_body .= "<td><a href=\"".sed_url("page", "id=".$row['page_id'])."\">".sed_cc($row['page_title'])."</a></td>";
          $plugin_body .= "<td style=\"text-align:center;\">".@date($cfg['dateformat'], $row['page_date'] + $usr['timezone'] * 3600)."</td>";          
	   			$plugin_body .= "<td style=\"text-align:center;\">".sed_build_user($row['page_ownerid'], $ownername['user_name'])."</td>";
          $plugin_body .= "</tr>";
  				}
	  		}
  		$plugin_body .= "</table>";
      }
    }
  
	
  }

 
$plugin_body .= "<h4>&nbsp;</h4>";
$plugin_body .= "<form id=\"search\" action=\"".sed_url("plug", "e=search&a=search")."\" method=\"post\">";
$plugin_body .= "<table class=\"cells striped\">";
$plugin_body .= "<tr><td width=\"20%\">".$L['plu_searchin']." :</td>";
$plugin_body .= "<td width=\"80%\"><input type=\"text\" class=\"text\" name=\"sq\" value=\"".sed_cc($sq)."\" size=\"40\" maxlength=\"64\" /></td></tr>";

if (!$cfg['disable_page'])
	{
	$plugin_body .= "<tr><td>".$L['Pages']."</td>";
	$plugin_body .= "<td><select multiple name=\"pag_sub[]\" size=\"5\">";
	$plugin_body .= "<option value=\"all\" selected=\"selected\">".$L['plu_allcategories']."</option>";

	foreach ($sed_cat as $i =>$x)
		{
		if ($i!='all' && $i!='system' && sed_auth('page', $i, 'R'))
			{
			$selected = ($i == $check) ? "selected=\"selected\"" : '';
			$plugin_body .= "<option value=\"".$i."\" $selected> ".$x['tpath']."</option>";
			}
		}  
  }

  
$plugin_body .= "<tr><td colspan=\"2\" align=\"center\"><input type=\"submit\" class=\"submit btn btn-big\" value=\"".$L['Search']."\" /></td></tr>";
$plugin_body .= "</table></form>";

?>


