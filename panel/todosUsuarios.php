<?php 
session_start();
 ?>
<div id="wpcontent">
<div id="wpbody" role="main">

<div id="wpbody-content" aria-label="Contenido principal" tabindex="0">
		<div id="screen-meta" class="metabox-prefs">

			<div id="contextual-help-wrap" class="hidden" tabindex="-1" aria-label="Pestaña de ayuda contextual">
				<div id="contextual-help-back"></div>
				<div id="contextual-help-columns">
					<div class="contextual-help-tabs">
						<ul>
						
							<li id="tab-link-overview" class="active">
								<a href="#tab-panel-overview" aria-controls="tab-panel-overview">
									Vista previa								</a>
							</li>
						
							<li id="tab-link-screen-display">
								<a href="#tab-panel-screen-display" aria-controls="tab-panel-screen-display">
									Visualización en pantalla								</a>
							</li>
						
							<li id="tab-link-actions">
								<a href="#tab-panel-actions" aria-controls="tab-panel-actions">
									Acciones								</a>
							</li>
												</ul>
					</div>

										<div class="contextual-help-sidebar">
						<p><strong>Para más información:</strong></p><p><a href="https://codex.wordpress.org/Users_Screen">Documentación sobre la gestión de usuarios</a></p><p><a href="https://codex.wordpress.org/Roles_and_Capabilities">Descripción de perfiles y capacidades</a></p><p><a href="https://es.wordpress.org/support/">Foros de soporte</a></p>					</div>
					
					<div class="contextual-help-tabs-wrap">
						
							<div id="tab-panel-overview" class="help-tab-content active">
								<p>Esta pantalla muestra todos los usuarios existentes para tu sitio. Cada usuario dispone de uno de los cinco perfiles definidos según lo establecido por el administrador del sitio: Administrador del sitio, editor, autor, colaborador o suscriptor. Los usuarios con perfiles que no sean de administrador verán menos opciones en el panel de navegación cuando se hayan identificado, en base a su perfil.</p><p>Para añadir un usuario nuevo a tu sitio haz clic en el botón Añadir nuevo en la parte superior de la pantalla o en la sección Añadir nuevo del menú Usuarios.</p>							</div>
						
							<div id="tab-panel-screen-display" class="help-tab-content">
								<p>Puedes personalizar cómo se muestra esta pantalla de diferentes formas:</p><ul><li>Puedes mostrar/ocultar columnas basándote en tus necesidades y decidir cuántos usuarios listar por pantalla utilizando la pestaña de Opciones de Pantalla.</li><li>Puedes filtrar la lista de roles de usuario usando los enlaces de texto de arriba a la izquierda para mostrar Todos, Administrador, Editor, Autor, Colaborador o Suscriptor. La vista por defecto muestra todos los usuarios. Los roles de usuario no usados no se listan.</li><li>Puedes ver todas las entradas escritas por un usuario haciendo clic en el número que hay bajo la columna Entradas.</li></ul>							</div>
						
							<div id="tab-panel-actions" class="help-tab-content">
								<p>Pasando por encima de una línea en la lista de usuarios se mostrarán los enlaces de acción para gestionar usuarios. Puedes realizar las siguientes acciones:</p><ul><li>Editar te lleva a la pantalla de edición de perfil para ese usuario. Puedes llegar también a esa pantalla cliqueando sobre su nombre de usuario.</li><li>Borrar te lleva a la pantalla de confirmación de borrado de usuarios, donde puedes borrar permanentemente a un usuario de tu sitio y borrar su contenido. También puedes borrar varios usuarios a la vez usando las acciones en lote.</li></ul>							</div>
											</div>
				</div>
			</div>
		<div id="screen-options-wrap" class="hidden" tabindex="-1" aria-label="Pestaña de opciones de pantalla">
<form id='adv-settings' method='post'>
		<fieldset class="metabox-prefs">
		<legend>Columnas</legend>
		<label><input class="hide-column-tog" name="email-hide" type="checkbox" id="email-hide" value="email" checked='checked' />Correo electrónico</label>
