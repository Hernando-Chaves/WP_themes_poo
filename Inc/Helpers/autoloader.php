<?php  
spl_autoload_register('bwc_function_autoloader');
function bwc_function_autoloader($class) {
	$namespace = 'BWC\THEME';
 
	if (strpos($class, $namespace) !== 0) {
		return;
	}
 
	$class = str_replace($namespace, '', $class);
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
 
	$directory = get_template_directory();
	$path = $directory . DIRECTORY_SEPARATOR . 'Inc' . DIRECTORY_SEPARATOR . $class;
 
	if (file_exists($path)) {
		require_once($path);
	}
}