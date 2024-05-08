<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	 
	public function index()
	{
        $basic_url="template/basic";
        $template_url="template/home";
        $inicio_url="template/inicio";
        $utility_url="template/utility";
        $scripts_url="template/scripts";

        if(user_log_status()=="logged")
        {
            $this->load->view($utility_url.'/head1.php');
            $this->load->view($scripts_url.'/facebook.php');
            $this->load->view($utility_url.'/navbar.php');
            $this->load->view($inicio_url.'/inicio.php');
            $this->load->view($scripts_url.'/misScripts.php');
            $this->load->view($utility_url.'/footer.php');
            $this->load->view($utility_url.'/foot1.php');

            $this->load->view($template_url.'/modalcrearevento');
        }elseif (user_log_status()=="no_active"){
            $this->load->view($template_url."/index.php");
            $this->load->view($template_url.'/modal');
            echo '<script>alert("cuenta no activada, revisa tu email para activarla")</script>';
        }else{
            $this->load->view($template_url."/index.php");
            $this->load->view($template_url.'/modal');
        }

        $this->load->view($template_url."/estadisticas.php");  
	}

    public function homes()
	{  
        $basic_url="template/basic";
        $template_url="template/home";
        
        $this->load->view($template_url."/home_no_login.php");
        $this->load->view($template_url.'/modal');
        $this->load->view($template_url."/estadisticas.php");
	}

    public function calendario()
	{
            $basic_url="template/basic";
            $template_url="template/home";

            if(user_log_status()=="logged"){
                $this->load->view($template_url."/calendario.php");
                        
            }else{
                $this->load->view($template_url."/index.php");
            }
            
            $this->load->view($template_url.'/modal');
            $this->load->view($template_url."/estadisticas.php");
	}

    public function crearevento() 
	{
        echo 'hello';
            $basic_url="template/basic";
            $template_url="template/home";
            $utility_url="template/utility";
        $scripts_url="template/scripts";
            if(user_log_status()=="logged")
            {
                $this->load->view($utility_url.'/head1.php');
            $this->load->view($scripts_url.'/facebook.php');
            $this->load->view($utility_url.'/navbar.php');
                        $this->load->view($template_url."/creareventomaps.php");
                        //$this->load->view($template_url.'/upload', array('error' => ' ' ));
                        $this->load->view($scripts_url.'/misScripts.php');
            $this->load->view($utility_url.'/footer.php');
            $this->load->view($utility_url.'/foot1.php');
                        
            }else{
                        $this->load->view($template_url."/index.php");
            }
        
            $this->load->view($template_url."/estadisticas.php");
	}

    public function evento($id)
    { 
        $basic_url="template/basic";
        $template_url="template/home";
        if(!isset($id))
        {
            header("Location:".base_url());
            die();   
        }

        $data = array('event_data' => get_event($id));
        $this->load->view($template_url."/evento.php",$data);
        $this->load->view($template_url."/estadisticas.php");
    }

    public function addComment($id_evento)
    { 
        event_add_comment($id_evento,$_POST['comment']);
        header("Location:".base_url()."index.php/home/evento/".$id_evento);
        die();
    }

    public function do_upload()
	{    
        $basic_url="template/basic";
        $template_url="template/home";
		$config['upload_path'] = './uploads/eventos/';
		$config['allowed_types'] =  'gif|jpg|png|JPG|JPEG';
		//$config['max_size']	= '';
		//$config['max_width']  = '';
		//$config['max_height']  = '';
                $user=get_user_by_id(get_id())[0];
        $config['file_name'] =  $user["id"]."_.jpg";
        $config['overwrite'] = true;

		$this->load->library('upload', $config);
        $this->upload->initialize($config);
                
		if ( ! $this->upload->do_upload())
		{
            echo $this->upload->display_errors();
            $data = array('upload_data' => $this->upload->data());
			echo var_dump($data);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			echo var_dump($data);
		}

        do_the_event($_POST);
        header("Location:".base_url());
        die();
	}
        public function do_upload_empresa()
	{    
        $basic_url="template/basic";
        $template_url="template/home";
		$config['upload_path'] = './uploads/eventos/';
		$config['allowed_types'] =  'gif|jpg|png|JPG|JPEG';
		//$config['max_size']	= '';
		//$config['max_width']  = '';
		//$config['max_height']  = '';
                $code=md5(rand(0,100000)+strtotime(date('curr_date')));
        $config['file_name'] = $code."_.jpg"; //post email empresa
        $config['overwrite'] = true;

		$this->load->library('upload', $config);
        $this->upload->initialize($config);
                
		if ( ! $this->upload->do_upload())
		{
            echo $this->upload->display_errors();
            $data = array('upload_data' => $this->upload->data());
			echo var_dump($data);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			echo var_dump($data);
		}

        do_the_event_empresa($_POST,$code);
        header("Location:".base_url());
        die();
	}


    public function efemerizalo($id_evento)
	{
        user_go_to_event($id_evento,get_id());
        header("Location:".base_url());
        die(); 
	}

    public function facebook()
	{
        $basic_url="template/basic";
        $template_url="template/facebook";
        $this->load->view($template_url."/index.php");
	}

    public function facebook2()
	{
        $basic_url="template/basic";
        $template_url="template/facebook2";
        $this->load->view($template_url."/index.php"); 
	}

     public function fbconfig()
	{
        $basic_url="template/basic";
        $template_url="template/facebook2";
        $this->load->view($template_url."/fbconfig.php");
	}
        
}
/*
                $this->load->view($basic_url."/header.php");
                $this->load->view($template_url."/background.php");
                $this->load->view($basic_url."/site-wrapper_start.php");
                    if(user_log_status()=="logged"){
                        $this->load->view($template_url.'/navbar_login');
                    }else{
                        $this->load->view($template_url.'/navbar');
                    }
		$this->load->view($template_url.'/home');
                $this->load->view($basic_url."/site-wrapper_end.php");
                
                $this->load->view($template_url.'/modal');
                
                $this->load->view($template_url.'/events');
               
                $this->load->view($basic_url."/footer.php");
                if(user_log_status()=="error"){
                    $data["script"]="$('#myModal').modal();$('#error_log').show();";
                    $this->load->view($basic_url."/js.php",$data);
                }
 * 
 */
