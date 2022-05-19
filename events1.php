<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Critical Mass</title>
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/theme.css">
	
</head>
<style>
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


	body{
    background-color: rgba(245, 241, 237, 0);
  }
 img{
        width: 85%;
        height: 85%;
        border-radius: 5%;
    }
    img:hover {
  transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

 #column {
  float: left;
  width: 50%;
  padding: 5px;
}
#row::after {
  content: "";
  clear: both;
  display: table;
}
audio, canvas, video {
    display: inline-block;
    *display: inline;
    *zoom: 1;
}

video {
    width: 1000px;
    aspect-ratio: auto 445 / 300;
    height: 300px;
    left: 300px;
    align-items: center;
}
#row #btn {
  position: absolute;
  top: 20%;
  left: 80%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: chocolate;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
#row #btn:hover {
  background-color: black;
}
.modal {
        display: none;
        position: fixed;
        z-index: 8;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
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
</style>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
    	<ul class="navbar-nav mr-auto align-items-center">
    	</ul>
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
    <main role="main">
        
    
    <section class="mt-4 mb-5">
    <div class="container mb-4">
    	<h1 class="font-weight-bold title">Upcoming events</h1>
      <p class="font-weight-bold ">Register for events in our portal and join us in the most amazing and exclusive MTB and trail challenge. You also stand a chance to win brand new bike cash prizes and lots that is our backet, bring friends and family have fun and win.</p>
    	<div class="row">
      <!-- <a class="button" href="#" data-modal="modalOne">Register</a> -->
    	</div>
    </div>
<div id="row">
<span class="stretch">
<?php

$con = mysqli_connect('localhost','root','','demo');
$sql = "SELECT * FROM events";
$result = mysqli_query($con, $sql);
$resultCheck =mysqli_num_rows($result); 
if($resultCheck <= 0){
 print_r('no data in the database');


}
while($rows = mysqli_fetch_array($result)){
	echo "<div id ='column'>";
	echo "<img src='img/".$rows['img'] ."'>";
	echo"</div>";
	// echo "<p id =text_div>".$rows['description']."</p>";
  // echo "<button id='btn'>Register</button>";
}
?>       
</span>
</div><br>
<a class="button" href="#" data-modal="modalOne">Register</a>
<div class ="image-section"></div>

        
    </main>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/theme.js"></script>
    
    <footer class="footer pt-5 pb-5 text-center">
        
    <div class="container">
        
          <div class="socials-media">
    
    
          </div>
          <p>©  <span class="credits font-weight-bold">        
        <a class="">criticalMass made with love</a> by Alex Waigwa Kiama </a>
          </span>
          </p>
    
    
        </div>
        
    </footer>   
    
    </p>
     </datalist><br>
   <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form name="contact-form" action="eventsreg.php" method="post">
            <h2>Register</h2>
            <div>
              <!-- <input class="fname" type="text" name="name" placeholder="Full name" />
              <input type="text" name="name" placeholder="Email" />
              <input type="text" name="name" placeholder="Phone number" />
              <input type="text" name="name" placeholder="Website" /> -->
              
              <input type="text" name="fname" required placeholder="first name"><br>
        <input type="text" name="lname"required placeholder="last name"><br>
        <input type="text" name="phone" required placeholder="phone"><br>
        <input type="text" name="email" required placeholder="email"><br>
        <input type="text" name="nok" required placeholder="next of kin"><br>
        <input type="text" name="nokn" required placeholder="next of kin phone"><br>
        <input type="date" name="dob" required placeholder="date of birth"><br>
        <input type="text" name="age" required placeholder="age"><br>
        <input list="gender" name="gender" required placeholder="gender"><br>
        <datalist id="gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </datalist><br>
        <input list="county" name="county" required placeholder="county"><br>
        <datalist id="county">
        <option value="Baringo">Baringo</option>
        <option value="Bomet">Bomet</option>
        <option value="Bungoma">Bungoma</option>
        <option value="Busia">Busia</option>
        <option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
        <option value="Embu">Embu</option>
        <option value="Garissa">Garissa</option>
        <option value="Homa Bay">Homa Bay</option> 
        <option value="Isiolo">Isiolo</option>
        <option value="Kajiado">Kajiado</option>
        <option value="Kakamega">Kakamega</option>
        <option value="Kericho">Kericho</option>
        <option value="Kiambu">Kiambu</option>
        <option value="Kilifi">Kilifi</option>
        <option value="Kirinyaga">Kirinyaga</option>
        <option value="Kisii">Kisii</option>
        <option value="Kisumu">Kisumu</option>
        <option value="Kitui">Kitui</option>
        <option value="Kwale">Kwale</option>
        <option value="Laikipia">Laikipia</option>
        <option value="Lamu">Lamu</option>
        <option value="Machakos">Machakos</option>
        <option value="Makueni">Makueni</option>
        <option value="Mandera">Mandera</option>
        <option value="Meru">Meru</option>
        <option value="Migori">Migori</option>
        <option value="Marsabit">Marsabit</option>
        <option value="Mombasa">Mombasa</option>
        <option value="Muranga">Muranga</option>
        <option value="Nairobi">Nairobi</option>
        <option value="Nakuru">Nakuru</option>
        <option value="Nandi">Nandi</option>
        <option value="Narok">Narok</option>
        <option value="Nyamira">Nyamira</option>
        <option value="Nyandarua">Nyandarua</option>
        <option value="Nyeri">Nyeri</option>
        <option value="Samburu">Samburu</option>
        <option value="Siaya">Siaya</option>
        <option value="Taita Taveta">Taita Taveta</option>
        <option value="Tana River">Tana River</option>
        <option value="Tharaka Nithi">Tharaka Nithi</option>
        <option value="Trans Nzoia">Trans Nzoia</option>
        <option value="Turkana">Turkana</option>
        <option value="Uasin Gishu">Uasin Gishu</option>
        <option value="Vihiga">Vihiga</option>
        <option value="Wajir">Wajir</option>
        <option value="Pokot">West Pokot</option>
    <input type="text" name="eventid" required placeholder="event name"><br>
    Do you accept all the risks involved in this activities
    <input list="option" name="option" required placeholder="Do you accept?"><br>
        <datalist id="option" >
            <option value="Yes"></option>
            <option value="No"></option>
        </datalist>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
     <p>Check email for confirmation and further instructions</p>

            </div>
            <span>Message</span>
            <div>
              <textarea rows="4"></textarea>
            </div>
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
</body>
    
</html>
