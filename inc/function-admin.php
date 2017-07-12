<?php
/*
==================================
		ADMIN PAGE
==================================
*/
function agregar_menu_principal(){
	//Crear menu principal
	add_menu_page('Opciones Alex Plugin', 'Alex Plugin', 'manage_options','alex_plug','crear_pagina_alexplugin','dashicons-admin-plugins',110);
	
	//Crear sub paginas
	add_submenu_page('alex_plug', 'Opciones Alex Plugin', 'General', 'manage_options', 'alex_plug', 'crear_pagina_alexplugin');
	
	add_submenu_page('alex_plug', 'Pagina de Ajustes', 'Ajustes', 'manage_options', 'ajustes_subpage', 'crear_subpagina_alexplugin');
	
	//activar ajustes custom
	add_action('admin_init', 'alex_ajustes_custom');
}
//
//	
//generara la pagina de admin
function crear_pagina_alexplugin(){
	require_once(dirname(__FILE__).'/templates/admin dashboard.php');
}
function crear_subpagina_alexplugin(){
	echo '<h1>Menu de Ajustes<h1>
	<hr>';
}
//
//
add_action('admin_menu','agregar_menu_principal');
add_action('admin_submenu','agregar_menu_principal');
//
//
function alex_ajustes_custom (){
	add_settings_section('alex-setting-sidebar', 'Opciones Sidebar', 'alexPlug_sidebar_options','alex_plug');
	//
	register_setting('alexplug-ajustes-group','foto_principal');
	register_setting('alexplug-ajustes-group','lugares_envio','alexplug_sanitize_lugarenvio');
	register_setting('alexplug-ajustes-group','devoluciones');
	register_setting('alexplug-ajustes-group','precio_limite');
	//
	add_settings_field('sidebar-foto-principal','Foto Principal','alexplug_campo_sidebar_foto', 'alex_plug','alex-setting-sidebar');
	add_settings_field('sidebar-lugares-envio','Lugar de Envio','alexplug_campo_sidebar_lugares', 'alex_plug','alex-setting-sidebar');
	add_settings_field('sidebar-devoluciones','Devoluciones','alexplug_campo_sidebar_devoluciones', 'alex_plug','alex-setting-sidebar');
	add_settings_field('sidebar-precio_limite','Precio Limite','alexplug_campo_sidebar_precio_limite', 'alex_plug','alex-setting-sidebar');
	}

function alexPlug_sidebar_options(){
}
function alexplug_campo_sidebar_foto(){
	$picture = esc_attr(get_option('foto_principal'));
}
function alexplug_campo_sidebar_lugares(){
	$Lugar_Envio= esc_attr(get_option('lugares_envio'));
//	
echo '<input type="text" name="lugares_envio" value="'.$Lugar_Envio.'" placeholder="Lugar de envio..."/>
<p class="description">Especifica los lugares donde se hacen envios.</p>
<hr>';
}
function alexplug_campo_sidebar_devoluciones (){
?>
		<input type="radio" name="devoluciones" value="Si" <?php checked('Si', esc_attr(get_option('devoluciones')), true); ?> /> Si
        <input type="radio" name="devoluciones" value="No" <?php checked('No', esc_attr(get_option('devoluciones')), true); ?> /> No <hr>
<?php
}
function alexplug_campo_sidebar_precio_limite(){
	$limite = esc_attr(get_option('precio_limite'));
?>
		<input type="number" name="precio_limite" value="<?php echo $limite ?>" placeholder="Precio Limite" list="lista"/>
		<p class="description">Especifica el precio limite para los productos que se mostraran.</p>
		<datalist id="lista">
			<option value="300">
			<option value="500">
			<option value="700">
			<option value="900">
			<option value="1100">
			<option value="1300">
		</datalist>
		<hr>
<?php	
}
function alexplug_sanitize_lugarenvio($input){
	$output = sanitize_text_field($input);
	$output = str_replace('@','', $output);
	return($output);

}
?>