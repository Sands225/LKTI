<!-- <?php

session_start();
// var_dump($_SESSION["loginSession"]);
?> -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Smansa Youth Share</title>
	</head>
	<body class="bg-[#f3d2c1] text-[#172c66]">
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
					<?php if ( isset($_COOKIE["email"]) ) : ?>
					<a
						href="dashboard.php"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Dashboard
					</a>
					<?php endif; ?>
					<a
						href="#news"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						News
					</a>
					<a
						href="#services"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						About
					</a>
					<a
						href="#comments"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Comments
					</a>

					<!-- <PHP> if (user login = false) -->
					<?php if ( isset($_COOKIE["email"]) ) : ?>
					<a
						href="profile.php"
						class="hover:underline hover:underline-offset-8">
						<img
							src="src/icons/icons8-user-icon-32.png"
							alt="profile"
							class="px-[10px]" />
					</a>
					<?php else : ?>
					<a
						href="login.php"
						class="hover:underline hover:underline-offset-8 px-[10px]">
						Login / Register
					</a>
					<?php endif; ?>

					<!-- <PHP> if (user login = true) -->
					<!-- <a
						href="profile.html"
						class="hover:underline hover:underline-offset-8">
						<img
							src="src/icons/icons8-user-icon-32.png"
							alt="profile"
							class="px-[10px]" />
					</a> -->
				</div>
			</div>
		</nav>

		<header
			class="w-full h-screen bg-[url('/projectLKTI/public/src/background-flip.jpg')] bg-center bg-cover flex">
			<div class="w-full bg-black bg-opacity-50">
				<div
					class="w-full top-1/2 -translate-y-1/2 text-center relative text-[8vw] desktop:text-[5vw] desktop:leading-[5vw]">
					<div class="font-[elephant]">
						<h1 class="text-stroke-f3d2c1 text-transparent">
							SMANSA YOUTH
						</h1>
						<h1 class="text-[#fef6e4]">
							SHARE
						</h1>
					</div>
				</div>
			</div>
			<div
				class="w-full bg-black bg-opacity-50 rounded-lg absolute"></div>
		</header>

		<section id="news" class="p-[50px] pt-[80px]">
			<h1 class="text-[40px] font-semibold underline underline-offset-8">
				Related News
			</h1>
			<div class="mt-5">
				<div
					class="bg-[#fef6e4] tablet:p-5 desktop:p-5 phone:px-10 phone:py-5 my-3 tablet:mx-10 desktop:mx-10 tablet:flex desktop:flex rounded-lg">
					<div
						class="tablet:w-1/2 desktop:w-1/2 phone:flex phone:justify-center">
						<img
							src="src/berita-1.jpg"
							alt="berita1"
							class="w-60 phone:w-40 h-60 phone:h-40 rounded-lg object-cover" />
					</div>
					<div class="tablet:mx-5 desktop:mx-5">
						<h2
							class="phone:text-xl phone:text-center font-bold tablet:text-[2rem] desktop:text-[2rem] news-title">
							Kasus siswa bakar sekolah di Temanggung, karena
							diduga 'sering dirundung' - 'Bullying di Indonesia
							sudah mengkhawatirkan'
						</h2>
						<p
							class="h-[5rem] news-text text-lg phone:text-sm mx-3 phone:mx-0 indent-5 text-justify">
							Seperti yang baru-baru ini terjadi pada seorang
							siswa SMP di Temanggung, Jawa Tengah, nekat membakar
							sekolahnya sendiri karena sakit hati sering
							dirundung kawan-kawannya. Atas perbuatannya itu,
							siswa tersebut berstatus anak yang berhadapan dengan
							hukum meski belakangan dilakukan restorative
							justice, kata Gubernur Jawa Tengah Ganjar Pranowo.
						</p>
						<a
							class="mx-3 phone:mx-0 pt-10 text-blue-500 underline"
							href="https://www.bbc.com/indonesia/articles/cd1n7m1xezdo"
							>www.bbc.com</a
						>
					</div>
				</div>
				<div
					class="bg-[#fef6e4] tablet:p-5 desktop:p-5 phone:px-10 phone:py-5 my-3 tablet:mx-10 desktop:mx-10 tablet:flex desktop:flex rounded-lg">
					<div
						class="tablet:w-1/2 desktop:w-1/2 phone:flex phone:justify-center">
						<img
							src="src/berita2.jpg"
							alt="berita1"
							class="w-60 phone:w-40 h-60 phone:h-40 rounded-lg object-cover" />
					</div>
					<div class="tablet:mx-5 desktop:mx-5">
						<h2
							class="phone:text-xl phone:text-center font-bold tablet:text-[2rem] desktop:text-[2rem] news-title">
							Singapura Catat Angka Bunuh Diri Tinggi, Remaja
							Dominasi Kasus Patah Hati Akibat Asmara
						</h2>
						<p
							class="h-[5rem] news-text text-lg phone:text-sm mx-3 phone:mx-0 indent-5 text-justify">
							Sebanyak 476 kasus bunuh diri dilaporkan di
							Singapura pada tahun 2022. Angka tersebut merupakan
							yang tertinggi dalam lebih dari 20 tahun, menurut
							Samaritans of Singapore (SOS) pada Sabtu (1/7/2023).
							Yang menarik, penyebab bunuh diri tidak hanya faktor
							ekonomi saja, tetapi juga karena faktor asmara alias
							patah hati.
						</p>
						<a
							class="mx-3 phone:mx-0 pt-10 text-blue-500 underline"
							href="https://hidayatullah.com/berita/2023/07/03/254113/singapura-catat-angka-bunuh-diri-tinggi-remaja-mendominasi-kasus-patah-hati-akibat-asmara.html"
							>https://hidayatullah.com</a
						>
					</div>
				</div>
			</div>
		</section>

		<section
			id="services"
			class="desktop:px-[60px] pt-[50px] pb-[20px] bg-[#fef6e4]">
			<h1
				class="text-center py-[5vh] text-[40px] font-semibold underline underline-offset-8">
				OUR SERVICES
			</h1>
			<div class="grid grid-cols-2">
				<div
					class="desktop:p-[20px] desktop:m-[20px] rounded-xl bg-[#fef6e4] desktop:flex">
					<div class="phone:w-1/2 phone:mx-auto desktop:w-1/6">
						<img
							src="src/icons/icons8-unknown-96.png"
							alt="unknown-icon"
							width="100%" />
					</div>
					<div class="phone:w-full desktop:w-5/6">
						<h2
							class="text-3xl phone:text-xl phone:mx-3 p-[18px] font-semibold phone:text-center">
							Identitas Anonim
						</h2>
						<p class="pl-[18px] text-lg phone:hidden text-justify">
							Para pengguna dapat berkonsultasi dengan bebas tanpa
							khawatir dengan identitas mereka, sehingga para
							pengguna bisa berbagi masalah pribad dengan lebih
							nyaman dan aman tanpa memberitahukan informasi
							pribadi.
						</p>
					</div>
				</div>
				<div
					class="desktop:p-[20px] desktop:m-[20px] rounded-xl bg-[#fef6e4] desktop:flex">
					<div class="phone:w-1/2 phone:mx-auto desktop:w-1/6">
						<img
							src="src/icons/icons8-global-network-96.png"
							alt="unknown-icon"
							width="100%" />
					</div>
					<div class="phone:w-full desktop:w-5/6">
						<h2
							class="text-3xl phone:text-xl p-[18px] font-semibold phone:text-center">
							Bebas Akses Dimanapun
						</h2>
						<p class="pl-[18px] text-lg phone:hidden text-justify">
							Para pengguna dapat mengakses internet dan
							berkonsultasi dimana saja dan kapan saja tanpa harus
							pergi menemui konsultan secara langsung.
						</p>
					</div>
				</div>
				<div
					class="desktop:p-[20px] desktop:m-[20px] rounded-xl bg-[#fef6e4] desktop:flex">
					<div class="phone:w-1/2 phone:mx-auto desktop:w-1/6">
						<img
							src="src/icons/icons8-face-to-face-96.png"
							alt="unknown-icon"
							width="100%" />
					</div>
					<div class="phone:w-full desktop:w-5/6">
						<h2
							class="text-3xl phone:text-xl p-[18px] font-semibold phone:text-center">
							Koneksi dengan Ahli
						</h2>
						<p class="pl-[18px] text-lg phone:hidden text-justify">
							Para pengguna dapat terhubung dengan konsultan yang
							berpengalaman secara online untuk memperoleh
							nasihat, panduan, dan dukungan yang dapat membantu
							mereka mengatasi masalah pribadi, akademik, atau
							emosional.
						</p>
					</div>
				</div>
				<div
					class="desktop:p-[20px] desktop:m-[20px] rounded-xl bg-[#fef6e4] desktop:flex">
					<div class="phone:w-1/2 phone:mx-auto desktop:w-1/6">
						<img
							src="src/icons/icons8-us-dollar-96.png"
							alt="unknown-icon"
							width="100%" />
					</div>
					<div class="phone:w-full desktop:w-5/6">
						<h2
							class="text-3xl phone:text-xl p-[18px] font-semibold phone:text-center">
							Tidak Dipungut Biaya
						</h2>
						<p class="pl-[18px] text-lg phone:hidden text-justify">
							Para pengguna dapat berkonsultasi dengan bebas tanpa
							perlu memikirkan biaya untuk konsultasi.
						</p>
					</div>
				</div>
			</div>
			<div class="flex justify-end m-[20px]">
				<a
					href="registration.php"
					class="px-[20px] py-[10px] bg-[#ffd803] text-center text-[18px] rounded">
					<button class="tracking-[2px]">Join now</button>
				</a>
			</div>
		</section>

		<section
			id="comments"
			class="pt-[60px] pb-[80px] px-[60px] phone:px-[30px] relative">
			<h1
				class="p-[30px] mb-[20px] text-4xl text-center font-semibold underline underline-offset-4">
				What They Say About Us?
			</h1>
			<div class="flex overflow-auto">
				<div
					class="w-[100vw] bg-[#fef6e4] p-[20px] m-[20px] phone:m-[10px] rounded-3xl border-l-8 border-b-8 border border-black">
					<div>
						<h2
							class="phone:px-16 py-[15px] text-center text-[25px] whitespace-nowrap font-semibold">
							Sangat Baik
						</h2>
						<h3 class="text-center -mt-[20px]">user</h3>
						<p
							class="p-[20px] phone:p-0 phone:py-3 italic text-center text-sm">
							"Smansa Youth Share sangat membantu saya dalam
							meningkatkan kesadaran dan pemahaman tentang
							kesehatan mental. Dan juga bisa memberikan saran dan
							strategi yang berguna untuk mengelola stres,
							kecemasan, dan masalah kesehatan mental lainnya."
						</p>
					</div>
				</div>
				<div
					class="w-[100vw] bg-[#fef6e4] p-[20px] m-[20px] phone:m-[10px] rounded-3xl border-l-8 border-b-8 border border-black">
					<div>
						<h2
							class="phone:px-16 py-[15px] text-center text-[25px] whitespace-nowrap font-semibold">
							Sangat Baik
						</h2>
						<h3 class="text-center -mt-[20px]">user</h3>
						<p
							class="p-[20px] phone:p-0 phone:py-3 italic text-center text-sm">
							"Smansa Youth Share sungguh menjadi tempat yang
							sangat membantu bagi saya dalam menyampaikan
							curhatan pribadi. Solusi yang diberikan langsung
							berasal dari guru BK yang memiliki pengalaman luas
							dalam menangani masalah serupa seperti yang saya
							hadapi. Sehingga saya dapat merasa nyaman karena
							mendapat nasihat yang tepat dan terpercaya dari
							seseorang yang kompeten dalam bidangnya."
						</p>
					</div>
				</div>
				<div
					class="w-[100vw] bg-[#fef6e4] p-[20px] m-[20px] phone:m-[10px] rounded-3xl border-l-8 border-b-8 border border-black">
					<div>
						<h2
							class="phone:px-16 py-[15px] text-center text-[25px] whitespace-nowrap font-semibold">
							Baik
						</h2>
						<h3 class="text-center -mt-[20px]">user</h3>
						<p
							class="p-[20px] phone:p-0 phone:py-3 italic text-center text-sm">
							"Fitur-fitur pada Smansa Youth Share, seperti
							meditasi dan konsultasi, memberi saya kesempatan
							untuk berbagi pengalaman dengan guru BK secara
							anonim, ini sangat membantu untuk mengurangi rasa
							kecemasan dan menyediakan dukungan secara
							emosional."
						</p>
					</div>
				</div>
			</div>
		</section>
		<footer class="px-[60px] pt-[50px] pb-[10px] bg-[#fef6e4] desktop:flex">
			<div class="w-1/3"></div>
			<div
				class="w-1/3 phone:w-full phone:pb-[20px] my-auto text-center text-[30px] leading-7">
				<h1 class="text-stroke-f3d2c1 text-transparent">
					SMANSA YOUTH
				</h1>
				<h1 class="text-[#f3d2c1] font-semibold">SHARE</h1>
			</div>
			<div class="text-[#f3d2c1]">
				<div class="p-[5px] flex justify-center">
					<img
						src="src/icons/icons8-location-50-1.png"
						alt="smansa-location"
						class="w-[30px] h-[30px]" />
					<div class="w-2/3 phone:w-full mx-[5px]">
						Jl. Kamboja no. 4, Dangin Puri Kangin, Denpasar, Bali.
					</div>
				</div>
				<div class="p-[5px] flex justify-center">
					<img
						src="src/icons/icons8-phone-50-1.png"
						alt="smansa-location"
						class="w-[30px] h-[30px]" />
					<div class="w-2/3 phone:w-full mx-[5px]">(0361) 222044</div>
				</div>
				<div class="p-[5px] flex justify-center">
					<img
						src="src/icons/icons8-mail-50-1.png"
						alt="smansa-location"
						class="w-[30px] h-[30px]" />
					<div class="w-2/3 phone:w-full mx-[5px]">
						info@sman1dps.sch.id
					</div>
				</div>
			</div>
		</footer>
		<script src="js/script.js"></script>
	</body>
</html>
