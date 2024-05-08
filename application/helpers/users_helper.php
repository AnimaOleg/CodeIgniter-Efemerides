<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if(!function_exists('go_login')) // intenta logeat el usuario
{
  function go_login($arr)
  {
                $ci =& get_instance();
                if(user_log_status()=="error"){
                $ci->session->unset_userdata('logged_in');
                }
    if ((isset($arr["email"]))&&($arr["pass"]!="")){
                   
                $result=$ci->users->login($arr["email"],$arr["pass"]);
                login_on_db($result);
                return TRUE;
            }else {
            return FALSE;
            } 
  }
}
if(!function_exists('go_register')) // registrar el usuario
{
  function go_register($arr)
  {
                $ci =& get_instance();
               
               if(!is_user_on_db($arr["Register_Email"])){
                   $code=md5($arr["Register_Email"]+microtime());
                   $data = array(
                    //'dni' => $arr["Register_DNI"] ,
                    'usuario' => $arr["Register_User"] ,
                    'nombre' => $arr["Register_Nombre"] ,
                    'apellidos' => $arr["Register_Apellidos"] ,
                    'codigoPostal' => $arr["Register_CP"] ,
                    //'telefono' => $arr["Register_Tel"] ,
                    'provincia' => $arr["Register_Prov"] ,
                    'email' => $arr["Register_Email"] ,
                    'email_code' => $code ,
                    'password' => $arr["Register_Password"] ,
                    'activo' => 0 ,   
                       'tipoUsu' => "usuario",
                    );

                   
                    $ci->users->register($data);
                    $ci->load->library('email');

                    $ci->email->from('efemeridessupport@efemerides.com', 'efemerides');
                    $ci->email->to($arr["Register_Email"]);

                    $ci->email->subject('registro en efemerides');
                    $ci->email->message('bienvenido a efemerides tu calendario social. para activar tu cuenta clica el enlace '.base_url().'index.php/user/activation/index/'.$code);

                    $ci->email->send();
                                        
                    return 'login suxcesfull';
               }  else {
                   return "email ya existe";
               }      
  }
}
if(!function_exists('go_register_empresa')) // registrar el usuario
{
  function go_register_empresa($arr)
  {
                $ci =& get_instance();
               foreach ($arr as $value){
                   if($value==""){
                       return FALSE;
                   }
               }
               if(!is_user_on_db($arr["Register_Email"])){
                   $code=md5($arr["Register_Email"]+microtime());
                   $data = array(
                    'dni' => $arr["Register_DNI"] ,
                    'usuario' => $arr["Register_User"] ,
                    'nombre' => $arr["Register_Nombre"] ,
                    'apellidos' => $arr["Register_Apellidos"] ,
                    'codigoPostal' => $arr["Register_CP"] ,
                    'telefono' => $arr["Register_Tel"] ,
                    'provincia' => $arr["Register_Prov"] ,
                    'email' => $arr["Register_Email"] ,
                    'email_code' => $code ,
                    'password' => $arr["Register_Password"] ,
                    'activo' => 0 ,
                    'tipoUsu' => "empresa",   
                    );
                    $ci->users->register($data);
                    $ci->load->library('email');

                    $ci->email->from('efemeridessupport@efemerides.com', 'efemerides');
                    $ci->email->to($arr["Register_Email"]);

                    $ci->email->subject('registro en efemerides');
                    $ci->email->message('bienvenido a efemerides tu calendario social. para activar tu cuenta clica el enlace '.base_url().'index.php/user/activation/index/'.$code);

                    $ci->email->send();
                                        
                    return 'login suxcesfull';
               }  else {
                   return "email ya existe";
               }      
  }
}
if(!function_exists('go_activation')) // registrar el usuario
{
  function go_activation($code)
  {
      $ci =& get_instance();

      return $ci->users->activation($code);
      return false;
  }
}
if(!function_exists('go_facebook')) // registrar el usuario
{
    
    
  function go_facebook($arr)
  {
                $ci =& get_instance();
               if(!is_user_on_db_fb($arr["FBID"])){
                   $data = array(
                    'id_facebook' => $arr["FBID"] ,
                    'activo' => 1 ,
                    'usuario' => $arr["FULLNAME"] ,
                    'nombre' => $arr["FIRSTNAME"] ,
                    'apellidos' => $arr["LASTNAME"] ,
                    'email' => $arr["EMAIL"] 
                    );
                   $ci->users->register_fb($data);
               }  else {
                   $data = array(
                    'id_facebook' => $arr["FBID"] ,
                    'activo' => 1 ,
                    'usuario' => $arr["FULLNAME"] ,
                    'nombre' => $arr["FIRSTNAME"] ,
                    'apellidos' => $arr["LASTNAME"] ,
                    'email' => $arr["EMAIL"] 
                    );
                   $ci->users->update_fb($data);
               }

               $result=$ci->users->get_user_fb($arr["FBID"]);
               if(count($result)==1){
                   foreach ($result as $value) {
                     $ide=$value['id'];  
                   }
                   
               }

               $newdata = array(
                   'id' => $ide,
                   'image'  => "https://graph.facebook.com/".$arr["FBID"]."/picture?type=large",
                   'username'  => $arr["FULLNAME"],
                   'email'     => $arr["EMAIL"],
                   'logged_in' => "logged",
                   'activo' => 1 
               );
               $ci->session->set_userdata($newdata);
  }
}
if(!function_exists('is_login')) // esta logeado el usuario? 
{ 
  function is_login()
  {
    $ci =& get_instance();
    return $ci->session->userdata('logged_in');
                
  }
}
if(!function_exists('get_email')) // esta logeado el usuario? 
{ 
  function get_email()
  {
    $ci =& get_instance();
    return $ci->session->userdata('email');
                
  }
}
if(!function_exists('get_id')) // esta logeado el usuario? 
{
  function get_id()
  {
    $ci =& get_instance();
    return $ci->session->userdata('id');
                
  }
}
if(!function_exists('get_perfil_img')) // esta logeado el usuario? 
{
  function get_perfil_img()
  {
    $ci =& get_instance();
    return $ci->session->userdata('image');
                
  }
}
if(!function_exists('get_fullname')) // esta logeado el usuario? 
{
  function get_fullname()
  {
    $ci =& get_instance();
    return $ci->session->userdata('username');
                
  }
}
if(!function_exists('get_user_perfil_img')) // esta logeado el usuario? 
{
  function get_user_perfil_img($arr)
  {
                $ci =& get_instance();

                if($arr["img_perfil"] != NULL){
                    return $arr["img_perfil"];
                }else if($arr["id_facebook"] != NULL){
                    return "https://graph.facebook.com/".$arr["id_facebook"]."/picture?type=large";
                }else{
                  return NULL;
                }
  }
}

