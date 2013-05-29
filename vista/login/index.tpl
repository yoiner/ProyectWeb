<!DOCTYPE html>
<html  lang="en">
<head>
<meta charset="utf-8" />

<link href="/<?php echo APPNAME;?>/estatico/css/style.css"   rel="stylesheet" type="text/css" />
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
        	<div class="title"> Ofreciendo<br />
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

            <div id="leftcolumn_box01">
                <div class="leftcolumn_box01_top"> <h2>Acceso de Usuarios</h2> </div>
                <div class="leftcolumn_box01_bottom">
                    <form method="post" action="/ProyectWeb/login/acceso">
                       <div class="form_row"><label>Usuario</label><input class="inputfield" name="usuario" type="text" id="usuario"/></div>
                       <div class="form_row"><label>Contraseña</label><input class="inputfield" name="password" type="password" id="password"/></div>
                        <input class="button" type="submit" name="Entrar" value="Entrar" id="Entrar"  /> <br>
                        </form>
                   <div id="linck">   <a href="/ProyectWeb/persona/recordar" >  Recordar Contraseña </a></div>   
                  <?php    echo  "<span class='error'>";
                           echo   $mensaje;
                           echo "</span>"; ?> 
                  
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
        
    	<div id="templatemo_middle_column">
        
        	<h1>Bienvedidos .. !!</h1>
          <p>
            This free CSS layout is provided by templatemo.com. Feel free to edit and apply this template layout for your personal or commercial websites. Credit goes to <a href="http://fantasybrushes.deviantart.com/" target="_blank">Marilyn</a>  for photoshop brush applied in header graphics.</p>
          <p>
Pellentesque vitae magna. Sed nec est. Suspendisse a nibh tristique justo rhoncus volutpat. Suspendisse vitae neque eget ante tristique vestibulum. Pellentesque dolor nulla, congue vitae, fringilla in, varius a, orci. <a href="#">Read more...</a>
            </p> <br />
            
            <div id="section1">
            	<h3>Informacion</h3>
              <h4>Estamos en Construccion</h4>
                <p>
                     Recuerde tener un poco de paciencia por ahora... . <a href="#">Read more...</a>
            	</p>
                <h4>:)</h4>
                <p>
                     Trabajamos para ofrecerle un mejor servicio. <a href="#">Read more...</a></p>
          </div>
            
            <div id="section2">
                <div class="section2_top">
                    <h2>Desarrolladores</h2>
                </div>
                <div class="section2_bottom">
			<ul>
                        <li><a href="#">Yoiner Valle Machado</a></li>
                        <li><a href="#">Rodrigo Silva Covilla</a></li>
                        <li><a href="#">Mario Andres Rodriguez</a></li>
                        <li><a href="#">Wendell Arias Martinez</a></li>
                        </ul>
                    <div class="more_button"><a href="#">Mas...</a></div>
            	</div>
            </div>
            
        </div>
        
        <!-- end of middle column -->
        
        <!-- start of right column -->
        
        <div id="templatemo_right_column">
        
            <div class="rightbig_button"><a href="#">Atencion al  Usuario</a></div>
            <div class="rightbig_button"><a href="#">Promocion &amp; Prevencion</a></div>
          
                <div id="right_box02">
                <div class="rightbox02_top">
                    <h2 align="center">Preguntas Frecuentes</h2>
                </div>
                <div class="rightbox02_bottom">
                    <div class="customer_section">
                        <img src="/<?php echo APPNAME;?>/estatico/images/order.ico" alt="templatemo logo" />    
                        <p> ¿ Como apartar una cita ?.</p>             
                        <div class="more_button"><a href="http://www.templatemo.com" target="_parent">Ver +...</a></div>
                    </div>
                    <div class="customer_section">
                        <img src="/<?php echo APPNAME;?>/estatico/images/ast.ico" alt="flashmo logo" />                
                        <p>¿No puedo acceder a la plataforma?.</p>
                        <div class="more_button"><a href="http://www.flashmo.com" target="_parent">Ver +...</a></div>
                    </div>
                    <div class="customer_section">
                        <img src="/<?php echo APPNAME;?>/estatico/images/user.jpg" alt="flashmo logo" />                
                        <p>¿como afiliarse?.</p>
                        <div class="more_button"><a href="http://www.flashmo.com" target="_parent">Ver +...</a></div>
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