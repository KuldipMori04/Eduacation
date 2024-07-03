<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Login</title>
    <?php include 'link.php'; ?>
    <?php include 'style.css'; ?>

</head>

<body>





	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="width: 210vh;">
		<a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
			<h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>KK_Eduacation</h2>
		</a>
		<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto p-4 p-lg-0">
				<a href="index.html" class="nav-item nav-link active">Home</a>
				<a href="about.html" class="nav-item nav-link">About</a>
				<a href="Education.html" class="nav-item nav-link">Courses</a>
				<div class="nav-item dropdown">
					<a href="Education.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
					<div class="dropdown-menu fade-down m-0">
						<a href="After_10.html" class="dropdown-item">After 10th</a>
						<a href="After_12.html" class="dropdown-item">After 12th</a>
						<a href="404.html" class="dropdown-item">404 Page</a>
					</div>
				</div>
				<a href="contact.html" class="nav-item nav-link">Contact</a>
			</div>
			<a href="SignIn and SignUp.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i
					class="fa fa-arrow-right ms-3"></i></a>
		</div>
	</nav>
	<!-- Navbar End -->


    

	<div class="container" id="container" style="height: 150vh;">
	
		<div class="form-container sign-up-container" >
			<form action="" method="POST">
				<h1>Create Account</h1>

				<div class="social-container">
					<a href="https://www.facebook.com/kishan.kareliya.961" class="social"><i
							class="fab fa-facebook-f"></i></a>
					<a href="https://www.google.com/" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="https://in.linkedin.com/in/kishan-kareliya-76ab5723a?trk=public_profile_samename-profile"
						class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>

                
				<span>or use your email for registration</span>
				<input class="input2" value="" name="name" type="text" placeholder="Name" />
				<input class="input2" value="" name="email" type="email" placeholder="Email" />
				<input class="input2" value="" name="study" type="study" placeholder="Study" />
				<input class="input2" value="" name="password" type="password" placeholder="Password" />
				<button name="submit" style="margin-bottom: 20px;" class="button">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="" method="POST">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="https://www.facebook.com/kishan.kareliya.961" class="social"><i
							class="fab fa-facebook-f"></i></a>
					<a href="https://www.google.com/" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="https://in.linkedin.com/in/kishan-kareliya-76ab5723a?trk=public_profile_samename-profile"
						class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input class="input2" type="email" placeholder="Email" />
				<input class="input2" type="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button class="button">Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal details</p>
					<button class="ghost" id="signIn">Sign In</button><br><br>
				<button class="ghost"  href="display.php" id="signIn" name="check">Check Form</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hi There!</h1>
					<p>Enter your personal details to open an account with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>



	
	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
	</script>

</body>

</html>




            <?php
                
                //****** ***CONECTION THE OTHER FILE*********
                
                include 'connection.php';
                


                // ******UPDATE VALUE IN TABLE*********
                
                $ids = $_GET('id');

                $showquery = "select * from ragister  where id=($ids)";

                $showdata = mysqli_query($con,$showquery);

                $arrdata = mysqli_fetch_array($showdata);


                // ********INSERT VALUES IN TABALE**********
                
                if(isset($_POST['submit'])){
                
                	$name = $_POST['name'];
                	$email = $_POST['email'];
                	$study = $_POST['study'];
                	$password = $_POST['password'];
                
                	$insertquery= " insert into ragister ( name, email, study, password ) values ( '$name', '$email', '$study', '$password ' )";
                	$res = mysqli_query($con, $insertquery);
                
                if($res){
                
                	?>
                	<script>
                		alert("data inserted properly");
                	</script>
                	<?php
                
                }else{
                
                	?>
                	<script>
                		alert("data not inserted properly");
                	</script>
                	<?php
                
                }
                
                }
                ?>


