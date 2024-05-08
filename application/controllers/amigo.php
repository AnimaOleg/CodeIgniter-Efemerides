<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Amigo extends CI_Controller {

    function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
        $amigo_url="template/amigo";
        $utility_url="template/utility";
        $basic_url="template/home/basic";
        $template_url="template/home";
        $scripts_url="template/scripts";
        $css_url="assets/css";
        $image_url="image";
        
        if(user_log_status()=="logged"){
        	$this->load->view($utility_url.'/head1.php');
        	$this->load->view($scripts_url.'/facebook.php');
        	$this->load->view($utility_url.'/navbar.php');

            $this->load->view($amigo_url.'/amigo.php');
            
			$this->load->view($scripts_url.'/misScripts.php');
            //$this->load->view($css_url.'/style_buscador.css');
			$this->load->view($utility_url.'/footer.php');
        	$this->load->view($utility_url.'/foot1.php');
        }else{
            $this->load->view($template_url."/index.php");
        }
        
        $this->load->view($template_url.'/modal');
        $this->load->view($template_url.'/estadisticas.php');
	}
    

    public function update_friendsCont(){
        $amigo_url="template/amigo";
        $this->load->view($amigo_url."/lista_amigos.php");
    }
    public function update_empresasCont(){
        $amigo_url="template/amigo";
        $this->load->view($amigo_url."/lista_empresas.php");
    }
    public function update_requestsCont(){
        $amigo_url="template/amigo";
        $this->load->view($amigo_url."/lista_invitaciones.php");
    }



    public function add_friendCont()
    {
        add_friend();
        return $this->update_requestsCont();
    }
    public function acc_friendCont()
    {
        acc_friend();
        //$this->update_requestsCont();
        return $this->update_friendsCont();
    }
    public function can_friendCont()
    {
        can_friend();
        return $this->update_requestsCont();
    }
    public function del_friendCont()
    {
        del_friend();
        return $this->update_friendsCont();
    }
    public function del_seguidoresCont()
    {
        del_seguidores();
        return $this->update_empresasCont();
    }
    public function follow_empresasCont()
    {
        follow_empresas();
        return $this->update_empresasCont();
    }



    public function autocompletar_usuarios(){
        echo search_usuarios($_POST['info']);
    }
    /*
    public function view_autocompletar(){
        $datos['title'] = 'Buscador';
        $datos['contenido'] = 'autocompletado';
        $this->load->view ('plantillas/plantilla', $datos);
    }
    */
}