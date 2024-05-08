<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cron extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	 
	public function index()
	{
           // echo 'hi';
        var_dump(update_priority());
	}
        
        public function finalizado()
	{
           // echo 'hi';
        var_dump(update_fecha());
	}

        
}
