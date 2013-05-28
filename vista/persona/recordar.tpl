<!DOCTYPE html>
<html  lang="en">
<head>
<meta charset="utf-8" />

<link href="/<?php echo APPNAME;?>/estatico/css/style.css"   rel="stylesheet" type="text/css" />
<link href="/<?php echo APPNAME;?>/estatico/css/stylew.css"   rel="stylesheet" type="text/css" />
<title><?php echo $titulo; ?></title>

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
        	<div class="title">Le Ofrecemos<br />
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
                <li><a href="/ProyectWeb/index" >Inicio</a></li>
                <li><a href="#">Quienes Somos</a></li>
                <li><a href="/ProyectWeb/afiliados/index" >Afiliarse</a></li>
                <li><a href="/ProyectWeb/login/menuafiliado">Soluciones</a></li>
                <li><a href="/ProyectWeb/personal/index">Contactenos</a></li>
            </ul>
        </div>
	</div>
    
    <!-- start of content -->
    
	<div id="templatemo_content">
    
    	<!-- start of left column -->
    
    	<div id="templatemo_left_column">        	

          
            
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
        
    	<div id="templatemo_middle_column">
        
        	<h1>Recuperacion de Contraseña.. !!</h1>
          <p> Para recuperar la contraseña debe introducir los siguientes datos</p>
          <p>
              Le enviaremos un Correo electronico con la informacion necesaria para cambiar su clave
            </p> 
          <form action="/ProyectWeb/persona/enviarcorreo" method="post" name="recuperar" id="recuperar">
            <table width="100%" height="154" border="0" cellspacing="5">
              <tr>
                <td><strong>Id Usuario </strong></td>
                <td align="left"><input type="text" name="ident" id="ident">
                *</td>
              </tr>
              <tr>
                <td><strong>Correo Electronico </strong></td>
                <td align="left"><input  class="inputt" type="text" name="email" id="email">
                *</td>
              </tr>
              <tr>
                <td colspan="2" align="center">  <?php    echo  "<span class='error'>";
                           echo   $mensaje;
                           echo "</span>"; ?> </td>
              </tr>
                 <tr>
                    
                  <td align="right"> <input class="button_011" type="submit" name="enviarcorreo" id="enviarcorreo" value="Aceptar"></td>
                  <td align="center"><input class="button_011" type="reset" name="cancel" id="cancel" value="Cancelar"></td>
              </tr>
            </table>
          </form>
          <br />   
                     
        </div>
        
        <!-- end of middle column -->
        
        <!-- start of right column -->
        
        <div id="templatemo_right_column">
        
         
                <div id="right_box02">
                <div class="rightbox02_top">
                    <h2 align="center">Preguntas Frecuentes</h2>
                </div>
                <div class="rightbox02_bottom">
                    <div class="customer_section">
                        <img src="/<?php echo APPNAME;?>/estatico/images/order.ico" alt="templatemo logo" />    
                        <p> ¿ Como apartar una cita ?.</p>             
                        <div class="more_button"><a href="#" target="_parent">Ver +...</a></div>
                    </div>
                    <div class="customer_section">
                        <img src="/<?php echo APPNAME;?>/estatico/images/ast.ico" alt="flashmo logo" />                
                        <p>¿No puedo acceder a la plataforma?.</p>
                        <div class="more_button"><a href="#" target="_parent">Ver +...</a></div>
                    </div>
                    <div class="customer_section">
                        <img src="/<?php echo APPNAME;?>/estatico/images/user.jpg" alt="flashmo logo" />                
                        <p>¿como afiliarse?.</p>
                        <div class="more_button"><a href="#" target="_parent">Ver +...</a></div>
                    </div>
                </div>
            </div>
          
             </div>
        
        <!-- end of right column -->
    
    </div>
    
    <!-- end of content -->
        
        
	<div id="templatemo_footer">
        <a href="/ProyectWeb/index">Inicio</a> | <a href="#">Quienes Somos</a> | <a href="/ProyectWeb/afiliados/index">Servicios</a>| <a href="#">Informes</a> | <a href="#">Contactenos</a><br />
<a href="#">ValleSalud-SS</a> | Designed by <a href="http://www.templatemo.com" target="_blank">templatemo.com</a></div>
    <div id="templatemo_footer_bottom"></div>

</div>
</body>
</html>