if(!function_exists('destroy_session'))
{
  function destroy_session()
  {
    $ci =& get_instance();
    $ci->session->sess_destroy();
                
  }
}



if(!function_exists('user_log_status'))
{
  function user_log_status()
  {
                $ci =& get_instance();
                if($ci->session->userdata('logged_in')){
                    if($ci->session->userdata('logged_in')=="logged"){
                        if ($ci->session->userdata('activo')!=0){
                        return "logged";
                        }else{
                            return "no_active";
                        }
                    }  else {
                        return "error";
                    }
                }else{
                    return "guess";
                }
  }
}
  
 

if(!function_exists('login_on_db'))
{
    //formateamos la fecha y la hora, función de cesarcancino.com
  function login_on_db($result)
  {
                $ci =& get_instance();
    if(count($result)==1){
                     foreach ($result as $row)
                    {
                         $id=$row['id'];
                         $user=$row['usuario'];
                         $mail=$row['email'];
                         $activo=$row['activo'];
                    }
                    $newdata = array(
                       'id' => $id,
                        'activo' => $activo ,
                       'username'  => $user,
                       'email'     => $mail,
                       'logged_in' => "logged"
                   );
                }else{
                    $newdata = array(
                      'logged_in' => "error"
                    );
                }
                $ci->session->set_userdata($newdata);
                
  }
}
if(!function_exists('is_user_on_db'))
{
  function is_user_on_db($data)
  {
                $ci =& get_instance();
                return $ci->users->is_user($data);
   
  }
}
if(!function_exists('is_user_on_db_fb'))
{
  function is_user_on_db_fb($data)
  {
                $ci =& get_instance();
                return $ci->users->is_user_fb($data);
   
  }
}
if(!function_exists('do_the_event'))
{
  function do_the_event($arr)
  {
                $ci =& get_instance();
                $user=get_user_by_id(get_id())[0];
                $data = array(
                    'id_usuario' => get_id(),
                    'email' => $user['email'],
                    'imagen_perfil' => get_perfil_img(),
                    'nombre' => $arr["nombre"],
                    'info' => $arr["info"] ,
                    'tags' => $arr["tags"] ,
                    'box_euro' => $arr["box_euro"] ,
                    'box_centimo' => $arr["box_centimo"] ,
                    'box_hora' => $arr["box_hora"] ,
                    'box_minuto' => $arr["box_minuto"] ,
                    'box_dia' => $arr["box_dia"] ,
                    'box_mes' => $arr["box_mes"] ,
                    'box_any' => $arr["box_any"] ,
                    'box_telefono' => $arr["box_telefono"] ,
                    'img' => $user['id'],
                    'prioridad' => 1,
                    );
                $ci->users->registerEvent($data);
                
   
  }
}
if(!function_exists('do_the_event_empresa'))
{
  function do_the_event_empresa($arr,$code)
  {
                $ci =& get_instance();
                $empresa=get_user_by_email($arr["email"])[0];
                echo var_dump($empresa);
                $data = array(
                    'id_usuario' => $empresa['id'],
                    'email' => $empresa['email'],
                    'imagen_perfil' => 'null',
                    'nombre' => $arr["nombre"],
                    'info' => $arr["info"] ,
                    'tags' => $arr["tags"] ,
                    'box_euro' => $arr["box_euro"] ,
                    'box_centimo' => $arr["box_centimo"] ,
                    'box_hora' => $arr["box_hora"] ,
                    'box_minuto' => $arr["box_minuto"] ,
                    'box_dia' => $arr["box_dia"] ,
                    'box_mes' => $arr["box_mes"] ,
                    'box_any' => $arr["box_any"] ,
                    'box_telefono' => $arr["box_telefono"] ,
                    'img' => $code,
                    'prioridad' => $arr["prioridad"],
                    );
                $ci->users->registerEvent($data);
                
   
  }
}             
if(!function_exists('validate_the_event'))
{
  function validate_the_event($arr)
  {
                $ci =& get_instance(); 
            $val=false;
            for($i=1;$i<32;$i++){
                $valday=$arr["box_dia"];
                if($valday==$i){
                    $val=true;
                    
                }
            }
            if(!$val){
                return false;
            } 
            
            $val=false;
            for($i=1;$i<13;$i++){
                
                $valday=$arr["box_mes"];
                if($valday==$i){
                    $val=true;
                    
                }
            }
            if(!$val){
                return false;
            }
            return true;
                    //$arr["box_any"];
  }
}

