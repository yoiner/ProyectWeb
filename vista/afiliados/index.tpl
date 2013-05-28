<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
  <link href="/<?php echo APPNAME;?>/estatico/css/style.css"   rel="stylesheet" type="text/css" />
  <link href="/<?php echo APPNAME;?>/estatico/css/stylew.css"   rel="stylesheet" type="text/css" />
  <link href="/<?php echo APPNAME;?>/estatico/css/calendar-tas.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/<?php echo APPNAME;?>/estatico/js/calendar.js" > </script>
<script type="text/javascript" src="/<?php echo APPNAME;?>/estatico/js/calendar-setup.js"  > </script>
<script type="text/javascript"  src="/<?php echo APPNAME;?>/estatico/js/calendar-es.js" > </script>
<title><?php echo $titulo; ?></title>

 <script type="text/javascript">
            //Funcion de Ajax
            function getAjax() {
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
                }
                return xmlhttp;
            }

            function llenarCiudades(depto) {
                var ajax = getAjax();
                ajax.onreadystatechange = function() {
                    if (ajax.readyState == 4) {
                        if (ajax.status == 200) {
                            var datos = ajax.responseText;
                              alert(datos);
                             
		       }
                    }
                }
                ajax.open("GET", "/ProyectWeb/afiliados/listarmunicipios/" + depto, true);
                ajax.send(null);
            }
            window.onload = function() { 
             Calendar.setup({ inputField: "fecNac", ifFormat: "%Y / %m / %d"});  
                    document.getElementById('depart').onchange = function() {
                    var depto = document.getElementById('depart').options[document.getElementById('depart').selectedIndex].value;
                    llenarCiudades(depto);
               }
            }
        </script>

</head>

<body>
<div id="templatemo_container">
   
    <div id="templatemo_header">
    	<div id="logosection">
	        <div class="sitelogo"></div>
        	<div class="NameLogo">            	
            	ValleSalud-SS</div>
      </div>
        <div id="header">
        	<div class="title">
        Le Ofrecemos<br />
	        	<span class="bigtext">Los Mejores Servicios </span><br />
	        	En Salud.</div>

        </div>
	</div>
    
	<div id="templatemo_menu">
    	<div id="search">
				<input class="textfield" type="text" value="Buscar...."/> <input class="send_btn" type="submit" value="Ir" />
   	  </div>
        <div id="menu">
            <ul>
                <li><a href="/ProyectWeb/index" class="current">Inicio</a></li>
                <li><a href="#">Quienes Somos</a></li>
                <li><a href="/ProyectWeb/afiliados/index">Afiliarse</a></li>
                <li><a href="#">Informes</a>
                </li><li><a href="#">Contactenos</a></li>
            </ul>
        </div>
	</div>
    
    <!-- start of content -->
    
	<div id="templatemo_content">
    
    	<!-- start of left column -->
    
    	<div id="templatemo_left_column">        	

            <div id="leftcolumn_box01">
                <div class="leftcolumn_box01_top">
                    <h2>Acceso de Usuarios</h2>
                </div>
                <div class="leftcolumn_box01_bottom">
                     <form method="post" action="/ProyectWeb/login/acceso">
                      <div class="form_row"><label>Usuario</label><input class="inputfield" name="email_address" type="text" id="email_addremss"/></div>
                        <div class="form_row"><label>Contraseña</label><input class="inputfield" name="password" type="password" id="password"/></div>
                        <input class="button" type="submit" name="Entrar" value="Entrar" id="Entrar" />
                    </form>
                     <div id="linck">   <a href="/ProyectWeb/login/recordar" >  Recordar Contraseña </a></div>   
                </div>            
            </div>
            
            <div id="leftcolumn_box02">
            	<h2>Servicios</h2>
                <ul>
                    <li><a href="#">Medicina General</a></li>
                  <li><a href="#">Odontologia</a></li>
                    <li><a href="#">Pediatria</a></li>
                    <li><a href="#">Atencion Prioritaria</a></li>
                    <li><a href="#">Farmacia</a></li>
                </ul>
            </div>
            
			<div id="imagebutton">
            	<a href="#"><img src="/<?php echo APPNAME;?>/estatico/images/livechat.gif" alt="live chat" /></a>
			</div>
            
        </div>
        
        <!-- end of left column -->
        
        <!-- start of middle column -->
        
