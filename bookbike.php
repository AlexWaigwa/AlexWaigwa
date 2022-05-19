<!DOCTYPE HTML>

<html>
	<head>
		<title>criticalMass</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets3/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets3/css/noscript.css" /></noscript>
        <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/theme.css">
		<style>
			.modal {
        display: none;
        position: fixed;
        z-index: 8;
        left: 0;
        top: 50px;
        width: 70%;
        height: 50%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
      }
      .modal-content {
        margin: 50px auto;
        border: 1px solid #999;
        width: 60%;
      }
      h2,
      p {
        margin: 0 0 20px;
        font-weight: 400;
        color: #999;
      }
      span {
        color: #666;
        display: block;
        padding: 0 0 5px;
      }
      form {
        padding: 25px;
        margin: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 5px #f5f5f5;
        background: #eee;
      }
      input,
      textarea {
        width: 90%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #1c87c9;
        outline: none;
      }
      .contact-form button {
        width: 50%;
        padding: 10px;
        border-radius: 20px;
        border: none;
        background: #7ec91c;
        font-size: 16px;
        font-weight: 400;
        color: #fff;
      }
      button:hover {
        background: #85a023;
      }
      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }
      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
      button.button {
        background: none;
        border-top: none;
        outline: none;
        border-right: none;
        border-left: none;
        border-bottom: #02274a 1px solid;
        padding: 0 0 3px 0;
        font-size: 16px;
        cursor: pointer;
      }
      button.button:hover {
        border-bottom: #a99567 1px solid;
        color: #a99567;
      }
            .button {
        background-color: #1c87c9;
        -webkit-border-radius: 60px;
        border-radius: 60px;
        border: none;
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: sans-serif;
        font-size: 20px;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
      }
      @keyframes glowing {
        0% {
          background-color: #2ba805;
          box-shadow: 0 0 5px #2ba805;
        }
        50% {
          background-color: #49e819;
          box-shadow: 0 0 20px #49e819;
        }
        100% {
          background-color: #2ba805;
          box-shadow: 0 0 5px #2ba805;
        }
      }
      .button {
        animation: glowing 1300ms infinite;
      }


            
      .modal {
        display: none;
        position: fixed;
        z-index: 8;
        left: 120px;
        top: 60px;
        width: 60%;
        height: 70%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
      }
      .modal-content {
        margin: 50px auto;
        border: 1px solid #999;
        width: 60%;
      }
        </style>
	</head>
	
	<body class="is-loading-0 is-loading-1 is-loading-2">
		<!-- Main -->





        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="collapse navbar-collapse" id="navbarsDefault">
    	
    	<ul class="navbar-nav ml-auto align-items-center">
    		<li class="nav-item">
    		<a class="nav-link active" href="home.php">Home</a>
			</li>
     
               <li>
                <a class="nav-link active" href="about.php">About Us</a>
              </li>
                <li>
                <a class="nav-link active" href="events1.php">Events</a>
                </li>
                <li>
                <a class="nav-link active" href="gallery.php">Gallery</a>
                </li>
                <li>
                <a class="nav-link active" href="bookbike.php">Book Bike</a>
                </li>
                <li>
                  <a class="nav-link active" href="email.php">Contact us</a>
                </li>
    	</ul>
    </div>
    </nav>    
			<div id="main">

				<!-- Header -->
					<header id="header">
					<div class="logohead">
						<img src="images/logo.png" alt="" width="150">
					</div>	
						<h1 class="text-center">Critical Mass</h1>
						<p class="text-center">Bringing you the best bikes for your family and friends fun </p>
                       <p class="text-center"> <a class="button"  href="#" data-modal="modalOne">Book</a></p>
					</header>

				<!-- Thumbnail -->
					<section id="thumbnails">
						<article>
							
							<a class="thumbnail" href="images/fulls/highball.jpeg" data-position="left center"><img src="images/thumbs/highball.jpeg" alt="" /></a>
							<h2>Highball Hardtail size 29</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/nomad.jpeg"><img src="images/thumbs/nomad.jpeg" alt="" /></a>
							<h2>Nomad Dualshock size 27</h2>
							<p>Sed velit lacus, laoreet at venenatis convallis in lorem tincidunt.</p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/tallboy.jpeg" data-position="top center"><img src="images/thumbs/tallboy.jpeg" alt="" /></a>
							<h2>Tallboy Dualshock size 27</h2>
							<p>Maecenas eleifend tellus ut turpis eleifend, vitae pretium faucibus.</p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/jackal.jpeg"><img src="images/thumbs/jackal.jpeg" alt="" /></a>
							<h2>Jackal BMX size 26</h2>
							<p>Tristique in nulla vel congue. Sed sociis natoque parturient nascetur.</p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/stigmata.jpeg" data-position="top center"><img src="images/thumbs/stigmata.jpeg" alt="" /></a>
							<h2>Stigmata Party Never Ends Trail size 29</h2>
							<p>In pellentesque cursus velit id posuere. Donec vehicula nulla.</p>
						</article>
					</section>
          <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form name="contact-form" action="booking.php" method="post">
            <h2>Fill in the details</h2>
              <input class="names" type="text" name="names" placeholder="Full name" />
              <input type="text" name="email" required placeholder="Email" />
              <input type="text" name="phone" required placeholder="Phone number" />
              <input type="text" name="nationalid" required placeholder="National ID" />
              <input type="date" name="date" required placeholder="Date">
              <input type="text" name="details" placeholder="Bike details"/>
              <h5>Check your email for confirmation and payment procedure</h5>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>

<script>
  function submitForm() {
            document.contact-form.submit();
            document.contact-form.reset();
          }
          // $('#contact-form')[1].reset();
      let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.getAttribute("data-modal");
          document.getElementById(modal).style.display = "block";
        };
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.closest(".modal");
          modal.style.display = "none";
        };
      });
      window.onclick = function (event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      };
</script>


				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright text-center">
							<li>&copy; criticalMass</li>
							<li>Alex Waigwa Kiama</li>
						</ul>
					</footer>
			</div>
		<!-- Scripts -->
			<script src="assets3/js/jquery.min.js"></script>
			<script src="assets3/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets3/js/main.js"></script>
			<script type="text/javascript">
			 $('.toggle').click(function(){
			 	$('.caption').toggle();
			 })
			 
			</script>
      
	</body>
</html>