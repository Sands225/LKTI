<?php

if (isset($_COOKIE['email'])) {
	header("Location: dashboard.php");
}

require 'functions.php';

if( isset($_POST["register"]) ) {
    // var_dump($_POST);
	if ( register($_POST) > 0 ) {

		echo "<script>
			alert('Pengguna berhasil ditambahkan');
			</script>";
		header("Location: dashboard.php");
	} else {
		echo mysqli_error($conn);
	}
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
						href="index.html"
						class="hover:underline hover:underline-offset-8 px-[10px]">
						Home
					</a>
				</div>
			</div>
		</nav>
		<div
			class="pt-[50px] left-1/2 top-1/2 mt-[80px] -translate-x-1/2 -translate-y-1/2 absolute">
			<div class="flex justify-center">
				<h1 id="page-title" class="text-3xl font-bold">REGISTRASI</h1>
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
						required/>
					<br />
					<br />
					<div id="register-page">
						<label for="nama">Nama Lengkap</label><br />
						<input
							class="w-80 p-[3px] rounded"
							type="text"
							id="nama"
							name="nama"
							placeholder=" .  . ."
							required/>
						<br />
						<br />
						<label for="umur">Usia Anda</label><br />
						<input
							class="w-80 p-[3px] rounded"
							type="text"
							id="umur"
							name="umur"
							placeholder=" . . ."

							required/>
						<br />
						<br />
						<label for="telp">Nomor Telepon</label><br />
						<input
							class="w-80 p-[3px] rounded"
							type="text"
							id="telp"
							name="telp"
							placeholder=" . . ."

							required/>
						<br />
						<br />
						<label for="gender">Jenis Kelamin</label> <br />
						<input
							type="radio"
							id="laki-laki"
							name="gender"
							value="laki-laki" 
							required/>
						<label for="laki-laki">Laki-laki</label>
						<br />
						<input
							type="radio"
							id="perempuan"
							name="gender"
							value="perempuan" 
							required/>
						<label for="perempuan">Perempuan</label>
						<br />
						<br />
					</div>
					<label for="password">Password </label> <br />
					<input
						class="w-80 p-[3px] rounded"
						type="password"
						id="password"
						name="password"
						placeholder=" . . ."
						required/>
					<br />
					<br />
					<div id="check-password">
						<label for="cpassword"> Confirm Password </label>
						<br />
						<input
							class="w-80 p-[3px] rounded"
							type="password"
							id="cpassword"
							name="cpassword"
							placeholder=" . . ."
							required/>
						<br />
						<br />
					</div>
					<div class="flex justify-center">
						<button
							type="submit"
							name="register"
							id="register"
							class="bg-[#ffd803] px-[10px] py-[5px] rounded tracking-[2px]">
							submit
						</button>
					</div>
				</form>
			</div>
			<div class="flex justify-center my-[10px]">
				<a href="login.php"
					id="login-register-text"
					class="underline underline-offset-2 cursor-pointer text-blue-500"">
					Already have an account?
				</a>
			</div>
		</div>
		<script src="js/script.js"></script>
	</body>
</html>
