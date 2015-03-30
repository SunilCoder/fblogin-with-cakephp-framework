<?php 

App::uses('AppController', 'Controller');
session_start();
/*require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS .'Entities' .DS.'AccessToken.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS .'Entities' .DS.'SignedRequest.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS .'HttpClients' .DS.'FacebookHttpable.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS .'HttpClients' .DS.'FacebookCurl.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS .'HttpClients' .DS.'FacebookCurlHttpClient.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS . 'FacebookSession.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS . 'FacebookSDKException.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS . 'FacebookRedirectLoginHelper.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS . 'FacebookRequestException.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS . 'FacebookAuthorizationException.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS . 'GraphObject.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS . 'FacebookResponse.php';
require_once APP . 'Vendor' . DS . 'facebook' . DS . 'php-sdk-v4'.DS.'src' . DS . 'Facebook' . DS . 'FacebookRequest.php';

*/
 App::import(
    'Vendor',
    'aUniqueIdentifier',
    array('file' => 'facebook' . DS . 'php-sdk-v4'.DS.'autoload.php')
    );

  	use Facebook\FacebookSession;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;

	
	use Facebook\GraphObject;
	use Facebook\FacebookResponse;
	use Facebook\FacebookRequest;

	

//require 'Vendor'.DS.'autoload.php';
	 class UsersController extends AppController{

	 	public function beforeFilter(){
		$this->Auth->allow('register','facebook');
	}

	 	public function index(){

	 	}
	 	public function login(){
	 	if ($this->request->is('post')) {
	 		print_r($this->request->data);

        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Session->setFlash(__('Invalid username or password, try again'));
    }

	 	}
	 	public function facebook(){
	 	
	 		FacebookSession::setDefaultApplication('462625907218760', '9378f46504ce84d5b688e804872b9d30');
	 		$helper = new FacebookRedirectLoginHelper(SITE_URL.'users/facebook');
	 		

	 		
	 		try {

					$session = $helper->getSessionFromRedirect();
					
					}catch( FacebookRequestException $ex ) {
						
					// When Facebook returns an error
					}catch( Exception $ex ) {
				// When validation fails or other local issues
				}
				if(isset($session)) {
					$request = new FacebookRequest($session, 'GET', '/me');
					$response = $request->execute();
					$graphObject = $response->getGraphObject();
					$fbid =$graphObject->getProperty('id');
					$fbname = $graphObject->getProperty('name');
					$fbemail =$graphObject->getProperty('email');
					$url="http://graph.facebook.com/".$fbid.'/picture/?type=large';
					$get_user_count = $this->User->find('first', array('conditions' => array('User.fb_id' => $fbid)));
					 if(count($get_user_count) == 0){
					 	$data = array('username' =>$fbname,
							'email'=>$fbemail,'fb_id' =>$fbid,'url' =>$url);

						if($this->User->save($data))
							
							{
								
								$u=$this->User->read();
								$this->Auth->login($u['User']);
								$this->redirect(array('action'=>'index'));
						}
					}else{

	
						$a=$this->User->find('first',array('conditions' =>array('User.fb_id' =>$fbid)));
						$this->Auth->login($a['User']);
						$this->redirect(array('action'=>'index'));
					}
		                
				}
				else
				{
				  $loginUrl = $helper->getLoginUrl();
				  
				  header("location:".$loginUrl);
				  exit;
				  
				}
			
	 	}
	 	public function logout(){
	 		 return $this->redirect($this->Auth->logout());
	 	}
	 	public function register(){

	 	}
	}

?>