if(!function_exists('get_the_events'))
{
  function get_the_events()
  {
                $ci =& get_instance();
                //return $ci->users->getEvents();
                $arrayproces=$ci->users->getEvents();
                $arrayfour = array();
                $arrayfin = array();
                $prioridadcount=0;
               
                for($i=0;count($arrayproces)>0;$i++){ 
                    
                    if($prioridadcount==4){
                        $arrayfour=array_sort($arrayfour, 'prioridad', SORT_DESC);
                        $arrayfour = array_values($arrayfour);
                        array_push($arrayfin,$arrayfour);
                         $prioridadcount=0;
                        
                        $arrayfour = array();
                    }
                    if($prioridadcount<4){
                        
                        if($arrayproces[$i]["prioridad"]==NULL){
                            $eventprocesprioridad=1;
                        }
                        if($arrayproces[$i]["prioridad"]==1){
                            $eventprocesprioridad=1;
                        }
                        if($arrayproces[$i]["prioridad"]==2){
                            $eventprocesprioridad=2;
                        }
                        if($arrayproces[$i]["prioridad"]==3){
                            $eventprocesprioridad=4;
                        }
                        if($eventprocesprioridad+$prioridadcount<=4){
                            $prioridadcount=$prioridadcount+$eventprocesprioridad;
                            array_push($arrayfour,$arrayproces[$i]);
                            unset($arrayproces[$i]);
                            $arrayproces=array_values($arrayproces);
                            $i=0;
                        }
                    }
                   // exit(var_dump($arrayproces));
                    if(count($arrayproces)-1==$i){
                        
                        array_sort($arrayfour, 'prioridad', SORT_DESC);
                        array_push($arrayfin,$arrayfour);
                         $prioridadcount=0;
                        
                        $arrayfour = array();
                        break;
                    }
                }
                
               return $arrayfin;
  }
}
if(!function_exists('get_comments'))
{
  function get_comments($id_evento)
  {
                $ci =& get_instance();
               return $ci->users->getcomments($id_evento);
  }
}
if(!function_exists('get_event'))
{
  function get_event($id)
  {
                $ci =& get_instance();
               return $ci->users->getEvent($id);
  }
}
if(!function_exists('event_add_comment'))
{
  function event_add_comment($id_evento,$comment)
  {
                $ci =& get_instance();
                $data = array(
                    'id_usuario' => get_id(),
                    'id_evento' => $id_evento,
                    'comentario' => $comment,
                    );
               return $ci->users->addComment($data);
  }
}

if(!function_exists('get_calendar_events'))
{
  function get_calendar_events()
  {
                $ci =& get_instance();
                $js='';
                $arr=$ci->users->getCalendarEvents(get_id());
                if(count($ci->users->getCalendarEvents(get_id()))>0){
                    foreach ($arr as $value) {
                        $mes=$value['box_mes']-1;
                        $js.='{';
                        $js.=' showOn: "button",
                                buttonImage: "'.$value['img'].'_.jpg",
                                buttonImageOnly: true,';
                        $js.='title: "'.$value['nombre'].'",';
                        $js.='start: new Date('.$value['box_any'].',' .$mes.','.$value['box_dia'].'),';
                        $js.='url: "'.base_url().'index.php/home/evento/'.$value['id'].'"';
                        $js.='},';
                        
                    }
                     //$js.="$('.fc-event-container').find('a').attr('href')";
                }
                
                return $js;
  }
}
if(!function_exists('get_calendar_events_img'))
{
  function get_calendar_events_img()
  {
      
                $ci =& get_instance();
                $js='';
                $arr=$ci->users->getCalendarEvents(get_id());
                if(count($ci->users->getCalendarEvents(get_id()))>0){
                    $i=0;
                    echo '<div id="events" style="display:none;">';
                    foreach ($arr as $value) {
                        $i++;
                        if(strlen($value['box_mes'])==1){
                            $mes="0".$value['box_mes'];
                        }else{
                            $mes=$value['box_mes'];
                        }
                        if(strlen($value['box_dia'])==1){
                            $dia="0".$value['box_dia'];
                        }else{
                            $dia=$value['box_dia'];
                        }
                        $date=$value['box_any']."-".$mes."-".$dia;
                        //$js.='elem=$(\'td[data-date="'.$date.'"]\'); '
                                
                        echo '<div data-dateitem="'.$date.'" class="item">
                            <a href="'.base_url().'index.php/home/evento/'.$value['id'].'">
      <img src="'.base_url().'uploads/eventos/'.$value['img'].'_.jpg" alt="">
          
      <div class="carousel-caption">
        
      </div>
      </a>
    </div>';
                        
                    }
                    echo '</div>';
                }
                
                return;
  }
}

