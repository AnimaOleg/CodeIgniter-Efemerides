<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '1619667834918625','0c0f00ec1a39094c4edd5a12cc9b00ee' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper(base_url()."index.php/home/fbconfig");
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');   
            $fbfirstn = $graphObject->getProperty('first_name');// To Get Facebook email ID
            $fblastn = $graphObject->getProperty('last_name');// To Get Facebook email ID
            echo var_dump($graphObject);
	/* ----b Session Variables -----*/
            $arr= [];
            $arr['FBID'] = $fbid; 
            $arr['FULLNAME'] = $fbfullname;
            $arr['EMAIL'] =  $femail;
            $arr['FIRSTNAME'] =  $fbfirstn;
            $arr['LASTNAME'] =  $fblastn;
            go_facebook($arr);
	   // $_SESSION['FBID'] = $fbid;           
       // $_SESSION['FULLNAME'] = $fbfullname;
	 //   $_SESSION['EMAIL'] =  $femail;
            
    /* ---- header location after session ----*/
  header("Location:".base_url());
  //$output = "<script>console.log( 'Debug Objects: " . implode( ',', $graphObject) . "' );</script>";
} else {
    $params = array('email','public_profile'); //    $params = array('email','public_profile'); //

  $loginUrl = $helper->getLoginUrl($params);
 header("Location: ".$loginUrl);
}
?>