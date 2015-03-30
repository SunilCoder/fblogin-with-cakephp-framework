
<div class="col-md-5 col-md-offset-4">
	<div id="login">
		<a href="<?php echo SITE_URL.'users/facebook';?>" id="facebookConnect"class="btn btn-facebook btn-custom btn-block">Login with facebook</a>
			<div class="hr">
				<div class="inner">
				or
				</div>
			</div>
				
						<?php echo $this->Form->create('User',array('type'=>'post'));?>
					<div class="form-group">
						<!-- <input type="text" class="form-control input-lg" name="username" placeholder="Enter username"> -->
						<?php echo $this->Form->input('username',array('class' => 'form-control input-lg','id'=>'name','placeholder' => 'Enter username'));?>

					</div>
						<div class="form-group">
							<!-- <input type="password" class="form-control input-lg" name="password" placeholder="Enter password"> -->
							<?php echo $this->Form->input('password',array('class' => 'form-control input-lg','id'=>'paassword','placeholder' => 'Enter password','type' =>'password'));?>
						</div>
						<div class="form-group">
					  <button class="btn btn-success btn-custom btn-block" type="submit">Login</button> 
							
						<a href='<?php echo SITE_URL."users/register"?>'>SignUp</a> 
						</div>
						<?php echo $this->Form->end();?>

		</div>
</div>