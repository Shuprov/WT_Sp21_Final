<html>
<head></head>
<body>
<p>This is from HTML</p>
<p id="p1"></p>

<button onclick="turn_on()" onmouseover="turn_on()" onmouseout="turn_off()">Turn on</button>
<img id="pic" src="https://www.w3schools.com/js/pic_bulboff.gif">
<button onclick="turn_off()">Turn off</button>
<span>Info</span><img onmouseover="show()" onmouseout="vanish()" src="https://image.shutterstock.com/image-vector/info-sign-icon-260nw-1126440728.jpg"height="30px" width="30px">
<span id="tip" ></span>
<!--keyboard event-->
<input type="text" onkeyup="keyUp()" onkeydown="keyDown()">
<p id="key_out"> </p>
</body>
<script>
//document.write("This is from JS");
//console.log("This is printed in JS");
//alert("This is from alert");
var keyOut=get('key_out');
var count_up=0;
var count_down=0;
function get(id)
{
	return document.getElementById(id);
}
function keyUp(){
	keyOut.innerHTML="Key Up"+count_up++;
}
function keyDown(){
	keyOut.innerHTML="Key Down"+count_down++;
}
var pic1=document.getElementById('pic');
var p1=document.getElementById("p1");
p1.innerHTML="This is from JS";
function turn_on(){
pic1.src='https://www.w3schools.com/js/pic_bulbon.gif';
}
function turn_off(){
	pic1.src='https://www.w3schools.com/js/pic_bulboff.gif';
}
function show(){
	var tip1=document.getElementById('tip');
	tip1.innerHTML="This is info";
	tip1.style="border:1px dashed black";
}
function vanish(){
	var tip1=document.getElementById('tip');
	tip1.innerHTML="";
		tip1.style="none";
}

</script>
</html>