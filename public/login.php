<?php

// if ( isset($_SESSION["loginSession"]) ) {
// 	header("Location: dashboard.php");
// }

if ( isset($_COOKIE["email"])) {
	header("Location: dashboard.php");
	exit;
}

require 'functions.php';

if ( isset($_POST["login"]) ) {
    // global $conn, $error;

    $email = $_POST["email"];
    $pass = mysqli_real_escape_string($conn, $_POST["password"]);

    $checkemail = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($checkemail) === 1) {
        $userdata = mysqli_fetch_assoc($checkemail);
		$useremail = $userdata["email"];
		$privil = $userdata["privil"];
		// var_dump($userdata);
        if (password_verify($pass, $userdata["password"])) {
			setcookie("email", $useremail, time() + 86400);
			// setcookie("welcome", " ", time() + 86400);
			if ($privil == '1') {
				header("Location: dashboard.php");
			}
			else {
				header("Location: activity/consultant.php");
			}
			
			exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SYS - Registrasi</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body class="h-screen bg-[#fef6e4]">
		<nav
			class="w-full h-[80px] phone:h-[60px] p-[10px] bg-[#f3d2c1] text-[20px] flex fixed z-30">
			<div class="w-1/6 my-auto text-[20px] text-[#001858]">
				<div class="phone:hidden font-semibold">
					<h1 class="text-center">Smansa Youth</h1>
					<h1 class="text-center">Share</h1>
				</div>
				<div class="tablet:hidden desktop:hidden">
					<h1 class="text-center font-bold">S Y S</h1>
				</div>
			</div>
			<div class="ml-auto my-auto">
				<div class="flex">
					<a
						href="index.php"
						class="hover:underline hover:underline-offset-8 px-[10px]">
						Home
					</a>
				</div>
			</div>
		</nav>
		<div
			class="left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 absolute">
			<div class="flex justify-center">
				<h1 id="page-title" class="text-3xl font-bold">LOGIN</h1>
			</div>
			<div
				class="rounded border border-black flex justify-center p-[20px] bg-[#f3d2c1]">
				<form action="" method="post">
					<?php if ( isset($error)) :	?>
						<p class="text-red-500 italic">*email atau password tidak sesuai</p>
					<?php endif; ?>
					<label for="email">Email</label> <br />
					<input
						class="w-80 p-[3px] rounded"
						type="email"
						id="email"
						name="email"
						placeholder=" . . ."
						required />
					<br />
					<br />
					<label for="password">Password </label> <br />
					<input
						class="w-80 p-[3px] rounded"
						type="password"
						id="password"
						name="password"
						placeholder=" . . ."
						required />
					<br />
					<br />
					<div class="flex justify-center">
						<button
							type="submit"
							name="login"
							id="login"
							class="bg-[#ffd803] px-[10px] py-[5px] rounded tracking-[2px]">
							submit
						</button>
					</div>
				</form>
			</div>
			<div class="flex justify-center my-[10px]">
				<a
					href="registration.php"
					id="login-register-text"
					class="underline underline-offset-2 cursor-pointer text-blue-500">
					Create new account?
				</a>
			</div>
		</div>
		<script src=""></script>
	</body>
</html>
