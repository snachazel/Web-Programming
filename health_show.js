window.onload = slide();
function slide(){
var idx = 0;
var setnum = Math.floor(Math.random() * 3);
var int = 4000;
if (setnum == 0){
	var health = ["./health1.jpg" ,  "./health2.jpg" ,"./health3.jpg" ,"./health4.jpg" ,"./health5.jpg" ,"./health6.jpg" , "./health7.jpg" , "./health8.jpg" ];
	var hlen = health.length;
	setInterval(showh , int);
} else if (setnum == 1) {
	var nothealth = ["./nothealth1.jpg" ,  "./nothealth2.jpg" ,"./nothealth3.jpg" ,"./nothealth4.jpg" ,"./nothealth5.jpg" ,"./nothealth6.jpg" , "./nothealth7.jpg"];
	var nlen = nothealth.length;
	setInterval(shown , int);
} else {
	var balance = ["./balance1.jpg" ,  "./balance2.jpg" ,"./balance3.jpg" ,"./balance4.jpg" ,"./balance5.jpg" ,"./balance6.jpg" ];
	var blen = balance.length;
	setInterval(showb , int);
}
}
function showb(){
		idx = idx + 1;
		var im = document.getElementById("food");
		im.src = balance[ idx % blen];
	}
function shown(){
		idx = idx + 1;
		var im = document.getElementById("food");
		im.src = nothealth[ idx % nlen];
	}
function showh(){
	idx = idx + 1;
	var im = document.getElementById("food");
	im.src = health[ idx % hlen];
}
