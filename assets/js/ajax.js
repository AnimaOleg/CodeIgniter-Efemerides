function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function enviarDatosEmpleado(){
  alert(" READY ");

  divResultado = document.getElementById('resultado');

  nom=document.formulario_ajax.nombre.value;
  ape=document.formulario_ajax.apellido.value;
  web=document.formulario_ajax.web.value;

  ajax=objetoAjax();

  //ajax.open("POST", "registro.php",true);
  ajax.open("POST", "users_helper.php",true);


  ajax.onreadystatechange=function() {
  	if (ajax.readyState==4) {
      alert(" state 4 ");
  		divResultado.innerHTML = ajax.responseText;

  		LimpiarCampos();
  	}else{
      alert(" state ¡''¡'¡'¡ ");
    }
  }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

  ajax.send("nombre="+nom+"&apellido="+ape+"&web="+web)
}

function LimpiarCampos(){
  document.formulario_ajax.nombre.value="";
  document.formulario_ajax.apellido.value="";
  document.formulario_ajax.web.value="";
  document.formulario_ajax.nombre.focus();
}