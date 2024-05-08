<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	 
	public function index()
	{
        $basic_url="template/basic";
        $template_url="template/login";
        
        $data["base_url"]=$this->load->helper('url');
        $this->load->view($basic_url."/header.php",$data);
        $this->load->view($template_url."/navbar_login.php");
        $this->load->view($template_url."/index_login.php");
        $this->load->view($template_url.'/carrusell_login.php');
        $this->load->view($basic_url."/footer.php");
	}
}
