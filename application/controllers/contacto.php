<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

    function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$contacto_url="template/contacto";
		$utility_url="template/utility";
		$basic_url="template/home/basic";
        $template_url="template/home";
        $scripts_url="template/scripts";
        
        if(user_log_status()=="logged"){
        	$this->load->view($utility_url.'/head1.php');
        	$this->load->view($scripts_url.'/facebook.php');
        	$this->load->view($utility_url.'/navbar.php');
			$this->load->view($contacto_url.'/contacto.php');
			$this->load->view($scripts_url.'/misScripts.php');
			$this->load->view($utility_url.'/footer.php');
        	$this->load->view($utility_url.'/foot1.php');
        }else{
            $this->load->view($template_url."/index.php");
        }
        
        $this->load->view($template_url.'/modal');
        $this->load->view($template_url.'/estadisticas.php');
	}
}