<label><input class="hide-column-tog" name="role-hide" type="checkbox" id="role-hide" value="role" checked='checked' />Perfil</label>
<label><input class="hide-column-tog" name="posts-hide" type="checkbox" id="posts-hide" value="posts" checked='checked' />Entradas</label>
		</fieldset>
				<fieldset class="screen-options">
		<legend>Paginación</legend>
							<label for="users_per_page">Número de elementos por página:</label>
				<input type="number" step="1" min="1" max="999" class="screen-per-page" name="wp_screen_options[value]"
					id="users_per_page" maxlength="3"
					value="20" />
							<input type="hidden" name="wp_screen_options[option]" value="users_per_page" />
		</fieldset>
		<p class="submit"><input type="submit" name="screen-options-apply" id="screen-options-apply" class="button button-primary" value="Aplicar"  /></p>
<input type="hidden" id="screenoptionnonce" name="screenoptionnonce" value="7ad0530a9f" />
</form>
</div>		</div>
				<div id="screen-meta-links">
					<div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<button type="button" id="contextual-help-link" class="button show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">Ayuda</button>
			</div>
					<div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<button type="button" id="show-settings-link" class="button show-settings" aria-controls="screen-options-wrap" aria-expanded="false">Opciones de pantalla</button>
			</div>
				</div>
		

<div class="wrap">
<h1>
Usuarios	<a href="http://localhost/wordpress/wp-admin/user-new.php" class="page-title-action">Añadir nuevo</a>
</h1>

<h2 class='screen-reader-text'>Filtrar lista de usuarios</h2><ul class='subsubsub'>
	<li class='all'><a href='users.php' class="current">Todos <span class="count">(1)</span></a> |</li>
	<li class='administrator'><a href='users.php?role=administrator'>Administrador <span class="count">(1)</span></a></li>
</ul>
<form method="get">

<p class="search-box">
	<label class="screen-reader-text" for="user-search-input">Buscar usuarios:</label>
	<input type="search" id="user-search-input" name="s" value="" />
	<input type="submit" id="search-submit" class="button" value="Buscar usuarios"  /></p>

<input type="hidden" id="_wpnonce" name="_wpnonce" value="9ad3ef26b6" /><input type="hidden" name="_wp_http_referer" value="/wordpress/wp-admin/users.php" />	<div class="tablenav top">

				<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-top" class="screen-reader-text">Selecciona acción en lote</label><select name="action" id="bulk-action-selector-top">
<option value="-1">Acciones en lote</option>
	<option value="delete">Borrar</option>
</select>
<input type="submit" id="doaction" class="button action" value="Aplicar"  />
		</div>
			<div class="alignleft actions">
				<label class="screen-reader-text" for="new_role">Cambiar perfil a&hellip;</label>
		<select name="new_role" id="new_role">
			<option value="">Cambiar perfil a&hellip;</option>
			
	<option value='subscriber'>Suscriptor</option>
	<option value='contributor'>Colaborador</option>
	<option value='author'>Autor</option>
	<option value='editor'>Editor</option>
	<option value='administrator'>Administrador</option>		</select>
	<input type="submit" name="changeit" id="changeit" class="button" value="Cambiar"  /></div><div class='tablenav-pages one-page'><span class="displaying-num">1 elemento</span>
<span class='pagination-links'><span class="tablenav-pages-navspan" aria-hidden="true">&laquo;</span>
<span class="tablenav-pages-navspan" aria-hidden="true">&lsaquo;</span>
<span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Página actual</label><input class='current-page' id='current-page-selector' type='text' name='paged' value='1' size='1' aria-describedby='table-paging' /><span class='tablenav-paging-text'> de <span class='total-pages'>1</span></span></span>
<span class="tablenav-pages-navspan" aria-hidden="true">&rsaquo;</span>
<span class="tablenav-pages-navspan" aria-hidden="true">&raquo;</span></span></div>
		<br class="clear" />
	</div>
