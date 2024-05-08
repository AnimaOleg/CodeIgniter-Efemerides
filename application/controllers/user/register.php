<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	 
	public function index()
	{
            $error=go_register($_POST);
            
           $basic_url="template/basic";
            $template_url="template/home";
            
                        $this->load->view($template_url."/index.php");
                        $this->load->view($template_url.'/modal');
                        if($error=='login suxcesfull'){
                        echo '<script>alert("registro completado, revisa tu email para activar tu cuenta")</script>';
                        }
                        if($error=="email ya existe"){
                        echo '<script>alert("este email ya existe")</script>';    
                        }
	}
       
        
}