var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
    if (count % 2 == 0) { 
		document.getElemetnById("demo").innerHTML = "";
	} else {
		var img = document.createElement("img");
        img.src = "https://tanki.su/static/5.130.9_1cb8d9/common/img/wot_artboard_ruby.png";
        document.getElementById("demo").appendChild(img);
	}
}