if(!function_exists('user_go_to_event'))
{
  function user_go_to_event($id_evento,$id_user)  {
                $ci =& get_instance();
                if(!$ci->users->isAssistent($id_evento,$id_user)){
                        $newdata = array(
                   'id_evento' => $id_evento,
                   'id_usuario'  => $id_user
                   
               );
                        $ci->users->addAssistent($newdata);
                }
                
               return ;
  }
}

if(!function_exists('get_assistants_to_event'))
{
  function get_assistants_to_event($id_evento)  {
                $ci =& get_instance();
                $str="";
                $index=0;
                
                foreach ($ci->users->getAssistents($id_evento) as $value) {
                    if($index!=0){
                       $str.=",";           
                    }
                    $str.=$value["id_usuario"];
                    $index++;
                }
               if($str==""){return;}
                return $ci->users->get_users($str);
                
                  
  }
}
if(!function_exists('estadisticas'))
{
  function estadisticas($uri,$tiempo,$fecha)
  {
                $ci =& get_instance();
                    $data = array(
                   
                   'id_usuario'  => get_id(),
                   'tiempo'  => $tiempo,
                   'pagina'  => $uri,
                    'date'  => $fecha,
               );
                   return $ci->users->estadisticas($data);
               
               return false;
  }
}

if(!function_exists('get_user_by_email'))
{
  function get_user_by_email($email)
  {
                $ci =& get_instance();
                
                   return $ci->users->get_user_by_email($email);
               
  }
}

if(!function_exists('get_user_by_id'))
{
  function get_user_by_id($id)
  {
                $ci =& get_instance();
                
                   return $ci->users->get_user($id);
               
  }
}
 if(!function_exists('update_priority'))
{
  function update_priority()
  {
                $ci =& get_instance();
                
                    $array_prior=$ci->users->get_events_priority();
                   $tercio=count($array_prior)/3;
                   
                   for($i=0;$i<count($array_prior);$i++){
                       
                       $array_prior[$i]["asistentes"]=count($ci->users->getAssistents($array_prior[$i]["id"]));
                   }
                  
                   $array_prior_sort=array_sort($array_prior,"asistentes",SORT_DESC);
                   //return $array_prior_sort;
                   $array_prior_sort = array_values($array_prior_sort);
                   for($i=0;$i<count($array_prior_sort);$i++){
                      
                       if($i<$tercio){
                          $array_prior_sort[$i]["prioridad"]=2; 
                       }else{
                          $array_prior_sort[$i]["prioridad"]=1;  
                       }
                   }
                   
                  for ($i=0;$i<count($array_prior_sort);$i++){
                $ci->users->update_events($array_prior_sort[$i]);  
                  }
                return $array_prior_sort;
               
  }
}
if(!function_exists('update_fecha'))
{
  function update_fecha()
  {
                $ci =& get_instance();
                
                    $array_prior=$ci->users->getEvents_no_filter();
                   
                   
                  
                   
                  for ($i=0;$i<count($array_prior);$i++){
                      if(new DateTime() > new DateTime($array_prior[$i]["box_any"]."-".$array_prior[$i]["box_mes"]."-".$array_prior[$i]["box_dia"])){
                          $array_prior[$i]["finalizado"]=1;
                          $ci->users->update_events($array_prior[$i]);  
                      }
                  }
                return $array_prior;
               
  }
}


/////////////////////////////////////////funciones especiales//////////////////////////////
function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}














































/*
*
*   PROFILES (fullfriend-arefriends)
*
*/
if(!function_exists('get_fullfriend'))
{
  function get_fullfriend()
  {
    $ci =& get_instance();
    return $ci->session->userdata('username');



    $ci =& get_instance();
    return $ci->users->get_fullfriend();
                
  }
}

if(!function_exists('are_friends'))
{
  function are_friends()
  {
                $ci =& get_instance();
                $data = array(
                    'id_usuario' => get_id(),
                    'id_evento' => $id_evento,
                    'comentario' => $comment,
                    );
               return $ci->users->addComment($data);
  }
}

