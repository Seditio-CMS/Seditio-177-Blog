<!-- BEGIN: ADMIN_HOME -->

<div class="content-box sedtabs"><div class="content-box-header">					
	<h3>{PHP.L.Home}</h3>					
	<ul class="content-box-tabs">
		  <li><a href="{PHP.sys.request_uri}#tab1" class="selected">{PHP.L.Pages}</a></li>
		 
		  <li><a href="{PHP.sys.request_uri}#tab3">{PHP.L.adm_infos}</a></li>
	</ul>					
	<div class="clear"></div>					
</div>

<div class="content-box-content">
	
<div class="tab-content default-tab" id="tab1">	
	
	<h4>{PHP.L.adm_valqueue} :</h4>

	<ul class="arrow_list">		
		<li>{HOME_PAGE_QUEUED}</li>
		<li>{HOME_PAGE_ADDNEWENTRY}</li>
	</ul>

</div>




<div class="tab-content" id="tab3">

	<h4>{PHP.L.adm_infos} :</h4>

	<div name="log" id="infos">
		
	<table class="cells striped" >	
		<tr>
			<td>{PHP.L.adm_phpver} :</td>
			<td style="text-align:center;">{INFOS_PHPVERSION}</td>
		</tr>
		<tr>
			<td>{PHP.L.adm_zendver}</td>
			<td style="text-align:center;">{INFOS_ZENDVERSION}</td>
		</tr>
		<tr>
			<td>{PHP.L.adm_interface} :</td>
			<td style="text-align:center;">{INFOS_INTERFACE}</td>
		</tr>
		<tr>
			<td>{PHP.L.adm_os} :</td>
			<td style="text-align:center;">{INFOS_OS}</td>
		</tr>
		<tr>
			<td>SQL :</td>
			<td style="text-align:center;">{INFOS_MYSQL}</td>
		</tr>
	</table>

	</div>

</div>

</div>

</div>

<!-- END: ADMIN_HOME -->
