<!DOCTYPE HTML>
<html>
	<header>
		<link type="text/css" rel="stylesheet" href="hello.css">
		<audio src="liyi.mp3" autoplay="autoplay" loop="loop">
		broswer not support!
		</audio>
	</header>
	<?php
	/*	$myfile = fopen("file1", "r");
		echo fread($myfile, filesize("file1"));
		fclose($myfile);
		echo "aaaaaaaaaa";*/
	?>
	<div id="maindiv" class="wrapper">
		<header>
			<!--img src="yashaji.jpg" alt="yashaji" height="250px" width="853px"-->
			<canvas id="mycanvas" class="header" height="250px" width="1000px"></canvas>
			<script type="text/javascript">
			var c=document.getElementById("mycanvas");
			var ctx=c.getContext("2d");
			ctx.fillStyle = "#ff0000";
			//ctx.fillRect(0, 0, 150, 75);
			var monsrdy=false;
			var monsterimg=new Image();
			monsterimg.onload=function() {
				monsrdy=true;
			}
			monsterimg.src="monster.png";
			ctx.drawImage(monsterimg, 0, 0);
			var monster={
				speed: 3
			};
			monster.x=0;
			monster.y=0;
			var movemonster=function() {
				monster.x=Math.random()*853;
				monster.y=Math.random()*250;
			}
			
			var keysdown = {};
			addEventListener("keydown", 
				function(e) {
					e.preventDefault();
					//keysdown[e.keyCode] = true;
				}, false
			);

			addEventListener("keyup", 
				function(e) {
					e.preventDefault();
					//delete keysdown[e.keyCode];
				}, false
			);
			var main=function() {
			//ctx.fillRect(0, 0, monster.x, monster.y);
			ctx.clearRect(0, 0, c.width, c.height);
			monster.x = monster.x + Math.random() * 5 - 2.5;
			monster.y = monster.y + Math.random() * 5 - 2.5;
			if(monster.x > 970) {
				monster.x = 970;
			}
			if(monster.y > 218) {
				monster.y = 218;
			}
			if(monster.x < 0) {
				monster.x = 0;
			}
			if(monster.y < 0) {
				monster.y = 0;
			}
			if(monsrdy) {
				ctx.drawImage(monsterimg, monster.x, monster.y);
			}
			if(37 in keysdown) {
				monster.x = monster.x - 1 * monster.speed;
				if(monster.x < 0) {
					monster.x = 0;
					//movemonster();
				}
			}
			if(38 in keysdown) {
				monster.y = monster.y - 1 * monster.speed;
				if(monster.y < 0) {
					monster.y = 0;
					//movemonster();
				}
			}
			if(39 in keysdown) {
				monster.x = monster.x + 1 * monster.speed;
				if(monster.x > 970) {
					monster.x = 970;
					//movemonster();
				}
			}
			if(40 in keysdown) {
				monster.y = monster.y + 1 * monster.speed;
				if(monster.y > 218) {
					monster.y = 218;
					//movemonster();
				}
			}
			requestAnimationFrame(main);
			}

			var w = window;
			/*window.onscroll = function(e) {
				var si = Math.max(document.body.scrollLeft, document.documentElement.scrollLeft);
				var si = si + 270;
				document.getElementById("main").style.left = si + "px";
			}*/
			requestAnimationFrame = w.requestAnimationFrame || w.webkitRequestAnimationFrame || w.msRequestAnimationFrame || w.mozRequestAnimationFrame;
			main();
			</script>


		</header>

		<aside id="navi" class="navi">
			<li class="list" id="li1" onclick="myclickfunc(this)" onmousemove="mousemove(this)" onmouseout="mouseout(this)">1st list</li>
			<li class="list" id="li2" onclick="my2ndfunc()" onmousemove="mousemove(this)" onmouseout="mouseout(this)">2en list</li>
			<li class="list" id="li3" onclick="my3rdfunc()" onmousemove="mousemove(this)" onmouseout="mouseout(this)">3rd list</li>
			<script type="text/javascript">
				function myclickfunc(x) {
					//alert(x.id);
					if(x.id=="li1") {
						document.getElementById("main").innerHTML="<p><?php $myfile=fopen("file1", "r");echo fread($myfile, filesize("file1")-1);fclose($myfile)?>this is the first</p>";
					}
					else {
						document.getElementById("main").innerHTML="<p>fail!</p>";
					}
				}
				function my2ndfunc() {
					document.getElementById("main").innerHTML="<p>this is the second content!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p>";
				}
				function my3rdfunc() {
					document.getElementById("main").innerHTML="<p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!</p><p>this the third content 2!</p><p>this is the third content!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p><p>22222222222222222222 2!</p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p>";
				}
				function mousemove(x) {
					var c = document.getElementById(x.id);
					c.style.backgroundColor = "#333333";
					c.style.opacity = "0.5";
				}
				function mouseout(x) {
					var c = document.getElementById(x.id);
					c.style.backgroundColor = "#ffffff";
					c.style.opacity = "1";
				}
				/*window.onscroll = function() {
					var si = 270;
					document.getElementById("main").style.left = si + "px";
				}*/
				document.documentElement.style.overflowX = "hidden";
				document.documentElement.style.overflowY = "scroll";

			</script>
		</aside>

		<article id="main" class="content">
		</article>
		<!--<article class="test">
		</article>-->


		<footer id="myfooter" class="foot">
			<p>this is the footer!</p>
		</footer>
	</div>




</html>
