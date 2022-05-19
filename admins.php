<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  border-radius: 4px;
  background-color:chocolate;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 19px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: relative;
  opacity: 0.5;
  top: 0;
  right: -20px;
  transition: 0.5s;
  vertical-align: middle;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.container {
  text-align: center;
}
.hero { 
    position: absolute; 
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url(img/nnn.jpg);
    background-size: cover;
    text-align: center;
}

.hero::before {
    content: "";
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    background-color: rgba(0,0,0,0.25);
}
h1{
  color:ivory;
  font-size: 60px;
}
</style>
</head>
<body>
<div class="hero">
<div class="container">
<h1>ADMINS PAGE</h1>
<button class="button" onclick="window.location.href='admin2'"><span>Log in</span></button>

</div>
</div>

</body>
</html>