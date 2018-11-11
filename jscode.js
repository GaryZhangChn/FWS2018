

function addParagraphText1()
				{
					document.getElementById("para1").innerHTML="DJI Mavic Air: f2.8 1/13s iso100";
				}
			function delParagraphText1()
				{
					document.getElementById("para1").innerHTML="";
				}
			function addParagraphText2()
				{
					document.getElementById("para2").innerHTML="Canon 600D + Canon 11-18mm + ND1000: f8 60s iso100";
				}
			function delParagraphText2()
				{
					document.getElementById("para2").innerHTML="";
				}
			function addParagraphText3()
				{
					document.getElementById("para3").innerHTML="Canon 7D + Canon 24-105mm: f4 1/4s iso100";
				}
			function delParagraphText3()
				{
					document.getElementById("para3").innerHTML="";
				}
			function display_rate()	//rating feature
				{
					var rate_value = document.getElementById("val_rate").value;
					if (rate_value > 0 && rate_value <= 5)
						{
							document.getElementById("para_rate").innerHTML = "Seems you don't like this page, any advices you can provide?";
						}
					else if (rate_value <= 10 && rate_value > 5)
						{
							document.getElementById("para_rate").innerHTML = "You look satisfied with this page, thank you!";
						}
					else 
						{
							document.getElementById("para_rate").innerHTML = "invalid input, please reselect a number!";
						}
				}

							function openModal() {
	document.getElementById('myModal').style.display = "block";
  }
  //below scripts are for gallery.html

  function closeModal() {
	document.getElementById('myModal').style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
	showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
	showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	var captionText = document.getElementById("caption");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
	captionText.innerHTML = dots[slideIndex-1].alt;
  }	


  function openModal() {
	document.getElementById('myModal').style.display = "block";
  }
  //below scripts are for gallery.html

  function closeModal() {
	document.getElementById('myModal').style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
	showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
	showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	var captionText = document.getElementById("caption");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
	captionText.innerHTML = dots[slideIndex-1].alt;
  }	
//below scripts are for comment.html
	function show_email_form()
	{
		var info="Name:<br><input type='text' name='name'><br>Email:<br><textarea rows='1' cols='50'></textarea><br><input type='submit'value='comment'>";
		document.getElementById("comment_email").innerHTML=info;
	}
	function show_phone_form()
	{
		var info="Name:<br><input type='text' name='name'><br>Phone number:<br><textarea rows='1' cols='50'></textarea><br><input type='submit'value='comment'>";
		document.getElementById("comment_email").innerHTML=info;
	}
	function show_mail_form()
	{
		var info="Name:<br><input type='text' name='name'><br>Mail address:<br><textarea rows='1' cols='50'></textarea><br><input type='submit'value='comment'>";
		document.getElementById("comment_email").innerHTML=info;
	}