/*
*
*   FUNCIONES PERFILES
*
*/
if(!function_exists('add_friend'))
{
  function add_friend()
  {
      $ci =& get_instance();
      $idfriend=$_POST['idamigo_test'];

      $data = array(
          'idusuario'  => get_id(),
          'idamigo'  => $idfriend,
          'estado'  => false,
          'fechaPeticion' => date("Y-m-d"),
      );
     return $ci->users->add_friend($data);
  }
}

if(!function_exists('accept_friend'))
{
  function acc_friend()
  {
      $ci =& get_instance();
      return $ci->users->acc_friend(get_id(), $_POST['idamigo_test']);
  }
}

if(!function_exists('can_friend'))
{
  function can_friend()
  {
      $ci =& get_instance();
      return $ci->users->can_friend(get_id(), $_POST['idamigo_test']);
      //return $ci->users->can_friend(get_id(), $_POST['idamigo_test']);
  }
}

if(!function_exists('del_friend'))
{
  function del_friend()
  {
    //echo '<script>console.log("'.get_id()." ".$_POST["idamigo_test"].'")</script>';
      $ci =& get_instance(get_id(), $_POST['idamigo_test']);
      return $ci->users->del_friend(get_id(), $_POST['idamigo_test']);
  }
}

if(!function_exists('del_seguidores'))
{
  function del_seguidores()
  {
      $ci =& get_instance(get_id(), $_POST['idamigo_test']);
      return $ci->users->del_seguidores(get_id(), $_POST['idamigo_test']);
  }
}


if(!function_exists('follow_empresa'))
{
  function follow_empresas()
  {

      $ci =& get_instance();
      $idfriend=$_POST['idamigo_test'];

      $data = array(
          'idusuario'  => get_id(),
          'idamigo'  => $idfriend,
          'estado'  => true,
          'fechaPeticion' => date("Y-m-d"),
      );
     return $ci->users->follow_empresas($data);
  }
}










































/*
*
*   BUSCADOR
*
*/
if(!function_exists('search_usuarios'))
{
  function search_usuarios($data)
  {
    $ci =& get_instance();
    $arr = $ci->users->search_usuarios($data);
    $js="";

      if($arr != FALSE)
      {
        if($data != FALSE)
        {
          foreach($arr as $fila)
          {

            if($fila['id'] != get_id())
            {
              $js .= '<div style="cursor:hand; float:left; background: lightgrey; margin:0px; margin-bottom:3px;
                    padding:0px; width:100%; overflow:auto;">';

              $js .= '<a href="'.base_url().'index.php/perfil?ref='.$fila['id'].'">';
              $js .= '<div style="width:25%; heigth:25%; float:left; margin-left:10px; background:grey;">';
              $js .= '<img src="' . get_user_perfil_img($fila) . '" style="float:left; width:100%; heigth:100%;"/>';
              $js .= '</div>';
              $js .= '</a>';
              $js .= ''.$fila['nombre'].' ' . $fila['apellidos'].'<br>';


              if($fila['tipoUsu'] == 'Empresa')
              {
                $js .= ' <input type="button" name="addfriend" value="Seguir" 
                onclick=\'follow_empresasScript("'.$fila['id'].'")\'/>';
              }
              else if($fila['tipoUsu'] == 'Usuario')
              {
               $js .= ' <input type="button" name="addfriend" value="Agregar" 
                onclick=\'add_friendScript("'.$fila['id'].'")\'/>';
              }
              else
              {
                $js .= ' <input type="button" name="addfriend" value="Agregar" 
                onclick=\'add_friendScript("'.$fila['id'].'")\'/>';
              }

              $js .= '</div>';
            }
            
          }
        }
      }else{
        $js .= 'No existe ';

      }
      return $js;
  }
}



