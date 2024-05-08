<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends CI_Controller {

	 
	public function index()
	{
            
	}
        public function loggout()
	{
            destroy_session();
            header("Location:".base_url());
            die();
        }
        public function loggin()
	{
            go_login($_POST);
            header("Location:".base_url());
            die();
        }
        
}