<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<style>

}
.about-section{
  width: 100%;
  background: #f1f1f1;
  padding: 40px 0;
}
.inner-width{
  max-width: 1000px;
  overflow: hidden;
  padding: 0 20px;
  margin: auto;
}
.about-section h1{
  text-align: center;
}
.border{
  width: 100px;
  height: 3px;
  background: #00bfff;
  margin: 40px auto;
}
.about-section-row{
  display: flex;
  flex-wrap: wrap;
}
.about-section-col{
  flex: 50%;
}
.about{
  padding-right: 30px;
}

}


.skills{
  padding-left: 30px;
}
.skill{
  margin-bottom: 10px;
}
.progress{
  width: 100%;
  height: 12px;
  background: #ddd;
  border-radius: 12px;
}
.progress-bar{
  height: 12px;
  background: #e74c3c;
  border-radius: 12px;
}
.p1{
  width: 90%;
}
.p2{
  width: 70%;
}
.p3{
  width: 50%;
}
.progress-bar span{
  float: right;
  margin-right: 6px;
  line-height: 13px;
  color: #fff;
  font-size: 12px;
}
@media screen and (max-width:700px) {
  .about-section-col{
    flex: 100%;
    margin: 10px 0;
  }
  .about,.skills{
    padding: 0;
  }
  .about{
    text-align: center;
  }
}


</style>
</head>

<body>
<!-- hero section -->
	<section class="hero">
		<?php
			include 'header.php';
		?>
				<section class="caption">
				<h2 class="caption" style="text-align: center"><i>Find Your Dream Cars For Rent!</i></h2>				
			</section>
	</section><!--  end hero section  -->


 <div class="about-section">
        <div class="inner-width">
          <h1>About Us</h1>
          <div class="border"></div>
          <div class="about-section-row">
            <div class="about-section-col">
              <div class="about">
                <p>
                  About us ! much info very lol
                </p>                
              </div>
            </div>
            <div class="about-section-col">
              <div class="skills">
                <div class="skill">
                  <div class="title">Sport Cars</div>
                  <div class="progress">
                    <div class="progress-bar p1"><span>90%</span></div>
                  </div>
                </div>

                <div class="skill">
                  <div class="title">Electric Car</div>
                  <div class="progress">
                    <div class="progress-bar p2"><span>70%</span></div>
                  </div>
                </div>

                <div class="skill">
                  <div class="title">Jeeps Cars</div>
                  <div class="progress">
                    <div class="progress-bar p3"><span>50%</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<!-- start footer -->
<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="terms.php">Terms</a></li>						
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>SPEECIAL OFFERS</li>
						<li><a href="cars.php">Volkswagen Golf7</a></li>
						<li><a href="cars.php">BMW M5</a></li>
						<li><a href="cars.php">Tesla Model S</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</li>

				<li class="about">
					<p>Our Social media:</p>
					<ul>
						<li><a href="http://facebook.com/" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/" class="google" target="_blank"></a></li>
						<li><a href="http://skype.com/" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy;2019
		</div>
	</footer>
<!--  end footer  -->
</body>
</html>