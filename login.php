<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin 2 - Login</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
	<div class="bg">
		<div class="container">

			<!-- Outer Row -->
			<div class="row justify-content-center">

				<div class="col-xl-6">

					<div class="card o-hidden border-0 shadow-lg" style="margin-top: 18%;">
						<div class="card-body p-0">
							<!-- Nested Row within Card Body -->
							<div class="row">
								<div class="col-lg-12">
									<div class="p-5">
										<div class="text-center">
											<h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
										</div>
										<form class="user" method="POST">
											<div class="form-group">
												<input type="username" class="form-control form-control-user" id="username"
													aria-describedby="username" name="username" placeholder="Nama Pengguna">
											</div>

											<div class="form-group">
												<input type="password" class="form-control form-control-user" id="password"
													name="password" placeholder="Kata Sandi">
											</div>

											<div class="form-group">
												<input type="text" class="form-control form-control-user mb-3" id="captcha"
													name="captcha" placeholder="Kode Captcha">

												<img id="captcha-image" class="img-fluid rounded" alt="Responsive image"
													style="width:180px">
											</div>

											<button type="submit" class="btn btn-primary btn-user btn-block">
												Masuk
											</button>

										</form>
										<hr>
										<div class="text-center">
											<a class="small" href="forgot-password.html">Forgot Password?</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

	<script src="js/Auth/login.js"></script>

</body>

</html>