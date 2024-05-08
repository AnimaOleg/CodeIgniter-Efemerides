<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	 
	public function index()
        {
            $template_url="template/admin";
            $this->load->view($template_url."/login.php");
        }
        public function login()
        {
            $basic_url="template/basic";
        $template_url="template/home";
        $inicio_url="template/inicio";
        $utility_url="template/utility";
        $scripts_url="template/scripts";
            $template_url="template/admin";
            if(($_POST['username']=='admin')||($_POST['password']=='_3f3m3r1d35_f0r_pr351d3nt_')){
         $this->load->view($utility_url.'/head1.php');
         $this->load->view($scripts_url.'/misScripts.php');
            $this->load->view($scripts_url.'/facebook.php');
           
            $this->load->view($template_url."/dashboard.php");
            
            //$this->load->view($utility_url.'/footer.php');
            $this->load->view($utility_url.'/foot1.php');
            
            
            }  else {
              $template_url="template/admin";
            $this->load->view($template_url."/login.php");  
            }
        }
}