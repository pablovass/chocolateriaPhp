<?php 
//este es el index de controlpane

include ('logica/usuariosArray.php');

 ?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar"  lang="es-ES">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>panel de control</title>


<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel='dns-prefetch' href='//s.w.org' />
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' href='../css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' href='../css/styles1.css' type='text/css' media='all' />
<link rel='stylesheet' href='../css/styles2.css' type='text/css' media='all' />


</head>

<body class="wp-admin wp-core-ui no-js  edit-comments-php auto-fold admin-bar branch-4-7 version-4-7-2 admin-color-coffee locale-es-es no-customize-support no-svg">

<header>
   
	<div id="wpwrap">
	<div id="adminmenumain" role="navigation" aria-label="Menú principal">
	<div id="adminmenuback"></div>
    <div id="adminmenuwrap">
    <ul id="adminmenu">

	 <!--menu-->
	 <li class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
	  <a href="controlPane.php?pag=1" class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" >
	  	<div class="wp-menu-arrow">
	  		<div></div>
	  	</div><div class='wp-menu-image dashicons-before dashicons-dashboard'><br /></div>
	  	<div class='wp-menu-name'>Menu</div></a>
	 </li>
	 
	 <li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true"><div class="separator"></div></li>
			
     <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
	  <a href="controlPane.php?pag=2" class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" aria-haspopup="true">
	  	<div class="wp-menu-arrow">
	  	 <div></div>
	  	</div>
	  	<div class='wp-menu-image dashicons-before dashicons-admin-comments'><br /></div>
	  	<div class='wp-menu-name'>Mensajes</div></a>
	  </li>

			
	  <li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" id="menu-settings">
	  <a href="controlPane.php?pag=3" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" aria-haspopup="true">
	  	<div class="wp-menu-arrow">
	  		<div></div>
	  	</div>
	  	<div class='wp-menu-image dashicons-before dashicons-admin-settings'><br /></div>
	  	<div class='wp-menu-name'>Ajustes</div></a>
	  </li>
			
	 <li class=" wp-has-current-submenu  menu-icon-users" id="menu-users" >
	  <a href='controlPane.php?pag=4' class="wp-has-submenu  wp-menu-open menu-top menu-icon-users" >
	  <div class="wp-menu-arrow"><div></div></div>
	  <div class='wp-menu-image dashicons-before dashicons-admin-users'><br /></div>
	  <div class='wp-menu-name'>Usuarios</div></a>
	  <ul class='wp-submenu wp-submenu-wrap'>
       <li class='wp-submenu-head' aria-hidden='true'>Usuarios</li>
	   <li><a  href='controlPane.php?pag=5'>Añadir nuevo</a></li>
	   <li><a href='controlPane.php?pag=3'>Tu perfil</a></li>
	  </ul>
	 </li>

	    <li id="collapse-menu" class="hide-if-no-js">
	     <button type="button" id="collapse-button" aria-label="Contraer menú principal" aria-expanded="true">
	     <span class="collapse-button-icon" aria-hidden="true"></span>
	     <span class="collapse-button-label">Cerrar menú</span>
	     </button></li>
      </ul>
        </div>
		</div>
		</div>
		</div>			
</header>


		<div id="wpadminbar" class="nojq nojs">
		<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Barra de herramientas" tabindex="0">
				
		<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-menu-toggle">
			<a class="ab-item" href="#">
			 <span class="ab-icon"></span>
			 <span class="screen-reader-text">Menú</span>
		    </a>		
	    </li>
		
		<li id="wp-admin-bar-site-name" class="menupop">
		 <a class="ab-item" aria-haspopup="true" href="../index.php">volver al sitio</a>
		 <div class="ab-sub-wrapper">
		 <ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-view-site">
		 <a class="ab-item" href="../index.php">Visitar sitio</a>		
		  </li>
		  </ul>
	     </div>		
	    </li>
	
		<li id="wp-admin-bar-comments">
			<a class="ab-item" href="">
			 <span class="ab-icon"></span>
			 <span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span>
			 <span class="screen-reader-text">0 comentarios están esperando moderación</span>
			</a>		
	   </li>
		</ul>
	    
<ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
  <li id="wp-admin-bar-my-account" class="menupop with-avatar">
		 <a class="ab-item" aria-haspopup="true" href="">Hola,<?php echo isset ($_SESSION['alias'])? $_SESSION['alias']: 'Invitado' ?>
		  <img alt='' src='<img src="uploads/<?php echo $entry; ?>" width="50" /' srcset='<img src="uploads/<?php echo $entry; ?>" width="50" /' class='avatar avatar-26 photo' height='26' width='26' />
		</a>
		
    <div class="ab-sub-wrapper">
	  <ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info">
		<a class="ab-item" tabindex="-1" href="http://localhost/wordpress/wp-admin/profile.php"><img alt='' src='http://2.gravatar.com/avatar/8b3af1fdf6266a98433e39c0868b0cc8?s=64&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/8b3af1fdf6266a98433e39c0868b0cc8?s=128&amp;d=mm&amp;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>Volver al sitio</span></a>		</li>
		<li id="wp-admin-bar-edit-profile">
		 <a class="ab-item" href="../index.php">Visitar sitio</a>
		</li>

		<li id="wp-admin-bar-logout">
		 <a class="ab-item" href="../index.php">Editar mi perfil</a>
		</li>
		<li id="wp-admin-bar-logout">
		 <a class="ab-item" href="../index.php">Cerrar sesión</a>
		</li>
	  </ul>
	</div>
 </li>
</ul>			
</div>
</div>
<?php include ("menu.php"); ?>
<?php

     $pag = (isset($_GET['pag'])) ? $_GET['pag'] : 1;
   switch ($pag) {
                 case 1:
                   include ("menu.php");
                  break;
                   case 2:
                      include ('mensajes.php');
                     break;
                     case 3:
                       include ('ajustes.php');
                      break;
                       case 4:
                          include ('usuarios.php');
                        break;
                        case 5:
                          include ('incluirNuevo.php');
                        break;
                        

                           }
?>

	<footer>
	<?php include '../inc/footerCP.php' ?>
	</footer>


</body>
</html>
<?php 
// es el algorismo que se usa para ver las fotos.
/*
	  <tbody>
				  	<?php 
				  	while (false !== ($entry = $d->read())) 
				  	{
				  		if( $entry != '.' && $entry != '..' )
				  		{
				  	?>
				    <tr>
				      <td><img src="uploads/<?php echo $entry; ?>" width="100" /></td>
				      <td><?php echo $entry; ?></td>
				    </tr>
				    <?php 
				    	}
					} 
					?>
				  </tbody>

*/

 ?>