<!DOCTYPE html>

<html>

<head>
<title>Demo</title>
<style type="text/css">

.wrapper{
width:1200px;
height:500px;
margin:0 auto;
}

#roundProgress{
	margin:0px auto;
	border:thin solid #000;
	padding:5px;
	}

</style>



</head>


<body>
	<div class="wrapper">
		<canvas id="roundProgress" height="500" width="1000"></canvas>
	</div>
<script type="text/javascript">
	var c = document.getElementById("roundProgress");	
	var ctn = c.getContext("2d");
	
	for( x=1; x<=950; x +=10) {
		ctn.moveTo(x,0);
		ctn.lineTo(x,450);		
	}

	for	(y=1; y<=450;y +=10){
		ctn.moveTo(0,y);
		ctn.lineTo(950,y);
	}
	
	ctn.strokeStyle = "#ccc";
	ctn.stroke();
	
	//axis line
	ctn.beginPath();
	ctn.moveTo(450,0);
	ctn.lineTo(450,450);
	ctn.moveTo(0,200);
	ctn.lineTo(950,200);
	ctn.strokeStyle = "#000";
	ctn.stroke();
	
	//x-axis and y-axis font
	ctn.font ="normal 16px Arial";
	ctn.fillText("x-axis",960,210);
	ctn.fillText("y-axis",450,460);
	
	ctn.save();	
	 ctn.beginPath();
	 ctn.setTransform(1,0,0,1,0,0);
	 ctn.translate(450,200);
	 ctn.rotate((Math.PI/180)*45);
	 ctn.scale(1.5,1.5);
	 ctn.rect(-50,-50,100,100);
	 ctn.fillStyle = "aqua";
	 ctn.globalAlpha=0.5;
	 ctn.fill();
	 ctn.closePath();
	 ctn.restore();
	 
	 ctn.beginPath();
	 // ctn.translate(0,0);
	 var rg = ctn.createRadialGradient(450,200,50,450,200,150);
	 rg.addColorStop(0,"yellow");
	 //rg.addColorStop(0.5,"yellow");
	 rg.addColorStop(1,"red");
	 ctn.fillStyle = rg;
	 ctn.arc(250,200,100,(Math.PI/180)*0,(Math.PI/180)*360,false);
	ctn.shadowOffsetX =1;
	ctn.shadowOffsetY =1;
	ctn.shadowColor ="#2e2e2e";
	ctn.shadowBlur= 5;
	 ctn.fill();
	 //ctn.stroke();
	 ctn.closePath();
	 
	 ctn.beginPath();
	 var google_img = new Image();
	 google_img.src="images/google.png";
	 google_img.onload = function(e){		
		ctn.drawImage(google_img,40,200);
		
	 }
	  
	 
	/*
	ctn.beginPath();
	ctn.rect(450,200,200,200);
	//ctn.fill();
	ctn.clip();
	ctn.closePath();
	 
	 ctn.beginPath();
	 ctn.arc(470,220,100,(Math.PI/180)*0,(Math.PI/180)*360,false);
	 ctn.stroke();
	
	ctn.restore();
	ctn.beginPath();
	ctn.arc(470,220,200,(Math.PI/180)*0,(Math.PI/180)*360,false);
	ctn.stroke();
	/*
	//var gradient = ctn.createLinearGradient(300,0,0,0);
	//gradient.addColorStop(0,"#ddd");
	
	//gradient.addColorStop(1,"#00f");
	
	ctn.fillStyle = "rgba(100, 0, 0, 1)";	
	ctn.fillRect(60,20, 100,100);
	ctn.fillStyle = "rgba(0, 100, 0, 1)";	
	ctn.fillRect(70,30, 100,100);	
	ctn.fillStyle = "rgba(0, 0, 100, 1)";	
	ctn.fillRect(80,40, 100,100);
	ctn.clearRect(85,45, 100,100);
	ctn.strokeRect(85,45, 100,100);
	
	ctn.fillStyle ="#f00";
	ctn.font="bold 25px Arial";
	ctn.fillText("Hello World",100,200);
	
	var image = new Image();
	image.src="images/valid.png";
	image.onload = function(){		
		ctn.drawImage(image,90,150);		
	};
	
	ctn.beginPath();
	ctn.fillStroke ="#f00";
	ctn.arc(120,220,50,0,2*Math.PI);
	ctn.stroke();
	ctn.beginPath();
	ctn.fillStyle = "#0f0";	
	
	ctn.arc(120,220,80,(Math.PI/180)*120, (Math.PI/180)*50, false);
	ctn.lineWidth ="20";
	ctn.stroke();
	
	//line examples
	
	ctn.beginPath();
	ctn.lineWidth ="10";
	ctn.lineJoin = 'bevel';
	ctn.lineCap = 'round';
	ctn.moveTo(10,10);
	ctn.lineTo(300,300);
	ctn.lineTo(400,0);
	ctn.stroke();
	ctn.closePath();
	
	ctn.beginPath();
	ctn.moveTo(150,200);
	ctn.strokeStyle = "rgb(200,0,0)";
	ctn.bezierCurveTo(20,-100,0,300,390,200);
	//ctn.bezierCurveTo(0,-100,0,300,390,200);	
	ctn.stroke();
	*/


</script>
</body>

</html>

