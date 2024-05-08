<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_empresa extends CI_Controller {

	 
	public function index()
	{
            $error=go_register_empresa($_POST);
            
           $basic_url="template/basic";
            $template_url="template/home";
            
                        $this->load->view($template_url."/index.php");
                        $this->load->view($template_url.'/modal');
                        echo '<script>alert("registro completado, revisa tu email para activar tu cuenta")</script>';
	}
       
        
}