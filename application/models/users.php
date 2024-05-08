<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function login($email,$pass)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` WHERE `email`= "'.$email.'" and `password`= "'.$pass.'"');
        return $query->result_array();
    }
    function activation($code)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` WHERE `email_code`= "'.$code.'"');
        if(count($query->result_array())==1){
            $this->db->where('email_code', $code);
        $this->db->update('usuarios', array('activo'=>1)); 
           return true; 
        }
        return ;
    }
    function is_user($email)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` WHERE `email`= "'.$email.'"');
        if(count($query->result_array())==1){
            return TRUE;
        }else{
            return FALSE;
        }
        return ;
    }
    function is_user_fb($id_fb)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` WHERE `id_facebook`= "'.$id_fb.'"');
        if(count($query->result_array())==1){
            return TRUE;
        }else{
            return FALSE;
        }
        return ;
    }
    function get_user($id)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` WHERE `id`= "'.$id.'"');
        return $query->result_array();
    }
    function get_user_fb($id_fb)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` WHERE `id_facebook`= "'.$id_fb.'"');
        return $query->result_array();
    }
    function get_users($ids)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` WHERE `id`IN ('.$ids.')');
        return $query->result_array();
    }
            
    function register($data)
    {
        $this->db->insert('usuarios', $data); 
        
    }
    function registerEvent($data)
    {
        $this->db->insert('eventos', $data); 
    }
    function getcomments($id_evento)
    {
        $query = $this->db->query('SELECT usuarios.img_perfil,usuarios.id_facebook, usuarios.usuario, comentarios.comentario FROM `usuarios`, `comentarios` WHERE comentarios.id_usuario=usuarios.id and comentarios.id_evento='.$id_evento);
        return $query->result_array();
    }
    function getEvents()
    {
        $query = $this->db->query('SELECT * FROM `eventos` WHERE `finalizado` = 0');
        if (isset($_GET['q'])){
            $query = $this->db->query('SELECT * FROM `eventos` WHERE `info` LIKE '."'%".$_GET['q']."%'".' OR `nombre` LIKE '."'%".$_GET['q']."%'".'');
        }
        if(isset($_GET['s'])){
            $query = $this->db->query('SELECT * FROM `eventos` ORDER BY box_any ASC, box_mes DESC, box_dia ASC;');//incomplet
        }
        return $query->result_array();
    }
    function getEvents_no_filter()
    {
        $query = $this->db->query('SELECT * FROM `eventos`');
       
        return $query->result_array();
    }
    function get_events_priority()
    {
        $query = $this->db->query('SELECT * FROM `eventos` WHERE `prioridad` < 3');
        
        return $query->result_array();
    }
    function getCalendarEvents($id)
    {
        $query = $this->db->query('select * from eventos where id IN(select id_evento from asistentes where `id_usuario`= "'.$id.'")');
        return $query->result_array();
    }
    function getEvent($id)
    {
        $query = $this->db->query('SELECT * FROM `eventos` WHERE `id`= "'.$id.'"');
        return $query->result_array();
    }
    function addComment($data)
    {
        $this->db->insert('comentarios', $data); 
    }
    function isAssistent($id_evento,$id_user)
    {
        $query = $this->db->query('SELECT * FROM `asistentes` WHERE `id_evento`= "'.$id_evento.'" AND `id_usuario`= "'.$id_user.'"');
        return count($query->result_array())==1;
    }
    function getAssistents($id_evento)
    {
        $query = $this->db->query('SELECT * FROM `asistentes` WHERE `id_evento`= "'.$id_evento.'"');
        return $query->result_array();
    }
    function addAssistent($data)
    {
        $this->db->insert('asistentes', $data); 
    }
    
     function register_fb($data)
    {
        $this->db->insert('usuarios', $data); 
        
    }
    
     function update_fb($data)
    {
         $this->db->where('id_facebook', $data['id_facebook']);
        $this->db->update('usuarios', $data); 
        
    }
     function update_events($data)
    {
         $this->db->where('id', $data['id']);
        $this->db->update('eventos', $data); 
        
    }
    function estadisticas($data)
    {
        $this->db->insert('estadisticas', $data); 
        
    }
    function get_user_by_email($email)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` WHERE `email`= "'.$email.'"');
        return $query->result_array();
    }
    


    


	
	
	
	
	
	
	
	
	
	
	
	/*
	*
	*
	*	AMIGOS
	*
	*/
    function add_friend($data)
    {

        $query = $this->db->query('SELECT * FROM `amigos` where    `idusuario` = "'.$data['idusuario'].'"
            AND `idamigo` = "'.$data['idamigo'].'"');
        
        if(count($query->result_array()) == 0){
            $this->db->insert('amigos', $data);
            $consulta = $this->db->get('amigos');
            return $consulta->result();
        }

/*
        if(count($query->result_array()) == 0){
            return $consulta->result();
        }else if(count($query2->result_array()) == 0){
            $this->db->insert('amigos', $data);
            $consulta = $this->db->get('amigos');
        }else{
*/
        //USUARIO = amigo
            /*
        $query = $this->db->query('SELECT * FROM `amigos` where `idamigo` = "'.$data['idamigo'].'"
            AND `idusuario` = "'.$data['idusuario'].'"');

            if(count($query->result_array()) < 1){
                $this->db->insert('amigos', $data);
                $consulta = $this->db->get('amigos');
                return $consulta->result();
            }
        }
            */
    }


    function acc_friend($iduser,$idfriend)
    {
        $query = $this->db->query('SELECT * FROM `amigos` WHERE `idamigo` = "'.$idfriend.'"
          AND `idusuario` = "'.$iduser.'"');
        if(count($query->result_array())==1){

            $this->db->where('idusuario', $iduser);
            $this->db->where("idamigo",$idfriend);
            $this->db->update("amigos", array('estado'=>1));

            $query = $this->db->get('amigos');
            return $query->result();
        }else{
            $query = $this->db->query('SELECT * FROM `amigos` WHERE `idamigo` = "'.$iduser.'"
              AND `idusuario` = "'.$idfriend.'"');
            if(count($query->result_array())==1){

                $this->db->where('idusuario', $idfriend);
                $this->db->where("idamigo",$iduser);
                $this->db->update("amigos", array('estado'=>1));

                $query = $this->db->get('amigos');
                return $query->result();
            }
        }
    }
    
    function can_friend($iduser,$idfriend){        
        $query = $this->db->query('SELECT * FROM `amigos` WHERE `idamigo` = "'.$idfriend.'"
          AND `idusuario` = "'.$iduser.'"');
        if(count($query->result_array())==1){
            $this->db->where('idusuario', $iduser);
            $this->db->where("idamigo",$idfriend);
            $this->db->delete('amigos');
            $query = $this->db->get('amigos');
            return $query->result();
        }


        $query2 = $this->db->query('SELECT * FROM `amigos` WHERE `idamigo` = "'.$iduser.'"
            AND `idusuario` = "'.$idfriend.'"');
        if(count($query2->result_array())==1){
            $this->db->where('idusuario', $idfriend);
            $this->db->where("idamigo",$iduser);
            $this->db->delete('amigos');
            $query2 = $this->db->get('amigos');
            return $query2->result();
        }
    }

    function del_friend($iduser,$idfriend)
    {
        $query = $this->db->query('SELECT * FROM `amigos` WHERE `idamigo` = "'.$idfriend.'"
          AND `idusuario` = "'.$iduser.'"');
        if(count($query->result_array())==1){
            $this->db->where('idusuario', $iduser);
            $this->db->where('idamigo',$idfriend);
            $this->db->delete('amigos');

            $this->db->where("estado",true);
            $consulta = $this->db->get('amigos');
            return $query->result();
        }else{
            $query = $this->db->query('SELECT * FROM `amigos` WHERE `idamigo` = "'.$iduser.'"
            AND `idusuario` = "'.$idfriend.'"');
            if(count($query->result_array())==1){
                $this->db->where('idusuario', $idfriend);
                $this->db->where('idamigo',$iduser);
                $this->db->delete('amigos');

                $this->db->where("estado",true);
                $consulta = $this->db->get('amigos');
                return $query->result();
            }
        }
        return;
    }

    function del_seguidores($iduser,$idfriend)
    {
        $query = $this->db->query('SELECT * FROM `seguidores` WHERE `idusuario` = "'.$iduser.'"
          AND `idamigo` = "'.$idfriend.'"');
        if(count($query->result_array())==1){
            $this->db->where('idusuario', $iduser);
            $this->db->where('idamigo',$idfriend);
            $this->db->delete('seguidores');

            $consulta = $this->db->get('seguidores');
            return $query->result();
        }
        return;
    }






    function follow_empresas($data)
    {

        $query = $this->db->query('SELECT * FROM `seguidores` where `idusuario` = "'.$data['idusuario'].'"
            AND `idamigo` = "'.$data['idamigo'].'"');
        
        if(count($query->result_array()) == 0)
        {
            $this->db->insert('seguidores', $data);
            $consulta = $this->db->get('seguidores');
            return $consulta->result();
        }
    }
	/*
	*
	*
	*
	*/
    function search_usuarios($cadena){
            $this->db->like('nombre', $cadena, 'both');
            $this->db->or_like('nombre', $cadena, 'before');
            $this->db->or_like('nombre', $cadena, 'after');
            $this->db->or_like('apellidos', $cadena, 'both');
            $this->db->or_like('apellidos', $cadena, 'before');
            $this->db->or_like('apellidos', $cadena, 'after');
            

            /*
            //INICIAL
            $consulta = $this->db->get('usuarios');
            return $consulta->result();
            */

            /*
            //FINAL
            $this->db->select('*');
            $this->db->from('usuarios');
            $this->db->join('amigos', 'amigos.id = usuarios.idusuario');
            $this->db->join('seguidores', 'seguidores.id = usuarios.idusuario');
            $this->db->order_by("estado", "asc");
            $consulta = $this->db->get();
            */

            /*
            // INTENTO 1
            $consulta = $this->db->query('SELECT * FROM `usuarios` FULL JOIN `amigos` ON usuarios.id = amigos.idusuario');
            */

/*
            $consulta = $this->db->query('
                SELECT `usuarios`.*, `amigos`.*
                FROM `usuarios`
                JOIN `amigos`
                ON `usuarios`.id=`amigos`.idusuario
                ORDER BY `amigos`.estado
            ');
*/

            $this->db->select('*');
            $this->db->from('usuarios');
            //$this->db->join('amigos', 'amigos.idusuario = usuarios.id');
            //$this->db->join('seguidores', 'seguidores.idusuario = usuarios.id');
            //$this->db->order_by("amigos.estado", "asc");        
            //$this->db->where('usuarios.id ='.$id);
  
            return $this->db->get()->result_array();

            /*
            // INTENTO 2
            $this->db->select('*');
            $this->db->from('usuarios');
            $consulta = $this->db->join('amigos', '.id = usuariosamigos.idusuario', 'outer');
            */
    }








	/*
	*
	*
	*
	*/
    function get_friends_by_idusuario($user)
    {
        $query = $this->db->query('SELECT * FROM `amigos` where `idusuario`="'.$user.'"');
        return $query->result_array();
    }
    function get_friends_by_idamigo($user)
    {
        $query = $this->db->query('SELECT * FROM `amigos` where `idamigo`="'.$user.'"');
        return $query->result_array();
    }
    function get_friend($user)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` where `id`= "'.$user.'"');
        return $query->result_array();
    }
    function get_friend_forevents($user)
    {
        $query = $this->db->query('SELECT * FROM `usuarios` where `id`= "'.$user.'" order by `popularidad` asc');
        return $query->result_array();
    }
	/*
	*
	*
	*
	*/
    function get_list_friends()
    {
        $consulta = $this->db->get('amigos');
        return $consulta->result_array();
    }

    function get_list_empresas()
    {
        $consulta = $this->db->get('seguidores');
        return $consulta->result_array();
    }
    function get_list_public()
    {
        //$this->db->where('tipoUsu','Empresa');
        $consulta = $this->db->get('amigos');
        return $consulta->result_array();
    }
    function get_the_friends_events($iduser){
        $this->db->where('id_usuario',$iduser);
        //$this->db->order_by('popularidad asc'); 
        $consulta = $this->db->get('eventos');
        return $consulta->result_array();
    }




    function get_the_friendsOfFriends($iduser){
        $this->db->where('id',$iduser);
        //$this->db->order_by('popularidad asc');
        //$consulta = $this->db->get('amigos', 20, 10);
        $consulta = $this->db->get('usuarios');
        return $consulta->result_array();
    }
}