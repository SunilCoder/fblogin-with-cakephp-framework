< <div id="container">
		<div class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-inner">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Facebook Login</a>
					</div>
					
						<ul class="nav navbar-nav navbar-right">
							<?php 
							if (AuthComponent::User()):?>
        					 <li><a href="<?php echo SITE_URL.'users/logout';?>">Logout</a></li>
        		
        				<?php endif;?>
      					</ul>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
						</ul>
					</div>
				</div>
		</div>
	</div> 