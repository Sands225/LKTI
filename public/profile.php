<?php 

if ( !isset($_COOKIE["email"]) ) {
	header("Location: login.php");
    exit;
}

// echo "Halo, ". $_COOKIE['email'];
$conn = mysqli_connect("localhost", "root", "", "lktitekno");

$email = $_COOKIE["email"];

$sql = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if ($result) {
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
		$userID = $row['id'];
		$nama = $row['nama'];
		$umur = $row['umur'];
		$telp = $row['telp'];
		$gender = $row['gender'];
		}
	}
}

$changeUser = false;
if (isset($_POST['edit-user'])) {
	echo "Hi, how're you?";
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SYS - User Profile</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body class="h-screen bg-[#fef6e4]">
		<nav
			class="w-full h-[80px] p-[10px] bg-[#f3d2c1] text-[20px] flex fixed z-30">
			<div class="w-1/6 my-auto text-[20px]">
				<div class="phone:hidden">
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
						class="hover:underline hover:underline-offset-8 px-[10px]"
						>Home</a
					>
					<a
						href="dashboard.html"
						class="hover:underline hover:underline-offset-8 px-[10px]"
						>Dashboard</a
					>
					<a
						href="profile.html"
						class="hover:underline hover:underline-offset-8">
						<img
							src="src/icons/icons8-user-icon-32.png"
							alt="profile"
							class="px-[10px]" />
					</a>
				</div>
			</div>
		</nav>
		<div class="pt-[90px] relative">
			<div class="left-1/2 -translate-x-1/2 absolute">
				<div class="flex justify-center">
					<h1 id="page-title" class="text-3xl font-semibold">
						User #<?php echo $userID; ?>
					</h1>
				</div>
				<div
					class="min-w-[20vw] phone:min-w-[60vw] max-w-[60vw] phone:max-w-[90vw] rounded border border-black p-[20px]">
					<div class="flex justify-center pb-[20px]">
						<img
							src="src/icons/icons8-user-icon-96.png"
							alt="profile" />
					</div>
					<div class="p-[5px] leading-5">
						<h2 class="text-sm">Nama</h2>
						<h4 class="text-lg ml-3">
							<?php echo $nama; ?>
						</h4>
					</div>
					<div class="p-[5px] leading-5">
						<h2 class="text-sm">Jenis Kelamin</h2>
						<h4 class="text-lg ml-3">
							<?php echo $gender; ?>
						</h4>
					</div>
					<div class="p-[5px] leading-5">
						<h2 class="text-sm">Usia</h2>
						<h4 class="text-lg ml-3">
							<?php echo $umur; ?> tahun
						</h4>
					</div>
					<div class="p-[5px] leading-5">
						<h2 class="text-sm">Telepon</h2>
						<h4 class="text-lg ml-3">
							<?php echo $telp; ?>
						</h4>
					</div>
					<div class="p-[5px] leading-5">
						<h2 class="text-sm">Email</h2>
						<h4 class="text-lg ml-3">
							<?php echo $email; ?>
						</h4>
					</div>
					<div class="p-[5px] leading-5">
						<h2 class="text-sm">Password</h2>
						<h4 class="text-lg ml-3">
							*******
						</h4>
					</div>
				</div>
				<div class="flex justify-center my-[10px]">
					<form method="post">
						<button
							id="user-edit"
							name="user-edit"
							class="underline underline-offset-2 cursor-pointer text-blue-500">
							Edit user
						</button>
					</form>
				</div>
			</div>
		</div>
		<script src="js/script.js"></script>
	</body>
</html>