/*
*
*   PETICIONES
*
*/
if(!function_exists('get_list_friends_invitaciones'))
{
  function get_list_friends_invitaciones()
  {
    $ci =& get_instance();
    $js = "";

    $arr = $ci->users->get_list_friends();

    foreach ($arr as $value)
    {
      //vista USER
       if($value['idusuario'] == get_id() && $value['estado']==false)
       {
          $xx = $ci->users->get_friend($value['idamigo']);

          foreach ($xx as $value2)
          {
            $js .= '<div style="cursor:hand; float:left; background: lightgrey; margin:0px; margin-bottom:16px;
                    padding:0px; width:100%; overflow:auto; border: 0px;">';

            $js .= '<a href="'.base_url().'index.php/perfil?ref='.$value2['id'].'">';
            $js .= '<div style="width:35%; heigth:35%; float:left; margin-left:10px; background:grey;">';
            $js .= '<img src="'.get_user_perfil_img($value2).'" style="width:100%; heigth:100%"/>';
            $js .= '</div>';
            $js .= '</a>';

            $js .="<input type='button' name='cancelFriend' value='Cancelar'
                   onclick=\"can_friendScript('" . $value['idamigo'] . "')\"
                   style='background:red;color:white'/></a><br>";

            $js .= '</div>';
            $js .= 'Has agregado a ' . $value2['nombre'] . ' ' .$value2['apellidos'] . '<br>';
          }
        }

        

        //vista FRIEND
        if($value['idamigo'] == get_id() && $value['estado']==false)
        {
          $xx = $ci->users->get_friend($value['idusuario']);

          foreach ($xx as $value2)
          {
            $js .= '<div style="cursor:hand; float:left; background: lightgrey; margin:0px; margin-bottom:3px;
                    padding:0px; width:100%; overflow:auto; border:solid 1px black;">';


            $js .= '<a href="'.base_url().'index.php/perfil?ref='.$value2['id'].'">';
            $js .= '<div style="width:35%; heigth:35%; float:left; margin-left:10px; background:grey;">';
            $js .= '<img src="'.get_user_perfil_img($value2).'" style="width:100%; heigth:100%"/>';
            $js .= '</div>';
            $js .= '</a>';

            $js .= "<input type='button' name='acceptFriend' value=' Aceptar '
             onclick=\"acc_friendScript('" . $value['idusuario'] . "')\"
             style='background:blue;color:white'/>";

             $js .= "<input type='button' name='cancelFriend' value='Cancelar'
             onclick=\"can_friendScript('" . $value['idusuario'] . "')\"
             style='background:red;color:white'/></a><br>";

            $js .= '</div>';
            $js .= $value2['nombre'] . ' ' . $value2['apellidos'] . 'quiere ser tu amigo<br>';
          }
        }
    }

    return $js;
  }
}




















/*
*
*   EVENTS
*
*/
if(!function_exists('get_the_friends_events'))
{
  function get_the_friends_events()
  {
    $ci =& get_instance();
    $arr = $ci->users->get_list_friends();
    $js = "";

    if(count($arr)>0)
    {
      foreach ($arr as $value)
      {
        //vista USER
        if($value['idusuario'] == get_id() && $value['estado']==true)
        {
          $xx = $ci->users->get_friend_forevents($value['idamigo']);

          foreach ($xx as $value2)
          {
            $js .= '<div style="cursor:hand; float:left; background: lightgrey; margin:0px; margin-bottom:3px;
                    padding:0px; width:100%; overflow:auto; border:0;">';

            $js .= '<a href="'.base_url().'index.php/perfil?ref='.$value2['id'].'">';
            $js .= '<div style="width:20%; heigth:20%; float:left; margin-left:10px; background:grey;">';
            $js .= '<img src="'.get_user_perfil_img($value2).'" width=50 heigth=50 style="float:left; width:100%; heigth:100%;"/>';
            $js .= '</div>';
            $js .= '</a>';
            $js .= $value2['nombre'] . ' ' . $value2['apellidos'] .' tiene un evento';
            $js .= '</div>';
          }
        }
        //vista FRIEND
        else if($value['idamigo'] == get_id() && $value['estado']==true)
        {
          $xx = $ci->users->get_friend_forevents($value['idusuario']);

          foreach ($xx as $value2)
          {
            $js .= '<div style="cursor:hand; float:left; background: lightgrey; margin:0px; margin-bottom:3px;
                    padding:0px; width:100%; overflow:auto; border:0;">';

            $js .= '<a href="'.base_url().'index.php/perfil?ref='.$value2['id'].'">';
            $js .= '<div style="width:20%; heigth:20%; float:left; margin-left:10px; background:grey;">';
            $js .= '<img src="' . get_user_perfil_img($value2) . '" style="float:left; width:100%; heigth:100%;"/>';
            $js .= '</div>';
            $js .= '</a>';
            $js .= $value2['nombre'] . ' ' . $value2['apellidos'] .' tiene un evento';
            $js .= '</div>';
          }
        }
      }
    }
    return $js;
  }
}






/*
*
*   EMPRESAS EVENTS
*
*/
if(!function_exists('get_the_empresas_events'))
{
  function get_the_empresas_events()
  {
    $ci =& get_instance();
    $js="";
    $arr =$ci->users->get_list_empresas();

    if(count($arr)>0)
    {
      foreach ($arr as $value)
      {
        if($value['idusuario'] == get_id())
        {
          $xx = $ci->users->get_friend_forevents($value['idamigo']);

          foreach ($xx as $value2)
          {
              $js .= '<div style="cursor:hand; float:left; background: lightgrey; margin:0px; margin-bottom:3px;
                    padding:0px; width:100%; overflow:auto; border:0;">';

              $js .= '<a href="'.base_url().'index.php/perfil?ref='.$value2['id'].'">';
              $js .= '<div style="width:20%; heigth:20%; float:left; margin-left:10px; background:grey;">';
              $js .= '<img src="' . get_user_perfil_img($value2) .  '" style="float:left; width:100%; heigth:100%;"/>';
              $js .= '</div>';
              $js .= '</a>';
              $js .= ' ' . $value2['nombre'] . ' ' . $value2['apellidos'] .' ha creado un evento';


              $xx2 = $ci->users->get_the_friends_events($value['idamigo']);

              if(count($xx2)>0)
              {
                $i = 0;
                foreach ($xx2 as $value3)
                {
                  if($i<=2)
                  {
                    $js .= '<div style="position:relative; background:white; width:100%; heigth:100%;
                       border-top:0px; padding:0px; margin:0px; overflow:auto;">';
                    $js .= $value3['box_dia'].'-'.$value3['box_mes'].'-'.$value3['box_any'];
                    $js .= '</div>';
                  }
                  $i++;
                }
              }
              $js .= '</div>';
          }
        }
      }
    }
    return $js;
  }
}



















