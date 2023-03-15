<!DOCTYPE html>
<html lang="en">

<head>
	<title>Aplikasi Layanan Laundry</title>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="assets/login/css/gryy.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/style.css ">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/plugins/images/favicon.ico">
		<!--===============================================================================================-->
</head>

<body>

<form class="login100-form validate-form" method="POST" action="ceklogin.php">

					<?php if (isset($_GET['msg'])) : ?>
						<div class="alert alert-danger w-100 text-center" role="alert">
							<small class="text-danger"><?= $_GET['msg'];  ?></small>
						</div>
					<?php endif ?>

<div class="main-container">
        <div class="form-container">

            <div class="srouce"><a title="Laundryyphonn" href="https://www.w3jar.com/beautiful-html-css-login-page-template/"></a></div>

            <div class="form-body">
                <h2 class="title">Log in with</h2>


                <!-- <form action="" class="the-form"> -->

                    <label for="email">Email</label>
                    <input type="text" name="username" id="username" placeholder="Enter your username">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">

                    <input type="submit" value="Log In">

                <!-- </form> -->

            </div><!-- FORM BODY-->

            <div class="form-footer">
                <div>
                    <span>Don't have an account?</span> <a href="">Sign Up</a>
                </div>
            </div><!-- FORM FOOTER -->

        </div><!-- FORM CONTAINER -->
    </div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/animsition/js/animsition.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/bootstrap/js/popper.js"></script>  -->
	<!-- <script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/select2/select2.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/daterangepicker/moment.min.js"></script>  -->
	<!-- <script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/countdowntime/countdowntime.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->
			</form>
</body>

</html>