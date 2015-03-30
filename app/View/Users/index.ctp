

<h1>
<?php echo 'Your are cuurently logged in as <span>'.(AuthComponent::user('username') ).'<i class="fa fa-angle-down"></i></span>'; ?>
</h1>
<div >
	<?php echo '<img src="'.(AuthComponent::user('url')).'">'; ?>
					

</div>