/*
*
*   EVENTS
*
*/
if(!function_exists('get_the_last_amigos'))
{
  function get_the_last_amigos()
  {
    $ci =& get_instance();
    $js = "";

    $idUsu = get_id();


    $arr = $ci->users->get_list_friends();
    foreach($arr as $value)
    {
          if($value['idusuario'] == $idUsu  && $value['estado']==true)
          {
                /*
                $js .= 'Usuario: ';
                $js .= $value['idusuario'].'<br>';
                */
                $arr2 = $ci->users->get_friends_by_idusuario($value['idusuario']);
                foreach($arr2 as $value2)
                {
                      $xx = $ci->users->get_user($value2['idamigo']);
                      foreach($xx as $valueXX)
                      {
                        if($value['idamigo'] == $valueXX['id'])
                        {
                              $js .= 'Amigo: ';
                              $js .= $value2['idamigo'].'<br>';




                              $arr3 = $ci->users->get_friends_by_idamigo($value2['idamigo']);
                              foreach($arr3 as $value3)
                              {

                                    //$xx1 = $ci->users->get_user($value3['idusuario']);
                                    //foreach($xx1 as $valueXX1)
                                    //{
                                      //if($value2['idamigo'] == $valueXX1['id'])
                                      //{


                                      if($value3['idamigo'] != $value2['idusuario'])
                                      {
                                            //$js .= ' - ';
                                            //$js .= $value3['idusuario'].'<br>';
                                      }
                                      //}
                                    //}
                              }




                              $arr3 = $ci->users->get_friends_by_idusuario($value2['idusuario']);
                              foreach($arr3 as $value3)
                              {
                                    //$xx1 = $ci->users->get_user($value3['idusuario']);
                                    //foreach($xx1 as $valueXX1)
                                    //{
                                      if($value3['idamigo'] != $value2['idamigo'])
                                      {
                                            $js .= ' > ';
                                            $js .= $value3['idamigo'].'<br>';
                                      }
                                    //}
                              }


                        }
                      }
                }
          }

          /*
          else if($value['idamigo'] == $idUsu  && $value['estado']==true)
          {
                $js .= 'Usuario: ';
                $js .= $value['idamigo'].'<br>';

                $arr2 = $ci->users->get_friends_by_idamigo($value['idamigo']);
                foreach($arr2 as $value2)
                {
                      $xx = $ci->users->get_user($value2['idusuario']);

                      foreach($xx as $valueXX)
                      {
                        if($value['idusuario'] == $valueXX['id'])
                        {



                              $js .= 'Amigo: ';
                              $js .= $value2['idusuario'].'<br>';

                              $arr3 = $ci->users->get_friends_by_idusuario($value2['idusuario']);
                              foreach($arr3 as $value3)
                              {
                                    $js .= 'sus Amigos: ';
                                    $js .= $value['idamigo'].'<br>';
                              }
                        }
                      }


                }
                $js .= '<br>';

          }
          */
          $js .= '<br>';
    }
    $js .= '<br>';
    return $js;

  }
}


/*
if(!function_exists('get_the_last_amigos'))
{
  function get_the_last_amigos()
  {
    $ci =& get_instance();
    $js = "";

    $idUsu = get_id();


    //ALL FRIENDS
    $arr = $ci->users->get_list_friends();
    if(count($arr)>0)
    {



      //FOR 0
      foreach ($arr as $value)
      {
          // USER'S FRIEND
          if($value['idusuario'] == $idUsu  && $value['estado']==true)
          {
              $js .= 'Usuario: ';
              $js .= $value['idusuario'].'<br>';




              //value0 = ID amigo 1
              $xx0 = $ci->users->get_user($value['idamigo']);

              //FOR 1
              foreach($xx0 as $value0)
              {
                  if($value['idamigo'] == $value0['id'])
                  {
                      $js .= 'Amigo ';
                      $js .= $value0['id'].'<br>';




                      //value2 = ID amigo2
                      $xx = $ci->users->get_friends($value0['id']);

                      //FOR 2
                      foreach ($xx as $value2)
                      {
                          //var_dump($value2);
                          $js .= 'amigos: ' . $value2['idusuario'].'<br>';
                          $js .= 'amigos: ' . $value2['idamigo'].'<br>';
                          //$js .= ' ' . $value2['nombre'] . ' ' . $value2['apellidos'] . '<br>';
                          
                          $js .= '<br>';
                      }


                      $xx = $ci->users->get_friends($value0['id']);
                      
                      


                      $js .= '<br>';
                  }
              }
          }else if($value['idamigo'] == $idUsu  && $value['estado']==true)
          {
            $js .= 'Usuario: ';
            $js .= $value['idamigo'].'<br>';




            $xx0 = $ci->users->get_user($value['idusuario']);
            foreach($xx0 as $value0)
            {
              if($value['idusuario'] == $value0['id'])
              {
                $js .= 'Amigo ';
                $js .= $value0['id'].'<br>';

              }
            }
          }
        }

    }
    return $js;
  }
}
*/



