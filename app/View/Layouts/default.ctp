<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html>
<head>
	
	<title>
		FacebookLogin
	</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	<?php
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('style');
	?>
</head>
<body>

	
	<div id="main-wrapper">
	
 		<?php echo $this->element('Section/header');?>
		<?php echo $this->fetch('content');?> 
		 
	</div>
	
	<?php
			  echo $this->Html->script('bootstrap.min');
			  echo $this->Html->script('jquery.min');
			  //echo $this->html->script('facebook');
			  
			  
			?>
	
	
	
	
</body>


</html>
