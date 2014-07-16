<?php
class main{

	public function __construct(){
	//empty
	}

	public function __destruct() {
		  //empty
	}
		
	public static function getBrowser() {
			$user_agent = $_SERVER["HTTP_USER_AGENT"];
			$browser        =   "Unknown Browser";
			$browser_array  =   array (

				'/msie/i'       => 'ie',
				'/firefox/i'    => 'firefox',
				'/safari/i'     => 'safari',
				'/chrome/i'     => 'chrome',
				'/opera/i'      => 'opera',
				'/netscape/i'   => 'netscape',
				'/maxthon/i'    => 'maxthon',
				'/konqueror/i'  => 'konqueror',
				'/mobile/i'     => 'handheld Browser'

			);
			foreach ($browser_array as $regex => $value) { 
				if (preg_match($regex, $user_agent)) $browser = $value;

			}
			return $browser;

		}	
}
?>