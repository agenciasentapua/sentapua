<?php

class mytheme {

	public function __construct() {

		// My Theme Layout Constructor
		echo PHP_EOL . '<!-- Theme Layout Loaded -->' . PHP_EOL . PHP_EOL;

	}

	function import_theme_part($file_name, $type = null, $file_folder = 'inc/theme/')
	{
		if($type==null){
			$type = 'sections';
		}

		if($file_folder != 'inc/theme/')
		{
			$file_folder = 'inc/theme/' . $file_folder . '/';
		}else{
			$file_folder = 'inc/theme/' . $type . '/';
		}

		get_template_part($file_folder . $file_name, 'asdc');

	}

	function make_header($slug=null){
		$type = 'header';
		if($slug!=''||$slug!=null){
			$this->import_theme_part($slug, $type);
		}else{
			die('<h2 style="color:red;text-align:center">Erro Persistente</h2><h3 style="color:red;text-align:center">Verifique o slug na section</h3>');
		}
	}

	function make_title($slug=null){
		if($slug!=''||$slug!=null){

		}else{
			die('<h2 style="color:red;text-align:center">Erro Persistente</h2><h3 style="color:red;text-align:center">Verifique o slug na section</h3>');
		}
	}

	function make_footer($slug=null){
		if($slug!=''||$slug!=null){

		}else{
			die('<h2 style="color:red;text-align:center">Erro Persistente</h2><h3 style="color:red;text-align:center">Verifique o slug na section</h3>');
		}
	}

	function make_content($slug=null, $template=null){
		if($slug!=''||$slug!=null){
			if($template == null){
				$this->import_theme_part($slug);
				echo PHP_EOL . PHP_EOL;
			}
		}else{
			die('<h2 style="color:red;text-align:center">Erro Persistente</h2><h3 style="color:red;text-align:center">Verifique o slug na section</h3>');
		}
	}

}