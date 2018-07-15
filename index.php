<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Sam Kauffman">
    <meta name="description" content="I'm Matthew Kauffman and I need a girlfriend.">
    <meta name="theme-color" content="#DC143C">

	<title>I Want You to Date Matthew!</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#DC143C">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">

</head>

<body>

    <nav class="fixed z3">
		<div class="container">
			<div class="nav--logo">
				<a class="autoscroll highlighted" href="#page-top">Date Me!</a>
			</div>
			<ul class="nav--list">
				<li><a class="autoscroll" href="#about">About</a></li>
				<li><a class="autoscroll" href="#details">Details</a></li>
				<li><a class="autoscroll" href="#testimonials">Testimonials</a></li>
				<li><a class="autoscroll" href="#contact">Contact</a></li>
			</ul>
		</div>
		<div class="h5 absolute nav--hamburger"><span class="fa fa-fw fa-bars"></span></div>
    </nav>

	<header id="page-top">
       <div class="container">
           <div class=" col-lg-offset-2 col-lg-8 center text-center">
                <h1 class="lhalf">I Want You to Date Matthew Kauffman</h1>
                <p class="h4 l3">You should date me!</p>
                <a class="autoscroll button" href="#contact">Date me now!</a>
           </div>
        </div>
    </header>

    <section id="hi">
		<div class="container">
			<div class="col-lg-8 center">
				<p class="h1 l0 text-center"><span class="h4">Hi,</span> I'm Matthew and I need a girlfriend.</p>
			</div>
		</div>
    </section>

    <section id="about">
		<div class="container">
			<div class="col-lg-8 center">
				<h2>About Me</h2>
				<hr>
				<p>
				I was born in Princeton, New Jersey in 1961. In 1976, I attended Vassar College where I majored in Political Science and got a job working for the College Newspaper. After graduating, I didn't hesitate to marry the love of my life, Wendy Nelson. We moved to New Haven and I began my career starting as a legal writer for the Hartford Courant. Since then we've lived in two towns, had two kids, and been a Pulitzer Prize finalist two times. I continue my career at the Hartford Courant and enjoy my days with my loving wife, Wendy Nelson Kauffman. Please date me.
				</p>

				<h4>My interests include...</h4>
                <ul class="about-list">
					<li>Biking</li>
					<li>Investigating and reporting</li>
					<li>Building sheds</li>
                    <li>Quoting <i>Sky High</i></li>
				</ul>
			</div>
		</div>
    </section>

    <section id="details">
		<div class="container">
			<div class="col-lg-8 center">
				<h2>Who I'm Looking For</h2>
				<hr>
				<p class="sub-header">If one or more of the following describes you, you might be right for the role.</p>
				<ul class="details-list">
					<li>Appreciate a good intellectual coversation</li>
					<li>Have a sense of humor</li>
					<li>Physically active</li>
					<li>Married to me</li>
				</ul>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-10 center">
				<p>I offer equal opportunity and do not discriminate against any applicant on the basis of age, race, gender, marital status, physical or mental disibility, genetic information, or sexual orientation. Characters welcome!</p>
            </div>
        </div>
    </section>

    <section id="testimonials">
		<div class="container">
			<div class="col-lg-8 center">
				<h2>Testimonials</h2>
				<hr>
				<p class="sub-header">Don't just take my word for it...hear what others have to say!</p>
			</div>
            <div class="row text-center">
                <div class="col-md-4">
                    <img class="circle girl-pic" src="img/girl-pics/girl1.jpg" alt="">
                </div>
                <div class="col-md-8">
                    <p class="h4 girl-quote">"He makes me so happy."<br>—Wendy</p>
                </div>
            </div>
			<div class="row  text-center">
                <div class="col-md-4 col-md-push-8">
					<img class="circle girl-pic" src="img/girl-pics/girl2.jpg" alt="">
				</div>
                <div class="col-md-8 col-md-pull-4">
                    <p class="h4 girl-quote">"I thank every day that he picked me."<br>—Wendy</p>
                </div>
			</div>
			<div class="row text-center">
                <div class="col-md-4">
					<img class="circle girl-pic" src="img/girl-pics/girl3.jpg" alt="">
				</div>
                <div class="col-md-8">
                    <p class="h4 girl-quote">"I love [Matthew Kauffman]."<br>—Wendy</p>
                </div>
			</div>
		</div>
    </section>

    <section id="contact">
		<div class="container">
			<div class="col-lg-8 center">
				<h2>Contact Me</h2>
				<hr>
				<p class="italics sub-header">What are you waiting for?</p>
			</div>
			<form id="contact-form" action="php/contact.php" method="post">
				<div class="row">
					<div class="col-md-6">
						<input type="text" name="name" placeholder="Your Name *" maxlength="100" required>
						<input type="email" name="email" placeholder="Your Email *" maxlength="100" required>
						<input type="tel" name="phone" placeholder="Your Phone" maxlength="100">
                        <!-- Spam bot honeypot -->
                        <input style="display:none" type="text" name="address" placeholder="Please leave this field blank" maxlength="100">
                        <!-- end -->
					</div>
					<div class="col-md-6">
						<textarea placeholder="Your Message *" name="message" maxlength="2000" required></textarea>
					</div>
				</div>
                <div class="form-button--wrapper">
                    <button class="uppercase bold center contact-form__submit" type="submit">Date Me!</button>
                </div>
			</form>
		</div>
    </section>

    <footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<p class="text-left footer--item">&copy; Date Matthew <?php echo date("Y") ?></p>
				</div>
				<div class="col-sm-4">
					<ul class="text-center list--inline-block footer--item social-links">
                        <li><a href="https://www.facebook.com/matthewkauffman" target="_blank"><span class="fa fa-fw fa-facebook"></span></a></li>
                        <li><a href="https://twitter.com/matthewkauffman" target="_blank"><span class="fa fa-fw fa-twitter"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/matthewkauffman" target="_blank"><span class="fa fa-fw fa-linkedin"></span></a></li>
                        <li><a href="http://www.courant.com/hc-matthew-kauffman-staff.html" target="_blank"><span class="fa fa-fw fa-newspaper-o"></span></a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<p class="text-right footer--item"><a class="privacy--button__open" href="#0">Privacy Policy</a></p>
				</div>
			</div>
		</div>
    </footer>

	<?php include "include/privacy-policy.php" ?>

    <!--**************************************************-->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>window.jQuery || document.write("<script src='js/jquery.js'><\/script>")</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Javascript -->
    <script src="js/contact.min.js"></script>
    <script src="js/script.min.js"></script>

</body>

</html>
