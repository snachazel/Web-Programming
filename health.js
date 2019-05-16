function slide(){
	im = document.getElementById("im");
	idx = 0;
	health = ["./health1.jpg" ,  "./health2.jpg" ,"./health3.jpg" ,"./health4.jpg" ,"./health5.jpg" ,"./health6.jpg" , "./health7.jpg" , "./health8.jpg" , "./nothealth1.jpg" ,  "./nothealth2.jpg" ,"./nothealth3.jpg" ,"./nothealth4.jpg" ,"./nothealth5.jpg" ,"./nothealth6.jpg" , "./nothealth7.jpg" , "./balance1.jpg" ,  "./balance2.jpg" ,"./balance3.jpg" ,"./balance4.jpg" ,"./balance5.jpg" ,"./balance6.jpg" ];
	hlen = health.length;
	dur = 2000;
	function show(){
		idx = idx + 1;
		document.getElementById("im").src = health[idx % hlen];
	}
	setInterval( show , dur);
}

window.onload = slide();