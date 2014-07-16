<?php
/***********************************************************************************************************
***********************************************************************************************************
****************************************CSS UNIVERSAL CLASS****************************************
*************************************************************************************************
***************************************Copyright Hrevert Technologies 2013**********************************
**************************************************************************************************
*************************************************************************************************/

//variables for styling
//fonts styling
$font_family_for_hgroup="Arial";
$font_color_for_hgroup="#777";
$paragraph_font_size="";
$paragraph_font_size="";

$input_font_family="Arial";
$input_font_size="18px";
$input_font_color="#000";
$input_font_weight="700";

$p_font_family="Arial";
$p_font_size="16px";
$p_font_weight="";
$p_line_height="150%";
$p_margin="";
$p_padding="";
$p_border="";
$p_column_count="1";
$p_color="#000";

//layout styling

/**form elements**/
$padding_form_elements="5px";

//width for both textarea and input
$input_width="315px";
//height for both input and button
$input_height="35px";

//for both textarea and input
$input_border="2px solid #777";

$text_area_height="100px";

//button style variables
$button_width="100px";
$button_border="2px solid #ccc";

$input_border_radius="5px";
$input_outline="none";

//images for form validation
$required_image_location="url(style_images/required.gif)";
$valid_image_location="url(style_images/valid.png)";
$invalid_image_location="url(style_images/invalid.png)";

/*************list style************/
$list_style_type="disc";
$list_style_display="block";
$list_style_width="";
$list_style_height="";
$list_style_margin="50px";



/***********************************************************************************************************
***********************************************************************************************************
*******************************************Styling starts here*******************************************
*********************************************************************************************************/

//reset style starts here
$RESET = <<< RESET

/*reset style*/

*{
    margin:0px;
    padding:0px;
}
/*
*, *:before, *:after{
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-o-box-sizing:border-box;
	-ms-box-sizing:border-box;
	box-sizing:border-box;
}
*/
header,section,footer,article,aside,nav,hgroup{
	display:block; 
} 
img{
	width:100%;
	border:none;
}

input, textarea{
outline:none;
}

RESET;

//factory style starts here
$FACTORY = <<< FACTORY

h1,h2,h3,h4,h5,h6{
font-family:'$font_family_for_hgroup';
color:$font_color_for_hgroup;
}

FACTORY;


/*list style style*/

$LIST_STYLE = <<< LIST_STYLE

/*put this class on ul*/
.list_style_class li{
list-style-type:$list_style_type;
display:$list_style_display;
width:$list_style_width;
height:$list_style_height;
margin:$list_style_margin;
}

LIST_STYLE;

/*form elements style*/

$FORM_ELEMENTS = <<< FORM_ELEMENTS

input,.button_class,textarea{
padding:$padding_form_elements;
}

input,.button_class{
height:$input_height;
}

input,textarea{
outline:$input_outline; 
font:$input_font_weight $input_font_size '$input_font_family';
color:$input_font_color;
border:$input_border;
-webkit-border-radius:$input_border_radius;
-moz-border-radius:$input_border_radius;
-ms-border-radius:$input_border_radius;
border-radius:$input_border_radius;
}

textarea{
height:$text_area_height;
}

input,textarea{
width:$input_width;
}

.button_class{
width:$button_width;
border:$button_border;
}

/********Validation style***********/

input:required,textarea:required {
	background: #fff $required_image_location no-repeat 98% center;
	transition:background 100ms linear;
}
/*
input.required_class:required:valid,textarea.required_class:required:valid {
	background: #fff $valid_image_location no-repeat 98% center;
	box-shadow: 0 0 5px #5cd053;
	border-color: #28921f;
	color:#28921f;
	transition:background 100ms linear;
}

input.required_class:focus:invalid,textarea.required_class:focus:invalid {
	background: #fff $invalid_image_location no-repeat 98% center;
	box-shadow: 0 0 5px #d45252;
	border-color: #b03535;
	color:#b03535;
}
*/
.input_message{
	background: #d45252;
	border-radius: 3px 3px 3px 3px;
	color: white;
	margin-left:8px;
	padding: 1px 6px;
	z-index: 999; /* hints stay above all other elements */
	position: absolute; /* allows proper formatting if hint is two lines */
	//height:$input_height;
	//top:5%;
	display: none;
}

form input:focus + .input_message {display: inline;}
form input:required:valid + .input_message {background: #28921f;}
form input:required:valid + .input_message::before {color:#28921f;}

FORM_ELEMENTS;


/*paragraph styles*/

$PARAGRAPH = <<< PARAGRAPH

p{
font:$p_font_weight $p_font_size '$input_font_family';
line-height:$p_line_height;
color:$p_color;
margin:$p_margin;
padding:$p_padding;
-webkit-column-count:$p_column_count;
-moz-column-count:$p_column_count;
column-count:$p_column_count;
}


PARAGRAPH;


/**********General Style Ends here****************/


/***********************************************************************************************************
***********************************************************************************************************
*******************************************Styling ends here*******************************************
*********************************************************************************************************/

//echo $RESET;
//echo $FACTORY;
echo $FORM_ELEMENTS;
//echo $PARAGRAPH;
//echo $LIST_STYLE;

?>