/*
*
*   EMPRESAS EVENTS
*
*/
if(!function_exists('get_the_last_seguidores'))
{
  function get_the_last_seguidores()
  {
    $ci =& get_instance();
    $js = "";

    $arr = $ci->users->get_list_empresas();

    if(count($arr)>0)
    {
      foreach ($arr as $value)
      {
          if($value['idusuario'] == get_id()){

            $xx = $ci->users->get_friend($value['idamigo']);

            foreach ($xx as $value2)
            {
              $js .= '<a href="'.base_url().'index.php/perfil?ref='.$value2['id'].'">';
              $js .= '<div style="width:30%; heigth:30%; float:left; margin-left:10px; background:grey;">';
              $js .= '<img src="'.get_user_perfil_img($value2).'" style="float:left; width:100%; heigth:100%;"/>';
              $js .= '</div>';
              $js .= '</a>';
            }
          }
      }
    }

    return $js;
  }
}













/*
*
*   FRINDS
*
*/
if(!function_exists('get_list_friends'))
{
  function get_list_friends()
  {
    $ci =& get_instance();
    $js = "";

    $arr=$ci->users->get_list_friends();

    if(count($arr)>0)
    {
        foreach ($arr as $value)
        {
            //vistas
            if($value['idusuario'] == get_id() && $value['estado']==true)
            {
              $xx = $ci->users->get_friend($value['idamigo']);
              foreach ($xx as $value2)
              {

                $js .= '<a href="'.base_url().'index.php/perfil?ref='.$value2['id'].'">';
                $js .= '<div style="width:30%; heigth:30%; float:left; margin-left:10px; background:grey;">';
                $js .= '<img src="'.get_user_perfil_img($value2).'" style="float:left; width:100%; heigth:100%;"/>';
                $js .= '</div>';
                $js .= '</a>';
              }

            }
            else if($value['idamigo'] == get_id() && $value['estado']==true)
            {
              $xx = $ci->users->get_friend($value['idusuario']);
              foreach ($xx as $value2)
              {

                $js .= '<a href="'.base_url().'index.php/perfil?ref='.$value2['id'].'">';
                $js .= '<div style="width:30%; heigth:30%; float:left; margin-left:10px; background:grey;">';
                $js .= '<img src="'.get_user_perfil_img($value2). '" style="float:left; width:100%; heigth:100%;"/>';
                $js .= '</div>';
                $js .= '</a>';
              }
            }
        }
    }
    return $js;
  }
}






/*
*
*   EMPRESAS
*
*/
if(!function_exists('get_list_empresas'))
{
  function get_list_empresas()
  {
    $ci =& get_instance();
    $js = "";

    $arr = $ci->users->get_list_empresas();

    if(count($arr)>0)
    {
      foreach ($arr as $value)
      {
          if($value['idusuario'] == get_id()){

            $xx = $ci->users->get_friend($value['idamigo']);

            foreach ($xx as $value2)
            {
              $js .= '<a href="'.base_url().'index.php/perfil?ref='.$value2['id'].'">';
              $js .= '<div style="width:30%; heigth:30%; float:left; margin-left:10px; background:grey;">';
              $js .= '<img src="'.get_user_perfil_img($value2).'" style="float:left; width:100%; heigth:100%;"/>';
              $js .= '</div>';
              $js .= '</a>';
            }
          }
      }
    }

    return $js;
  }
}







/*
*
*
*
*/
if(!function_exists('get_profile'))
{
  function get_profile($ref)
  {
    $ci =& get_instance();
    $arr = $ci->users->get_user($ref);

    $js="";

    foreach ($arr as $value)
    {
      foreach($value as $posicion=>$jugador)
      {
        if($posicion != "id" && $posicion != "dni" && $jugador != null
          && $posicion != "id_facebook" && $posicion != "tipoUsu"
          && $posicion != "activo" && $posicion != "usuario"
          && $posicion != "password" && $posicion != "email_code")
        {
          /*
          if($posicion == "nombre"){
            $js .= $jugador.'-';
          }
          if($posicion == "apellidos"){
            $js .= ''.$jugador;
          }
          if($posicion == "id"){
            $js .= '<img src="'.get_user_perfil_img($jugador).'" width=30% heigth=30% style="float:left; margin-left:10px;"/>';
          }
          */
          $js .= '<label style="background:black;color:yellow">'.$posicion . "</label> ";
          $js .= '<label style="background:grey;color:yellow">'.$jugador . "</label>";
          $js .= '<br/>';
        }
      }
    }

    return $js;
  }
}