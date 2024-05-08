<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activation extends CI_Controller {

	 
	public function index($code)
	{
          
            $template_url="template/home";
            if($error=go_activation($code)){
                
                        $this->load->view($template_url."/index.php");
                        
                        echo '<script>alert("tu cuenta ha sido activada")</script>';
                        }
                        
	}
        
       
        
}