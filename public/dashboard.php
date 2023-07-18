<?php 

// session_start();

if ( !isset($_COOKIE["email"]) ) {
	header("Location: login.php");
    exit;
}

require 'functions.php';
?>

<?php if($privil=="1") :?>
	
<?php
// var_dump($_COOKIE["welcome"]);

if (!isset($_COOKIE["welcome"])) {
	setcookie("welcome", " ", time() + 86400);
	$text = "Selamat datang kembali, $nama";
	echo "
		<script>
			alert('$text');
		</script>
	";
}

// mood tracker
session_start();	
$_SESSION['moodtracker'] = 'true';
if (isset($_SESSION['moodtracker'])) {
	// code HTML if else;
}

if ( isset($_POST['submitComment']) ) {
	if ( comment() > 0 ) {
		echo "
			<script>
				alert('Terima kasih atas masukan anda :)');
			</script>
		";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Smansa Youth Share</title>
	</head>
	<body class="bg-[#fef6e4]">
		<!-- MOOD TRACKER -->

		<nav
			class="w-full h-[80px] p-[10px] bg-[#f3d2c1] text-[20px] flex fixed z-30">
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
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Home
					</a>
					<a
						href="#activity"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Activity
					</a>
					<a
						href="#comments"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Comment
					</a>
					<a
						href="profile.php"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						<img
						src="src/icons/icons8-user-icon-32.png" alt="">
					</a>
					<!-- PHONE MENU -->
					<img
						src="src/icons/icons8-menu-96.png"
						alt="menu"
						class="w-[60px] desktop:hidden tablet:hidden"
						onclick="dashboardMenu()" />
				</div>
			</div>
		</nav>

		<!-- <div
			class="w-3/4 h-3/4 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-[#fef6e4] fixed rounded-sm">
			<h1 class="text-center">Bagaimana Perasaan Anda Hari Ini?</h1>

		</div> -->

		<!-- MENU only on Phone -->
		<div id="phoneMenu" class="hidden">
			<div
				class="w-1/2 h-screen bg-[#f3d2c1] top-0 left-0 flex flex-col fixed mt-[80px] p-5 text-center z-30">
				<a
					href="index.php"
					class="my-4 text-[20px] hover:underline hover:underline-offset-8">
					Home
				</a>
				<a
					href="dashboard.php"
					class="my-3 text-[20px] hover:underline hover:underline-offset-8">
					Dashboard
				</a>
				<a
					href="activity/moodtracker.php"
					class="my-3 text-[20px] hover:underline hover:underline-offset-8">
					Notes
				</a>
				<a
					href="#"
					class="my-3 text-[20px] hover:underline hover:underline-offset-8">
					Meditasi
				</a>
				<a
					href="#"
					class="my-3 text-[20px] hover:underline hover:underline-offset-8">
					Konsultasi
				</a>
				<a
					href="profile.php"
					class="my-3 text-[20px] hover:underline hover:underline-offset-8">
					Profile
				</a>
				<a
					href="logout.php"
					class="my-3 text-[20px] hover:underline hover:underline-offset-8">
					Logout
				</a>
				<img
					src="src/icons/icons8-close-32.png"
					alt="close"
					width="25px"
					class="mx-auto my-4"
					onclick="dashboardMenu()" />
			</div>
		</div>

		<div class="flex">
			<div class="w-1/6 relative phone:hidden">
				<nav
					class="w-1/6 h-screen mt-[80px] bg-[#f3d2c1] flex flex-col text-center fixed">
					<a
						href="index.php"
						class="my-4 text-[20px] hover:underline hover:underline-offset-8">
						Home
					</a>
					<a
						href=""
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Dashboard
					</a>
					<a
						href="activity/moodtracker.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Notes
					</a>
					<a
						href="activity/meditation.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Meditasi
					</a>
					<a
						href="activity/consultation.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Konsultasi
					</a>
					<a
						href="profile.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Profile
					</a>
					<a
						href="logout.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Logout
					</a>
				</nav>
			</div>
			<div
				id="dashboard"
				class="desktop:px-[60px] tablet:px-[60px] phone:px-[30px] pt-[80px]">
				<section id="activity" class="py-[30px]">
					<h1
						class="py-[30px] phone:pb-0 text-[30px] font-semibold tracking-widest phone:tracking-wide phone:text-center underline underline-offset-8">
						How's Your Feeling Today
					</h1>
					<div class="w-1/2 phone:w-full mx-[20px] phone:mx-0">
						<img
							src="src/mood-tracker.png"
							alt="meditasi"
							class="w-[400px] phone:w-full h-[300px] bg-center object-scale-down mx-auto" />
						<div
							class="text-center shadow mx-[100px] phone:mx-auto">
							<a
								href="activity/moodtracker.php"
								class="text-[20px] tracking-[5px]">
								mood tracker
							</a>
						</div>
					</div>
				</section>
				<section id="activity" class="py-[30px]">
					<h1
						class="py-[30px] phone:pb-0 text-[30px] font-semibold tracking-widest phone:tracking-widest phone:text-center underline underline-offset-8">
						Activity
					</h1>
					<div class="desktop:flex tablet:flex phone:w-full">
						<div class="mx-[20px] phone:mx-0">
							<img
								src="src/meditasi.png"
								alt="meditasi"
								class="w-[400px] phone:w-full h-[300px] bg-center object-scale-down" />
							<div
								class="text-center shadow mx-[120px] phone:mx-auto">
								<a
									href="activity/meditation.php"
									class="text-[20px] tracking-[5px]">
									meditasi
								</a>
							</div>
						</div>
						<div class="mx-[20px] phone:mx-0">
							<img
								src="src/konsultasi.png"
								alt="meditasi"
								class="w-[400px] phone:w-full h-[300px] phone:h-[200px] bg-center object-scale-down" />
							<div
								class="text-center shadow mx-[120px] phone:mx-0">
								<a
									href="activity/consultation.php"
									class="text-[20px] tracking-[5px]">
									konsultasi
								</a>
							</div>
						</div>
					</div>
				</section>

				<section id="news"></section>

				<section id="comments">
					<h1
						class="py-[30px] text-[30px] font-semibold tracking-[5px] phone:tracking-normal underline underline-offset-8">
						Leave Us a Comment
					</h1>
					<div class="">
						<div class="">
							<form action="" method="post">
								<label for="nilai">Penilaian anda :</label>
								<br />
								<select name="nilai" id="nilai">
									<option value="5/5">
										Sangat Baik
									</option>
									<option value="4/5">Baik</option>
									<option value="3/5">
										Biasa Saja
									</option>
									<option value="2/5">Buruk</option>
									<option value="1/5">
										Sangat Buruk
									</option>
								</select>
								<br />
								<br />
								<div class="w-3/4 phone:w-full">
									<div>
										<label for="comment">
											Komentar anda :
										</label>
										<br />
										<textarea
											name="comment"
											id="comment"
											class="w-full resize rounded"
											rows="10"
											placeholder="Your thought . . ."></textarea>
									</div>
									<div class="flex justify-end">
										<button
											type="submit"
											name="submitComment"
											id="submit-button"
											class="bg-[#ffd803] px-[10px] py-[5px] my-[20px] rounded tracking-[2px]">
											submit
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- <footer class="h-[50vh]"></footer> -->
		<script src="js/dashboard-user.js"></script>
	</body>
</html>

<?php else: ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dashboard</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body class="bg-[#fef6e4]">
		<nav
			class="w-full h-[80px] p-[10px] bg-[#f3d2c1] text-[20px] flex fixed z-30">
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
						href="../dashboard.php"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Dashboard
					</a>
					<a
						href="activity/moodtracker.php"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Notes
					</a>
					<a
						href="activity/meditation.php"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Meditasi
					</a>
					<a
						href="activy/consultation.php"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Konsultasi
					</a>
					<!-- <a
						href="profile.php"
						class="hover:underline hover:underline-offset-8">
						<div></div>
					</a> -->
					<!-- PHONE MENU -->
					<img
						src="src/icons/icons8-menu-96.png"
						alt="menu"
						class="w-[60px] desktop:hidden tablet:hidden"
						onclick="dashboardMenu()" />
				</div>
			</div>
		</nav>
		<div class="flex w-full">
			<div class="w-1/6 relative phone:hidden">
				<nav
					class="w-1/6 h-screen mt-[80px] bg-[#f3d2c1] flex flex-col text-center fixed">
					<a
						href="index.php"
						class="my-4 text-[20px] hover:underline hover:underline-offset-8">
						Home
					</a>
					<a
						href=""
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Dashboard
					</a>
					<a
						href="activity/moodtracker.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Notes
					</a>
					<a
						href="activity/meditation.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Meditasi
					</a>
					<a
						href="activity/consultation.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Konsultasi
					</a>
					<a
						href="profile.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Profile
					</a>
					<a
						href="logout.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Logout
					</a>
				</nav>
			</div>
			<div id="phoneMenu" class="hidden">
				<div
					class="w-1/2 h-screen bg-[#f3d2c1] top-0 left-0 flex flex-col fixed mt-[80px] p-5 text-center z-30">
					<a
						href="index.php"
						class="my-4 text-[20px] hover:underline hover:underline-offset-8">
						Home
					</a>
					<a
						href="dashboard.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Dashboard
					</a>
					<a
						href="activity/moodtracker.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Notes
					</a>
					<a
						href="#"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Meditasi
					</a>
					<a
						href="#"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Konsultasi
					</a>
					<a
						href="profile.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Profile
					</a>
					<a
						href="logout.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Logout
					</a>
					<img
						src="src/icons/icons8-close-32.png"
						alt="close"
						width="25px"
						class="mx-auto my-4"
						onclick="dashboardMenu()" />
				</div>
			</div>
			<!-- Snippet -->
			<div class="w-5/6 flex justify-center pt-[60px]">
				<section class="pb-2 flex">
					<!-- Chats -->
					<div
						class="w-1/3 min-h-[80vh] relative bg-[#f3d2c1] shadow-lg rounded-lg my-10 ml-10">
						<div class="py-3 px-5">
							<h3
								class="text-sm font-semibold uppercase text-[#001858]] mb-1">
								Chats
							</h3>

							<div class="divide-y divide-[#001858]">
								<button
									class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
									<div class="flex items-center">
										<div>
											<h4
												class="text-sm font-semibold text-gray-900">
												Marie Zulfikar
											</h4>
											<div class="text-[13px]">
												The video chat ended · 2hrs
											</div>
										</div>
									</div>
								</button>

								<button
									class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
									<div class="flex items-center">
										<div>
											<h4
												class="text-sm font-semibold text-gray-900">
												Nhu Cassel
											</h4>
											<div class="text-[13px]">
												Hello Lauren 👋, · 24 Mar
											</div>
										</div>
									</div>
								</button>

								<button
									class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
									<div class="flex items-center">
										<div>
											<h4
												class="text-sm font-semibold text-gray-900">
												Patrick Friedman
											</h4>
											<div
												class="text-[13px] text-[#172c66]">
												Yes, you're right but… · 14 Mar
											</div>
										</div>
									</div>
								</button>

								<button
									class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
									<div class="flex items-center">
										<div>
											<h4
												class="text-sm font-semibold text-gray-900">
												Byrne McKenzie
											</h4>
											<div class="text-[13px]">
												Hey Lauren ✨, first of all… ·
												14 Mar
											</div>
										</div>
									</div>
								</button>

								<button
									class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
									<div class="flex items-center">
										<div>
											<h4
												class="text-sm font-semibold text-gray-900">
												Scott Micheal
											</h4>
											<div class="text-[13px]">
												No way 🤙! · 11 Mar
											</div>
										</div>
									</div>
								</button>
							</div>
						</div>
					</div>
					<div
						class="flex flex-col justify-start w-[100%] min-h-[85vh] text-gray-800 p-10">
						<!-- Component Start -->
						<div
							class="flex flex-col flex-grow w-full max-w-[100%] bg-[#f3d2c1] shadow-xl rounded-lg overflow-hidden">
							<div
								class="flex flex-col flex-grow h-0 p-4 overflow-auto">
								<div
									class="flex w-full mt-2 space-x-3 max-w-md">
									<div>
										<div
											class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
											<p class="text-sm">Selamat pagi.</p>
										</div>
										<span
											class="text-xs text-gray-500 leading-none"
											>2 min ago</span
										>
									</div>
								</div>
								<div
									class="flex w-full mt-2 space-x-3 max-w-md ml-auto justify-end">
									<div>
										<div
											class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
											<p class="text-sm">
												Selamat pagi, ada yang bisa saya
												banting?
											</p>
										</div>
										<span
											class="p-2 text-xs text-gray-500 leading-none flex justify-end"
											>2 min ago</span
										>
									</div>
								</div>
								<div
									class="flex w-full mt-2 space-x-3 max-w-2xl">
									<div>
										<div
											class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
											<p class="text-sm">
												Ga, cuma nyapa ajah, aku gabut.
											</p>
										</div>
										<span
											class="text-xs text-gray-500 leading-none"
											>2 min ago</span
										>
									</div>
								</div>
								<div
									class="flex w-full mt-2 space-x-3 max-w-md ml-auto justify-end">
									<div>
										<div
											class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
											<p class="text-sm">
												Baiklah, terima kasih atas waktu
												saya yang anda sia-siakan.
												Jangan datang kembali.
											</p>
										</div>
										<span
											class="p-2 text-xs text-gray-500 leading-none flex justify-end"
											>2 min ago</span
										>
									</div>
								</div>
								<div
									class="flex w-full mt-2 space-x-3 max-w-md">
									<div>
										<div
											class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
											<p class="text-sm">Ngoghey.</p>
										</div>
										<span
											class="text-xs text-gray-500 leading-none"
											>2 min ago</span
										>
									</div>
								</div>
								<div
									class="flex w-full mt-2 space-x-3 max-w-md ml-auto justify-end">
									<div>
										<div
											class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
											<p class="text-sm">^_^</p>
										</div>
										<span
											class="p-2 text-xs text-gray-500 leading-none flex justify-end"
											>2 min ago</span
										>
									</div>
								</div>
							</div>

							<div class="p-4">
								<input
									class="flex items-center h-10 w-full rounded px-3 text-sm"
									type="text"
									placeholder="Type your message…" />
							</div>
						</div>
					</div>
					<!-- Component End  -->
				</section>
			</div>
		</div>
		<script src="js/script.js"></script>
	</body>
</html>




<?php endif; ?>
