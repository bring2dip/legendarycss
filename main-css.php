<?php
header("Content-type:text/css");
require_once dirname(__FILE__).("/Flex.class.php");

$flex=new Flex("#main_wrapper","column");
$flex->flex_direction("#main_header","section","row","5000px","769px");
$flex->flex_direction("#middle_section","div","column","5000px","769px");
$flex->flex_direction("#middle_top","section","row","5000px","769px");
$flex->flex_direction("#middle_bottom","section","row","5000px","769px");

$layout = <<< layout

*{
margin:0px;
padding:0px;
}

#main_wrapper{
background:#eee;
}

#main_header{
height:150px;
border:thin solid #f00;
}

#marketing{
height:300px;
}

#main_section{
height:350px;
border:thin solid #0f0;
}

#main_section section{
border:thin solid #000;
}

#main_section>section:nth-child(1){
flex:3;
background:#0f0;
}
#main_section>section:nth-child(2){
flex:1;
order:-1
}

#main_footer{
height:200px;
border:thin solid #00f;
}

#menu article{
display:inline-block;
}

layout;

echo "hello";

echo $layout;

?>