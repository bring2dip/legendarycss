<?php

class Flex{
	
	private $wrapper;
	private $flex_direction;
	
	//for browser prefix
	/*e.g display:flex;*/
	private $display; 
	private $align_items;
	private $align_content;
	private $flex_direction_prop;
	private $flex_prop;
	private $oder;
	
	
	
public function __construct($wrapper_id_or_class,$flex_direction="column"){
	
	$this->wrapper=$wrapper_id_or_class;
	$this->flex_direction=$flex_direction;
	$this->browser_prefix();
	$this->flex_initialize();
	
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

public function browser_prefix(){

	switch (self::getBrowser()){

	case "chrome":
		$this->display="-webkit-flex";
		$this->align_items="-webkit-align-items";
		$this->align_content="-webkit-align-content";
		$this->flex_direction_prop="-webkit-flex-direction";
		$this->flex_prop="-webkit-flex";
		$this->order="-webkit-order";
		break;
		
	case "firefox":
		$this->display="flex";
		$this->align_items="align-items";
		$this->align_content="align-content";
		$this->flex_direction_prop="flex-direction";
		$this->flex_prop="flex";
		$this->order="order";
		break;
		
	case "ie":
		$this->display="-ms-flexbox";
		$this->align_items="-ms-flex-pack";
		$this->align_content="-ms-flex-pack";
		$this->flex_direction_prop="-ms-flex-direction";
		$this->flex_prop="-ms-flex-positive";
		$this->order="-ms-order";
		break;	
	}


}

public function flex_initialize(){

	$LAYOUT = <<< LAYOUT
	body{
	display:$this->display;
	$this->align_content:center;
	$this->align_items:center; 
	}
	
	$this->wrapper{
	width:100%;	
	display:$this->display;
	$this->align_content:center;
	$this->flex_direction_prop:$this->flex_direction;
	$this->flex_prop:1;
	}
	
	$this->wrapper > header, $this->wrapper > section, $this->wrapper > footer{
	$this->flex_prop:1;
	}


LAYOUT;
echo $LAYOUT;

}


/*********default direction is row*****************/
public function flex_direction($wrapper_id_or_class,$child_elements,$flex_direction="row",$max_view,$min_view){

	$LAYOUT = <<< LAYOUT
	@media only screen and (min-width:$min_view) and (max-width:$max_view){
	$wrapper_id_or_class{
	display:$this->display;
	$this->align_content:center;
	$this->flex_direction_prop:$flex_direction;
	$this->flex_prop:1;
	}
	
	$wrapper_id_or_class > $child_elements{
	$this->flex_prop:1;
	}
	}
LAYOUT;
echo $LAYOUT;
}

public function items_ratio($wrapper_id_or_class,$child_elements,$ratio){

	$LAYOUT = <<< LAYOUT
	
	$wrapper_id_or_class>$child_elements{
	$this->order:$oder;
	$this->flex_prop:1;
	}
	
LAYOUT;
echo $LAYOUT;
}

public static function view_device(){


}



}

?>