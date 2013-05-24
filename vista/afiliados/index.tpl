<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
  <link href="/<?php echo APPNAME;?>/estatico/css/style.css"   rel="stylesheet" type="text/css" />
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
                ajax.open("GET", "/ProyectWeb/vista/afiliados/listarmunicipios/" + depto, true);
                ajax.send(null);
            }
            window.onload = function() {
                document.getElementById('deptos').onchange = function() {
                    var depto = document.getElementById('deptos').options[document.getElementById('deptos').selectedIndex].value;
                    llenarCiudades(depto);
      
                 Calendar.setup({ inputField: "fecha", ifFormat: "%d / %m / %Y", button: "Selector"});    
                    
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
                <li><a href="/ProyectWeb/vista/afiliados/index">Servicios</a></li>
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
                    <form method="get" action="#">
                      <div class="form_row"><label>Usuario</label><input class="inputfield" name="email_address" type="text" id="email_addremss"/></div>
                        <div class="form_row"><label>Contraseña</label><input class="inputfield" name="password" type="password" id="password"/></div>
                        <input class="button" type="submit" name="Entrar" value="Entrar" id="Entrar" />
                    </form>
                     <div id="linck">   <a href="/ProyectWeb/login/recordar" >  Recordar Contraseña </a></div>   
                </div>            
            </div>
            
            <div id="leftcolumn_box02">
            	<h2>Lorem ipsum dolor</h2>
                <ul>
                    <li><a href="#">Mauris blandit vehicula</a></li>
                  <li><a href="#">Cool Website Two</a></li>
                    <li><a href="#">Aliquam tristique lacus</a></li>
                    <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                    <li><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></li>
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
             <form id="form2" name="form2" method="post" action="/ProyectWeb/vista/afiliados/guardar.php">
            <table width="100%" border="0"> 
              <tr>
                <td width="17%"><div align="right">Tipo de Afiliacion:</div></td>
                <td width="33%"><div align="left">
                  <select name="Afil" id="Afil3">
                    <option value="00"> </option>
                    <option value="01">Contributivo</option>
                    <option value="02">Subsidiado</option>
                    <option value="03">Particular</option>
                    <option value="04">Beneficiario</option>
                    <option value="05">Otro</option>
                  </select>
                </div></td>
                <td width="21%"><label for="Nafili">
                  <div align="right">N° Afiliacion</div>
                </label></td>
                <td width="29%"><div align="left">
                  <input type="text" name="Nafili" id="Nafili" />
                </div></td>
              </tr>
              <tr>
                <td><label for="TipDoc">
                  <div align="right">Tipo Documento
                  </div>
                </label></td>
                <td><div align="left">
                  <select name="TipDoc" id="TipDoc">
                    <option value="NN"></option>
                    <option value="C.C">Cedula</option>
                    <option value="P.P">Pasaporte</option>
                    <option value="R.C">Registro Civil</option>
                    <option value="T.I">Tarjeta Identidad</option>
                  </select>
                </div></td>
                <td><div align="right">Identificacion</div></td>
                <td><div align="left">
                  <input type="text" name="ident" id="ident" />
                </div></td>
              </tr>
              <tr>
                <td><label for="nomb">
                  <div align="right">Nombres
                  </div>
                </label></td>
                <td><div align="left">
                  <input name="nomb" type="text" id="nomb" size="0" maxlength="60" />
                </div></td>
                <td><label for="Apel">
                  <div align="right">Apellidos</div>
                </label></td>
                <td><div align="left">
                  <input type="text" name="Apel" id="Apel" />
                </div></td>
              </tr>
              <tr>
                <td align="right">Sexo</td>         
                <td>&nbsp;</td>
                <td><label for="fecha">Fecha Nacimiento</label></td>
                <td><label for="fecha2"></label>
                  <div align="left">
                    <input type="text" name="fecha" id="fecha" /> 
                <img src="/<?php echo APPNAME;?>/estatico/images/calendar.png"  id = "Selector"/></div></td>
              </tr>
              <tr>
                <td><label for="deptos">
                  <div align="right">Departamento
                  </div>
                </label></td>
                <td><div align="left">
                      
                      <select name="deptos" id="deptos" >
                          <?php foreach ($deptos as $depto){ ?>
                            <option value="<?php echo $depto['CodDepart']; ?>"><?php echo $depto['departamento'];?></option>
                            <?php } ?>
                        </select>
                      
                </div></td>
                <td><label for="Muni">
                  <div align="right">Municipio</div>
                </label></td>
                <td><div align="left">
                  <select name="Muni" id="Muni">
                  </select>
                </div></td>
              </tr>
              <tr>
                <td><label for="Barri">
                  <div align="right">Barrio</div>
                </label></td>
                <td><div align="left">
                  <input type="text" name="Barri" id="Barri" />
                </div></td>
                <td><label for="dire">
                  <div align="right">Direccion</div>
                </label></td>
                <td><div align="left">
                  <input type="text" name="dire" id="dire" />
                </div></td>
              </tr>
              <tr>
                <td><label for="TelF">
                  <div align="right">Tel.  Fijo</div>
                </label></td>
                <td><div align="left">
                  <input type="text" name="TelF" id="TelF" />
                </div></td>
                <td><label for="TelM">
                  <div align="right">Tel. Movil</div>
                </label></td>
                <td><div align="left">
                  <input type="text" name="TelM" id="TelM" />
                </div></td>
              </tr>
              <tr>
                <td><label for="email">
                  <div align="right">E-mail</div>
                </label></td>
                <td><div align="left">
                  <input type="text" name="email" id="email" />
                </div></td>
                <td>&nbsp;</td>
                <td><div align="left"></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><div align="left"></div></td>
              </tr>
          </table>
              <div class="button_01" align="center" > <a href="#">Guardar</a></div>
      </form>
   	  </div>
        
        <!-- end of middle column -->
        
        <!-- start of right column --><!-- end of right column -->
    
    </div>
    
    <!-- end of content -->
        
        
	<div id="templatemo_footer">
        <a href="/ProyectWeb/index">Inicio</a> | <a href="#">Quienes Somos</a> | <a href="#">Servicios</a> | <a href="#">Informes</a> | <a href="#">Contactenos</a><br />
Copyright ©  2013 <a href="#">ValleSalud-SS</a> | Designed by <a href="http://www.templatemo.com" target="_blank">templatemo.com</a></div></div>
</body>
</html>