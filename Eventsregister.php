<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
</style>
</head>
<body>

<!-- <form action="eventsreg.php"> -->
  <div class="container">
  <form action="eventsreg.php" method="post">
    <h1>Register</h1>
    <p>Please fill in this form to Register for event.</p>
        <input type="text" name="fname" required><br>
        <input type="text" name="lname"required><br>
        <input type="text" name="nok" required><br>
        <input type="text" name="nokn">
        <input type="date" name="dob" required><br>
        <input type="text" name="age" required><br>
        <input list="gender" name="gender" required><br>
        <datalist id="gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </datalist><br>
        <input list="county" name="county" required><br>
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
    </datalist><br>
    <input type="text" name="eventid" required><br>
    <input type="text" name="phone" required><br>
    <input type="text" name="email" required><br>
    Do you accept all the risks involved in this activities
    <input list="option" name="option" required><br>
        <datalist id="option" >
            <option value="Yes"></option>
            <option value="No"></option>
        </datalist><br>
    <!-- <label for="email"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="Age" id="email" required> -->
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <p>Check your email for confirmation</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
</form>

</body>
</html>
