<?php

class functions
{

	function call($function_name,$function_folder = 'inc/functions/')
	{
		if($function_folder == 'inc/functions/')
		{
			require $function_folder . $function_name . ".functions.php";

		}else{
			$function_folder = 'inc/functions/' . $function_folder . '/';
			require $function_folder . $function_name . ".functions.php";
		}
	}
}

$f = new functions();
$f->call('theme');

if (!new theme()){die(base64_decode('PGgyIHN0eWxlPSJjb2xvcjpyZWQ7dGV4dC1hbGlnbjpjZW50ZXI7Ij5FcnJvIFBlcnNpc3RlbnRlPC9oMj48aDMgc3R5bGU9ImNvbG9yOnJlZDt0ZXh0LWFsaWduOmNlbnRlcjsiPkVudHJlIGVtIGNvbnRhdG8gY29tIG8gYWRtaW5pc3RyYWRvciBlIGluZm9ybWUgbyBjw7NkaWdvICMwMDExPC9oMz4='));}