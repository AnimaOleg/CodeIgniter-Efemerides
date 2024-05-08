<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tiempo extends CI_Controller {

	 
	public function index()
	{
            
	}
        public function time()
	{
            estadisticas($_POST["url"],$_POST["time"],$_POST["fecha"]);
            return 'hi';
        }
        
        
}