<h2 class='screen-reader-text'>Lista de usuarios</h2><table class="wp-list-table widefat fixed striped users">
	<thead>
	<tr>
		<td  id='cb' class='manage-column column-cb check-column'><label class="screen-reader-text" for="cb-select-all-1">Seleccionar todos</label><input id="cb-select-all-1" type="checkbox" /></td><th scope="col" id='username' class='manage-column column-username column-primary sortable desc'><a href="http://localhost/wordpress/wp-admin/users.php?orderby=login&#038;order=asc"><span>Nombre de usuario</span><span class="sorting-indicator"></span></a></th><th scope="col" id='name' class='manage-column column-name'>Nombre</th><th scope="col" id='email' class='manage-column column-email sortable desc'><a href="http://localhost/wordpress/wp-admin/users.php?orderby=email&#038;order=asc"><span>Correo electrónico</span><span class="sorting-indicator"></span></a></th><th scope="col" id='role' class='manage-column column-role'>Perfil</th><th scope="col" id='posts' class='manage-column column-posts num'>Entradas</th>	</tr>
	</thead>

	<tbody id="the-list" data-wp-lists='list:user'>
		
	<tr id='user-1'><th scope='row' class='check-column'><label class="screen-reader-text" for="user_1">Elige pablo</label><input type='checkbox' name='users[]' id='user_1' class='administrator' value='1' /></th><td class='username column-username has-row-actions column-primary' data-colname="Nombre de usuario"><img alt='' src='http://2.gravatar.com/avatar/8b3af1fdf6266a98433e39c0868b0cc8?s=32&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/8b3af1fdf6266a98433e39c0868b0cc8?s=64&amp;d=mm&amp;r=g 2x' class='avatar avatar-32 photo' height='32' width='32' /> <strong><a href="http://localhost/wordpress/wp-admin/profile.php?wp_http_referer=%2Fwordpress%2Fwp-admin%2Fusers.php">pablo</a></strong><br /><div class="row-actions"><span class='edit'><a href="http://localhost/wordpress/wp-admin/profile.php?wp_http_referer=%2Fwordpress%2Fwp-admin%2Fusers.php">Editar</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Muestra más detalles</span></button></td><td class='name column-name' data-colname="Nombre"> </td><td class='email column-email' data-colname="Correo electrónico"><a href='mailto:mi.reloj.tuity@gmail.com'>mi.reloj.tuity@gmail.com</a></td><td class='role column-role' data-colname="Perfil">Administrador</td><td class='posts column-posts num' data-colname="Entradas"><a href='edit.php?author=1' class='edit'><span aria-hidden="true">1</span><span class="screen-reader-text">1 entrada de este autor</span></a></td></tr>	</tbody>

	<tfoot>
	<tr>
		<td   class='manage-column column-cb check-column'><label class="screen-reader-text" for="cb-select-all-2">Seleccionar todos</label><input id="cb-select-all-2" type="checkbox" /></td><th scope="col"  class='manage-column column-username column-primary sortable desc'><a href="http://localhost/wordpress/wp-admin/users.php?orderby=login&#038;order=asc"><span>Nombre de usuario</span><span class="sorting-indicator"></span></a></th><th scope="col"  class='manage-column column-name'>Nombre</th><th scope="col"  class='manage-column column-email sortable desc'><a href="http://localhost/wordpress/wp-admin/users.php?orderby=email&#038;order=asc"><span>Correo electrónico</span><span class="sorting-indicator"></span></a></th><th scope="col"  class='manage-column column-role'>Perfil</th><th scope="col"  class='manage-column column-posts num'>Entradas</th>	</tr>
	</tfoot>

</table>
	<div class="tablenav bottom">

				<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-bottom" class="screen-reader-text">Selecciona acción en lote</label><select name="action2" id="bulk-action-selector-bottom">
<option value="-1">Acciones en lote</option>
	<option value="delete">Borrar</option>
</select>
<input type="submit" id="doaction2" class="button action" value="Aplicar"  />
		</div>
			<div class="alignleft actions">
				<label class="screen-reader-text" for="new_role2">Cambiar perfil a&hellip;</label>
		<select name="new_role2" id="new_role2">
			<option value="">Cambiar perfil a&hellip;</option>
			
	<option value='subscriber'>Suscriptor</option>
	<option value='contributor'>Colaborador</option>
	<option value='author'>Autor</option>
	<option value='editor'>Editor</option>
	<option value='administrator'>Administrador</option>		</select>
	<input type="submit" name="changeit" id="changeit" class="button" value="Cambiar"  /></div><div class='tablenav-pages one-page'><span class="displaying-num">1 elemento</span>
<span class='pagination-links'><span class="tablenav-pages-navspan" aria-hidden="true">&laquo;</span>
<span class="tablenav-pages-navspan" aria-hidden="true">&lsaquo;</span>
<span class="screen-reader-text">Página actual</span><span id="table-paging" class="paging-input"><span class="tablenav-paging-text">1 de <span class='total-pages'>1</span></span></span>
<span class="tablenav-pages-navspan" aria-hidden="true">&rsaquo;</span>
<span class="tablenav-pages-navspan" aria-hidden="true">&raquo;</span></span></div>
		<br class="clear" />
	</div>
</form>

<br class="clear" />
</div>

<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><!-- wpbody -->
<div class="clear"></div></div><!-- wpcontent -->