<div  id="templatemo_middle_Modificado">
<h1>Bienvedidos .. !!</h1>
          <p>Por favor Ingrese todos los datos.</p>
          <form action="/ProyectWeb/afiliados/guardar" method="post" name="Registrar" id="Registrar" >
            <table width="100%" border="0" align="left">
              <tr>
                <td width="209"><div class="labell">N° Registro</div></td>
                <td width="208" align="left"><input class="inputt"  type="text" name="nRegistro" id="nRegistro"></td> 
                <td width="251"><div class="labell">Fecha Afiliacion</div></td>
                <td width="318" align="left"><input name="FecAfilia" type="text" class="inputt" id="FecAfilia" maxlength="10"></td>
              </tr>
              <tr>
                <td><label class="labell">Tipo Documento</label></td>
                <td  align="left"> <select name="tipodoc" id="tipodoc">
                        <option>Seleccione </option>
                    <?php foreach ($Document as $docu){ ?>
                            <option value="<?php echo $docu['idTipoDoc']; ?>"><?php echo $docu['Descripcion'];?></option>
                            <?php } ?>
                </select></td>
                <td><div class="labell">N° Documento</div></td>
                <td align="left"><input class="inputt"  type="text" name="identificacion" id="identificacion"></td>
              </tr>
              <tr>
                  <td><div class="labell">Nombre</div></td>
                <td align="left"><input class="inputt"  type="text" name="nombre" id="nombre"></td>
                <td> <div class="labell">Apellidos</div></td>
                <td align="left"><input class="inputt"  type="text" name="apellido" id="apellido"></td>
              </tr>
              <tr>
                  <td> <div class="labell">Fecha Nacimiento</div></td>
                <td align="left"><input class="inputt"  type="text" name="fecNac" id="fecNac">
                <td><div class="labell">Sexo</div></td>
                <td  align="left"><select name="sex" id="sex">
                  <option>........</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                </select></td>
              </tr>
              <tr>
                  <td> <div class="labell">Departamento</div></td>
                <td align="left"><select name="depart" id="depart">
                   <option>Seleccione </option>
                    <?php foreach ($deptos as $depto){ ?>
                            <option value="<?php echo $depto['CodDepart']; ?>"><?php echo $depto['departamento'];?></option>
                            <?php } ?>
                </select></td>
                <td><div class="labell">Municipio</div></td>
                <td align="left"><select name="muni" id="muni">
                 <?php foreach ($deptos as $munici){ ?>
                    <option value="<?php echo $munici->getIdMuni(); ?>"><?php echo $munici->getMunic();?></option>
                   <?php } ?>
                
                </select></td>
              </tr>
              <tr>
                  <td><div class="labell">Barrio</div></td>
                <td align="left"><input class="inputt"  type="text" name="barrio" id="barrio"></td>
                <td><div class="labell">Direccion</div></td>
                <td align="left"><input  class="inputt"  type="text" name="direcc" id="direcc"></td>
              </tr>
              <tr>
                  <td><div class="labell">Telefono</div></td>
                <td align="left"><input  class="inputt" type="text" name="tele" id="tele"></td>
                <td><div class="labell">E-mail</div></td>
                <td align="left"><input class="inputt"  type="text" name="email" id="email"></td>
              </tr>
              <tr>
                  <td><div class="labell">Estrato</div></td>
                <td align="left"><select name="estr" id="estr">
                  <option>Seleccione</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select></td>
                <td><div class="labell">Estado Civil</div></td>
                <td align="left"><select name="estcivil" id="estcivil">
                  <option>seleccione</option>
                  <option value="Casado">Casado(a)</option>
                  <option value="Soltero">Soltero(a)</option>
                  <option value="Viudo(a)">Viudo(a)</option>
                  <option value="Union Libre">Union Libre</option>
                  <option value="Otro">Otro</option>
                </select></td>
              </tr>
              <tr>
                  <td><div class="labell">Contraseña</div></td>
                <td align="left"><input class="inputt"  name="pass" type="password" id="pass" value=""></td>
                <td><div class="labell">Confirmar Contraseña</div></td>
                <td align="left"><input class="inputt"  type="password" name="verpass" id="verpass"></td>
              </tr>
              <tr>
                  <td><div class="labell">Nivel Usuario</div></td>
                <td align="left"><select name="nivel" id="nivel">
                         <option>Seleccione </option>
                    <?php foreach ($Tpersonal as $depto){ ?>
                            <option value="<?php echo $depto['idNivel']; ?>"><?php echo $depto['Nivel'];?></option>
                            <?php } ?>
                </select></td>
                <td><div class="labell">Confirmar E-mail</div></td>
                <td align="left"><input class="inputt"  type="text" name="veremail" id="veremail"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2" align="center"><input  class="button" type="submit" name="agregarusuario" id="agregarusuario" value="Enviar"></td>
                <td align="left"><input  class="button" type="reset" name="cancelar" id="cancelar" value="Cancelar"></td>
              </tr>
            </table>
</form>
          <p>&nbsp;</p>
</div>
        
        <!-- end of middle column -->
        
        <!-- start of right column --><!-- end of right column -->
    
    </div>
    
    <!-- end of content -->
        
        
	<div id="templatemo_footer">
        <a href="/ProyectWeb/index">Inicio</a> | <a href="#">Quienes Somos</a> | <a href="#">Servicios</a> | <a href="#">Informes</a> | <a href="#">Contactenos</a><br />
Copyright ©  2013 <a href="/ProyectWeb/index">ValleSalud-SS</a> | Designed by <a href="http://www.templatemo.com" target="_blank">templatemo.com</a></div></div>
</body>
</html>