<?php
require 'configdb.php';
if(!empty($_SESSION["id"])){
	header("location: profile.php");
}
if(isset($_POST["submit"])){
	$fname = $_POST["fname"];
	$CIN = $_POST["cin"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
	
	$duplicate = mysqli_query($conn, "SELECT * FROM patient WHERE pcin = '$CIN' OR pemail = '$email'");
	if(mysqli_num_rows($duplicate) > 0){
	  echo
	  "<script> alert('CIN or Email Has Already Taken'); </script>";
	}
	else{
	  if($password == $cpassword){
		$query = "INSERT INTO patient VALUES('$email','$CIN','$fname', '$phone','$address','$password')";
		mysqli_query($conn, $query);
		echo
		"<script> alert('Registration Successful'); </script>";
	  }
	  else{
		echo
		"<script> alert('Password Does Not Match'); </script>";
	  }
	}
  }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare health</title>
	<link rel="shortcut icon" href="assets/img/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <img src="assets/img/wave.png" class="wave">
    <div class="container">
        <div class="img">
            <img src="assets/img/logup.svg" >
        </div>
        <div class="logup-content">
            <form action="" method="POST" autocomplete="off">
                <h2 class="title" >Creat an account</h2>
				<div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Full Name</h5>
                        <input type="text" class="input" pattern="^.* .*$" id="fname" name="fname">
                    </div>
                </div>
				
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="div">
                        <h5>CIN</h5>
                        <input type="text" class="input"  id="cin" name="cin">
                    </div>
                </div>
				<div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" class="input" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </div>
                </div>
				<div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                        <h5>Phone NUM</h5>
                        <input type="text" class="input" id="phone" name="phone" $pattern = '/^(?:(?:(?:+|00)212[\s]?(?:[\s]?(0)[\s]?)?)|0){1}(?:5[\s]?[2-3]|[3-6]){1}[\s]?[0-9]{2}[\s]?[0-9]{2}[\s]?[0-9]{2}$/'>
                    </div>
                </div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Address</h5>
						<input type="text" class="input" id="address" name="address">
					</div>
				</div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" pattern=".{8,}"  name="password">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Comfirm your Password</h5>
                        <input type="password" class="input" pattern=".{8,}" name="cpassword">
                    </div>
                </div><br>
                <input type="submit" value="Creat" name="submit" class="btn">
				<a href="login.php">login</a><br>
				<a href="index.php">Acceuil</a>

            </form>
        </div>
    </div>
</body>
</html>



<!-- css -->

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        font-family: 'Poppins',sans-serif;
        
    }
.wave{
    position: fixed;
    bottom: 0;
    left: 0;
    height: 100%;
    z-index: -1;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.logup-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 500px;
}

form{
	width: 360px;
}

.logup-content h2{
	margin: 15px 0;
	color: #333;
	text-transform: uppercase;
	font-size: 2.9rem;
	
}

.logup-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.logup-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
}


.i i{
	transition: .3s;
}

.input-div  div{
    position: relative;
	height: 45px;
}

.input-div  div  h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 18px;
	transition: .3s;
}


.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #38d39f;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}


.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus  div  h5{
	top: -5px;
	font-size: 15px;
}

.input-div.focus  .i  i{
	color: #38d39f;
}


.input-div  div  input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: #555;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}

a{
	display: inline;
    padding-right: 10px;
	text-align: center;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #38d39f;
}



@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.logup-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.logup-content{
		justify-content: center;
	}
}



</style>



<!--js-->

<script>
       const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});


</script>