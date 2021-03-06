﻿<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="basic.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Gary's Porfolio</title>
		
		<script type="text/javascript" src="jscode.js"></script>
    </head>

		<style>
		.section{
			background: darkgray;
		}
		
		
		</style>
    <body>
		<ul class="menu">
			 <li><a href="EmptyHTMLFile.html">Home</a></li> 
			 <li><a href="gallery.html">Gallery</a></li> 
			 <li><a href="comment.html">Comment</a></li> 
			<li><a href="https://garyzhangchn.github.io/about/">About</a></li> 
		</ul>
			
			<div class="section">	<!--section 1-->
				<H1> Landscape: Mont-Tremblant</H1>
				<p class="text">These are drone pictures I have taken during last weekend in <a href="https://www.tremblant.ca">"Mont-Tremblant national park"</a> <i>(click to see more info)</i> </p>
				<br />
				<br />
				<img src="source/Enlight270.JPG" class="image" />
				<img src="source/Enlight269.JPG" class="image" /><br />		
				<img src="source/Enlight272.JPG" class="image" />
				<img src="source/Enlight271.jpg" class="image";transform:rotate(90deg;) />
				<p>Camera info</p>
				<!--JS display-->
				<button onclick="addParagraphText1();">show</button>
				<button onclick="delParagraphText1();">hide</button>
				<p id="para1"> </p>	
			</div>	
			<div class="section">	<!--section 2-->
				<H1> Cityscape: Montreal&Hongkong </h1>
				<p class="text"> Winter at  <a href="https://goo.gl/maps/uinRgR3oA5H2">"Jean-Drapeau"</a> and Summer At <a href="https://goo.gl/maps/kdAXKN9R7dN2">"Victoria Peak"</a> <i>(click to see the location)</i> </p>		
				<br />
				<br />
				<img src="source/IMG_1322-2.jpg" class="image" />
				<img src="source/IMG_0198.jpg" class="image" /><br />		
				<p>Camera info</p>
				<!--JS display-->
				<button onclick="addParagraphText2();">show</button>
				<button onclick="delParagraphText2();">hide</button>
				<p id="para2"> </p>	
			</div>
			<div class="section">	<!--section 3-->
				<H1> Selfie: Working on midterm</H1>
				<p class="text"> Studing for midterm last night <span style="font-weight:lighter">(2018.10.17) </span> </p>
				<br />
				<img src="source/IMG_6787.JPG" class="imgstatic" />
				<img src="source/IMG_6784.JPG" class="imgstatic" /><br />		
				<p>Camera info</p>
				<!--JS display-->
				<button onclick="addParagraphText3();">show</button>
				<button onclick="delParagraphText3();">hide</button>
				<p id="para3"> </p>
			</div>
				<hr>
				<!--JS rating-->
				<p>how much you would <span style="font-weight:bold">rate</span> this page on 10?</p>
				<br />
				<form name="RatingValue" action="rating.php" method="post">
					<fieldset>
						<input id="val_rate" type="number" name="RVal">
						<input type="submit" value="submit your rate">
					</fieldset>
				</form>
			<!--below are using HTML geolocation feature-->
		<p id="geo">Click the button to get your position.</p>
		<button onclick="getLocation()">get my location</button>
		<div id="mapholder"></div>
			<script>
			var x = document.getElementById("geo");

			function getLocation() {
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(showPosition, showError);
				} else {
					x.innerHTML = "Geolocation is not supported by this browser.";
				}
			}

			function showPosition(position) {
				var latlon = position.coords.latitude + "," + position.coords.longitude;
				var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&key=AIzaSyBEYFoZexrufo9lxQwodlKZiE1rR8DmMbQ";
				document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
			}

			function showError(error) {
				switch(error.code) {
					case error.PERMISSION_DENIED:
						x.innerHTML = "User denied the request for Geolocation."
						break;
					case error.POSITION_UNAVAILABLE:
						x.innerHTML = "Location information is unavailable."
						break;
					case error.TIMEOUT:
						x.innerHTML = "The request to get user location timed out."
						break;
					case error.UNKNOWN_ERROR:
						x.innerHTML = "An unknown error occurred."
						break;
				}
			}
			</script> 
  
	
    </body>
</html>


