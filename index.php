<?php

include 'loginout/config.php'; // konfigurasi untuk mengkoneksikan ke data base

session_start(); // untuk menginisiasi sesi, menjaga status login di berbagai halaman 

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location:User/final.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
    
	if ($result->num_rows > 0) { 
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location:User/final.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="Bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="loginout/Login.css">
    <!-- Css Responsive -->
    <link rel="stylesheet" href="Css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <!-- Navbar -->
    <div class="bg">
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top  navbar-light "
            style="background-color: #412496;">
            <div class="container-fluid py-2">
                <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                    <img src="img/logo.png" width="50" height="50" class="navbar-logo" alt="">
                    BRAVO RENT CAR
                </a>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span><i data-feather="list"></i></span>
                </button>


            </div>
        </nav>

        <div class="d-flex justify-content-center form-login ">
            <div class="login-custom ">
                <form action="" method="POST" class="login-email">
                    <p style="font-size: 2rem; font-weight: 850;">Log In</p>

                    <div class="input-group"><input type="email" placeholder="Email" name="email"
                            value="<?php echo $email; ?>" required></div>

                    <div class="input-group"><input type="password" placeholder="Password" name="Password"
                            value="<?php echo $_POST['password']; ?>" required></div>
                    <div class="input-group"><button name="submit" class="tombol">Log In</button>
                    </div>
                    <div class="login-register-text">Log In for
                        <a href="loginout/loginadmin.php">admin | </a>
                        <a href="index.php">user</a>
                    </div>

                    <p class="login-register-text">Don't Have an Account ?
                        <a href="loginout/register.php">Register</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <section class="Footer ">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-4 py-5">

                    <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                        <img src="img/logo2.png" width="55" height="55" class="navbar-logo" alt="">
                        <h3 class="fw-bold">BRAVO RENT CAR</h3>
                    </a>

                    <p class="text-white mt-2">Drive in Paradise, Feel the Bravo Vibes! </p>
                    <div>
                        <a href="https://www.instagram.com/bravoclasstrpl/"> <i
                                class="fa-brands fa-instagram fa-2xl mx-3 icon-footer" style="color: #ffffff;"></i></a>
                        <i class="fa-brands fa-whatsapp fa-2xl mx-4 icon-footer" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-square-facebook fa-2xl mx-3 icon-footer" style="color: #ffffff;"></i>

                    </div>
                </div>
                <div class="col-4">

                </div>
                <div class="col-4">
                    <div class="text-white mt-5 ">
                        <h3 class="fw-bold">Contact Us</h3>
                        <p class="mt-3">Kampus Bukit, Jimbaran, South Kuta, Badung Regency, Bali 80364</p>
                        <p>(0361) 701981</p>
                        <p>BravoRentCar@gmail.com</p>

                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center py-3">
                <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                    <p class="text-white text-center">Copyright@2023 BMWM Team. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>