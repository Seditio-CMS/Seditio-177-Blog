<!-- BEGIN: MAIN -->

	<!-- Page Header -->
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('');"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<a class="post-category cat-2" href="{PAGE_CATURL}">{PAGE_CAT}</a>
								<span class="post-date">{PAGE_DATE}</span>
							</div>
							<h1>{PAGE_SHORTTITLE}</h1>
							
	<!-- BEGIN: PAGE_ADMIN -->
	{PAGE_ADMIN_UNVALIDATE} &nbsp; {PAGE_ADMIN_EDIT} &nbsp; {PAGE_ADMIN_CLONE} &nbsp; ({PAGE_ADMIN_COUNT})
	<!-- END: PAGE_ADMIN -->
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->



		
		
		
		
		
		
		
		
	<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
							
									
							
							<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="skins/{PHP.skin}/img/ad-2.jpg" alt="">
							</a>
						</div>
						<!-- ad -->
							
										
							<figure class="figure-img">
									<img class="img-responsive" width="%100" src="{PAGE_THUMB}" alt="{PAGE_SHORTTITLE}">
								</figure>
							
							
							{PAGE_TEXT}

	<!-- BEGIN: PAGE_MULTI -->

		<div class="paging">
		   <ul class="pagination">
			<li class="prev">{PAGE_MULTI_PREV}</li>
			{PAGE_MULTI_TABNAV}
			<li class="next">{PAGE_MULTI_NEXT}</li>
		  </ul>
		  {PAGE_MULTI_SELECT} 
		</div>

		<div class="block">
			<h5>{PHP.skinlang.page.Summary}</h5>
			{PAGE_MULTI_TABTITLES}
		</div>

	<!-- END: PAGE_MULTI -->

	<!-- BEGIN: PAGE_FILE -->

		<div class="download">

			<a href="{PAGE_FILE_URL}">Download : {PAGE_SHORTTITLE} {PAGE_FILE_ICON}</a><br/>
			Size: {PAGE_FILE_SIZE}KB, downloaded {PAGE_FILE_COUNT} times

		</div>

	<!-- END: PAGE_FILE -->

							
							<div class="headline no-margin"><h4>{PHP.skinlang.page.Comments} <span class="comments-amount">{PAGE_COMMENTS}</span></h4></div>
	{PAGE_COMMENTS_DISPLAY}
							
							
							
							</div>
							<div class="post-shares sticky-shares">
								<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
						</div>

						
						
						

					</div>
					<!-- /Post content -->

					
					
					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="skins/{PHP.skin}/img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->

			
			
			
									
						
						
						
					</div>
					<!-- /aside -->
					
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

<!-- END: MAIN -->
