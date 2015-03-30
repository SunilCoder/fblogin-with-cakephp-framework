<?php 
	/**
	 * 
	 */
	 class User extends AppModel
	 {
	 	
	 	public  $validate = array(
	 		'username' =>array(
	 			'rule' => 'isUnique',
	 			'allowEmpty' =>false,
	 			'required' =>'true',
	 			'message' =>'plesae enter your username'
	 			),
	 			'password' =>array(
	 			'rule' => 'notEmpty',
	 			'required' =>false)
	 		);
	 } 
?>