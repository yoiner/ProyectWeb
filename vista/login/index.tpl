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
                <li><a href="/ProyectWeb/afiliados/index" >Servicios</a></li>
                <li><a href="/ProyectWeb/afiliados/menu">Soluciones</a></li>
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
                   <div id="linck">   <a href="/ProyectWeb/login/recordar" >  Recordar Contraseña </a></div>   
                  <?php    echo  "<span class='error'>";
                           echo   $mensaje;
                           echo "</span>"; ?> 
                  
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
        
    	<div id="templatemo_middle_column">
        
        	<h1>Bienvedidos .. !! probando proyect</h1>
          <p>
            This free CSS layout is provided by templatemo.com. Feel free to edit and apply this template layout for your personal or commercial websites. Credit goes to <a href="http://fantasybrushes.deviantart.com/" target="_blank">Marilyn</a>  for photoshop brush applied in header graphics.</p>
          <p>
Pellentesque vitae magna. Sed nec est. Suspendisse a nibh tristique justo rhoncus volutpat. Suspendisse vitae neque eget ante tristique vestibulum. Pellentesque dolor nulla, congue vitae, fringilla in, varius a, orci. <a href="#">Read more...</a>
            </p> <br />
            
            <div id="section1">
            	<h3>Duis vitae velit sed dui</h3>
              <h4>Lorem ipsum dolor sit amet</h4>
                <p>
            Duis pulvinar scelerisque ante. Morbi tristique, risus quis congue pulvinar, nisl nisi commodo diam, a porta nisi ligula ac massa. Vestibulum blandit lacus sed sapien. <a href="#">Read more...</a>
            	</p>
                <h4>Quisque rhoncus nulla quis sem</h4>
                <p>
           Fusce sollicitudin nisl a lectus. Pellentesque odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <a href="#">Read more...</a>            	</p>
          </div>
            
            <div id="section2">
                <div class="section2_top">
                    <h2>Lorem ipsum dolor</h2>
                </div>
                <div class="section2_bottom">
			      	<ul>
                        <li><a href="#">Vestibulum blandit lacus</a></li>
                        <li><a href="#">Mauris blandit vehicula</a></li>
                        <li><a href="#">Proin consectetuer</a></li>
                        <li><a href="http://www.flashmo.com" target="_parent">Flash Resources</a></li>
                        <li><a href="http://www.templatemo.com" target="_parent">Website Templates</a></li>
                        <li><a href="#">Cras urna metus</a></li>
                        <li><a href="#">Nunc quis seme</a></li>
					</ul>
                    <div class="more_button"><a href="#">More...</a></div>
            	</div>
            </div>
            
        </div>
        
        <!-- end of middle column -->
        
        <!-- start of right column -->
        
        <div id="templatemo_right_column">
        
            <div class="rightbig_button"><a href="#">Atencion al  Usuario</a></div>
            <div class="rightbig_button"><a href="#">Training  &amp; Education</a></div>
          
            <div id="right_box02">
                <div class="rightbox02_top">
                    <h2 align="center">Our Customers Say</h2>
                </div>
                <div class="rightbox02_bottom">
                    <div class="customer_section">
                        <img src="/images/templatemo.gif" alt="templatemo logo" />                
                        <p> Pellentesque mattis, faucibus vitae, feugiat vitae.</p>
                      <div class="more_button"><a href="#" target="_parent">More...</a></div>
                    </div>
                    <div class="customer_section">
                        <img src="/images/flashmo.gif" alt="flashmo logo" />                
                      <p>Nam sit amet justo vel libero tincidunt dignissim.</p>
                        <div class="more_button"><a href="#" target="_parent">More...</a></div>
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