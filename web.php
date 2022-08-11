<rmd id = "res"></rmd>
<input id = "cu" type = "hidden"> 
<k id = "nove"></k>
<?php
$f = file_get_contents("web eventos.txt");
$p = json_decode($f);
$quant = count($p);
?>
<style>
#res{color:green}
    #divContent{
     overflow:auto; 
	 height:500px;
	 scroll-behavior: auto;
	color:red
    }
}
</style>
<div id="divContent" class='content'><rmd id = "erros"></div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function is_img(file) {
	var ajax = new XMLHttpRequest();

	ajax.open("GET",file,true);
	ajax.send();

	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4){
			var jpg = ajax.responseText;

			if(ajax.status===200) {
				res.innerHTML += "Achou " + file + "<br>"
				document.getElementById("cu").value = "foi"
                var img = document.createElement("img")
                img.src = file
                document.body.appendChild(img)
				clearInterval(para)
                divContent.style.display="none"
			} else {
				erros.innerHTML += "ERROR " +file + "<br>";
			}
		}
	}
}

var af =<?php echo $f;?>


var j = <?php echo $quant;?> 

var data = new Date()
var mes = data.getMonth()+1
var dia = data.getDate()+1
var dia1 = data.getDate()+2
var dia2 = data.getDate()+3
var dia3 = data.getDate()+4

var uno = mes+""+dia
var dos = mes+""+dia1
var tres = mes+""+dia2
var quatro = mes+""+dia3

var uno2 = mes+"0"+dia
var dos2 = mes+"0"+dia1
var tres2 = mes+"0"+dia2
var quatro2 = mes+dia3

var uno3 = "0"+mes+""+dia
var dos3 = "0"+mes+""+dia1
var tres3 = "0"+mes+""+dia2
var quatro3 = "0"+mes+""+dia3

var uno4 = "0"+mes+"0"+dia
var dos4 = "0"+mes+"0"+dia1
var tres4 = "0"+mes+"0"+dia2
var quatro4 = "0"+mes+"0"+dia3

for(z = 0;z<j;z++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[z]+uno+".png");}
for(y = 0;y<j;y++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[y]+dos+".png");}
for(x = 0;x<j;x++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[x]+tres+".png");}
for(v = 0;v<j;v++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[v]+quatro+".png");}
for(v = 0;v<j;v++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[v]+".png");}
for(z = 0;z<j;z++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[z]+uno2+".png");}
for(y = 0;y<j;y++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[y]+dos2+".png");}
for(x = 0;x<j;x++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[x]+tres2+".png");}
for(v = 0;v<j;v++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[v]+quatro2+".png");}
for(z = 0;z<j;z++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[z]+uno3+".png");}
for(y = 0;y<j;y++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[y]+dos3+".png");}
for(x = 0;x<j;x++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[x]+tres3+".png");}
for(v = 0;v<j;v++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[v]+quatro3+".png");}
for(z = 0;z<j;z++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[z]+uno4+".png");}
for(y = 0;y<j;y++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[y]+dos4+".png");}
for(x = 0;x<j;x++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[x]+tres4+".png");}
for(v = 0;v<j;v++){is_img("https://freefiremobile-a.akamaihd.net/common/OB35/BR/splash/"+af[v]+quatro4+".png");}
for(z = 0;z<j;z++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[z]+uno+"_1424x706.jpg");}
for(y = 0;y<j;y++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[y]+dos+"_1424x706.jpg");}
for(x = 0;x<j;x++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[x]+tres+"_1424x706.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+quatro+"_1424x706.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+"_1424x706.jpg");}
for(z = 0;z<j;z++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[z]+uno2+"_1424x706.jpg");}
for(y = 0;y<j;y++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[y]+dos2+"_1424x706.jpg");}
for(x = 0;x<j;x++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[x]+tres2+"_1424x706.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+quatro2+"_1424x706.jpg");}
for(z = 0;z<j;z++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[z]+uno3+"_1424x706.jpg");}
for(y = 0;y<j;y++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[y]+dos3+"_1424x706.jpg");}
for(x = 0;x<j;x++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[x]+tres3+"_1424x706.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+quatro3+"_1424x706.jpg");}
for(z = 0;z<j;z++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[z]+uno4+"_1424x706.jpg");}
for(y = 0;y<j;y++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[y]+dos4+"_1424x706.jpg");}
for(x = 0;x<j;x++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[x]+tres4+"_1424x706.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+quatro4+"_1424x706.jpg");}
for(z = 0;z<j;z++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[z]+uno+"_114x57.jpg");}
for(y = 0;y<j;y++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[y]+dos+"_114x57.jpg");}
for(x = 0;x<j;x++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[x]+tres+"_114x57.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+quatro+"_114x57.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+"_114x57.jpg");}
for(z = 0;z<j;z++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[z]+uno2+"_114x57.jpg");}
for(y = 0;y<j;y++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[y]+dos2+"_114x57.jpg");}
for(x = 0;x<j;x++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[x]+tres2+"_114x57.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+quatro2+"_114x57.jpg");}
for(z = 0;z<j;z++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[z]+uno3+"_114x57.jpg");}
for(y = 0;y<j;y++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[y]+dos3+"_114x57.jpg");}
for(x = 0;x<j;x++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[x]+tres3+"_114x57.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+quatro3+"_114x57.jpg");}
for(z = 0;z<j;z++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[z]+uno4+"_114x57.jpg");}
for(y = 0;y<j;y++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[y]+dos4+"_114x57.jpg");}
for(x = 0;x<j;x++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[x]+tres4+"_114x57.jpg");}
for(v = 0;v<j;v++){is_img("https://dl.ctl.freefiremobile.com/common/OB35/BR/event/"+af[v]+quatro4+"_114x57.jpg");}
</script>

