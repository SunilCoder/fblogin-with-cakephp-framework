<div class="col-md-5 col-md-offset-4">
	<div id ="register">
					<h1>Sign up here</h1>
						<Form>
						<?php echo $this->Form->create();?>
					<div class="form-group">
						<!-- <input type="text" class="form-control input-lg" name="username" placeholder="Enter username"> -->
						<?php echo $this->Form->input('Username',array('class' => 'form-control input-lg','id'=>'name','placeholder' => 'Enter username','label' => false));?>

					</div>
						<div class="form-group">
							<!-- <input type="password" class="form-control input-lg" name="password" placeholder="Enter password"> -->
							<?php echo $this->Form->input('Password',array('class' => 'form-control input-lg','id'=>'password','placeholder' => 'Enter password','label' =>false,'type' =>'password'));?>
						</div>
						<div class="form-group">
							<!-- <input type="password" class="form-control input-lg" name="password" placeholder="Enter password"> -->
							<?php echo $this->Form->input('Email',array('class' => 'form-control input-lg','id'=>'email','placeholder' => 'Enter email','label' =>false,'type' =>'email'));?>
						</div>
						<div class="form-group">
							<!-- <button class="btn btn-success btn-custom btn-block" type="submit">Login</button> -->
							<?php echo $this->Html->link('Signup',array('controller' =>'users','action' => 'register'),array('class' =>'btn btn-success btn-custom btn-block'));?>
						<a href='<?php echo SITE_URL."users/login"?>'>Login</a>
						</div>
						<?php echo $this->Form->end();?>

					</Form>
				</div>
						
</</div>