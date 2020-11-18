<!-- BEGIN: HEADER -->{HEADER_DOCTYPE}
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>{HEADER_TITLE}</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="skins/{PHP.skin}/css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="skins/{PHP.skin}/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="skins/{PHP.skin}/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

{HEADER_METAS}
{HEADER_COMPOPUP}
<link rel="canonical" href="{HEADER_CANONICAL_URL}" />

</head>
<body>

<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="" class="logo"><img src="skins/{PHP.skin}/img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
			
							<li class="cat-1"><a href="">Anasayfa</a></li>
							<li class="cat-3"><a href="list.php?c=news">Blog</a></li>
							<li class="cat-2"><a href="gallery.php">Galeri</a></li>
							
							<li class="cat-4"><a href="plug.php?e=contact">İletişim</a></li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
						
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<form name="login" action="plug.php?e=search&a=search" method="post">
							<div class="search-form">
							
							<input class="search-input" type="text" name="sq" placeholder="Enter Your Search ...">
							<button class="search-close"><i class="fa fa-times"></i></button>
							 </form>
							</div>
							</div>
						 
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				


<!-- Aside Nav -->
				<div id="nav-aside">
				

<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
								
								<li class="cat-1"><a href="">Anasayfa</a></li>
							<li class="cat-3"><a href="list.php?c=news">Blog</a></li>
							<li class="cat-2"><a href="gallery.php">Galeri</a></li>
							<li class="cat-4"><a href="plug.php?e=contact">İletişim</a></li>
							
									
								</ul>
							</div>
						</div>
						<!-- /catagories -->





  <!-- BEGIN: USER -->
	<div class="notices">{HEADER_NOTICES}</div>  
  <ul> 
    <li><span>{HEADER_LOGSTATUS}</span></li>
    <li>{HEADER_USER_ADMINPANEL}</li>
    <li>{HEADER_USERLIST}</li>
    <li>{HEADER_USER_PROFILE}</li>
    <li>{HEADER_USER_PFS}</li>
    <li>{HEADER_USER_PMREMINDER}</li>
    <li>{HEADER_USER_LOGINOUT}</li>
  </ul>
  <!-- END: USER -->
  
  <!-- BEGIN: GUEST -->
  <ul>
      <li><a href="{PHP.out.auth_link}">{PHP.skinlang.header.Login}</a></li>
      <li><a href="{PHP.out.register_link}">{PHP.skinlang.header.Register}</a></li>
  </ul>
  <!-- END: GUEST -->  

			   <hr>
			   
			   <a href="{PHP.out.whosonline_link}">{PHP.out.whosonline}</a> : {PHP.out.whosonline_reg_list}
			 

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->


<!-- END: HEADER -->