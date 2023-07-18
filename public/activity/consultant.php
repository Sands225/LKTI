<?php
require '../functions.php';
// $email, $privil, and $nama already taken in 'functions.php';

if (!isset($_COOKIE['email'])) {
	header('Location: ../login.php');
	exit;
}

$query_privil = mysqli_query($conn, "SELECT * FROM user WHERE privil = '1'");
// var_dump($email, $privil, $nama);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dashboard</title>
		<link rel="stylesheet" href="../css/style.css" />
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
						src="../src/icons/icons8-menu-96.png"
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
						href="../index.php"
						class="my-4 text-[20px] hover:underline hover:underline-offset-8">
						Home
					</a>
					<a
						href=""
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Dashboard
					</a>
					<a
						href="moodtracker.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Notes
					</a>
					<a
						href="../profile.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Profile
					</a>
					<a
						href="../logout.php"
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
						href="../profile.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Profile
					</a>
					<a
						href="../logout.php"
						class="my-3 text-[20px] hover:underline hover:underline-offset-8">
						Logout
					</a>
					<img
						src="../src/icons/icons8-close-32.png"
						alt="close"
						width="25px"
						class="mx-auto my-4"
						onclick="dashboardMenu()" />
				</div>
			</div>
			<!-- Snippet -->
			<div class="w-5/6 flex justify-center pt-[60px]">
				<section class="pb-2 pl-10 flex">
					<!-- Chats -->
					<div style="margin-left: 1rem;"
						class="w-1/3 min-h-[80vh] relative bg-[#f3d2c1] shadow-lg rounded-lg my-10">
						<div class="py-3 px-5">
							<h3
								class="text-sm font-semibold uppercase text-[#001858]] mb-1">
								Chats
							</h3>

							<div id="chatUser" class="divide-y divide-[#001858]">
								<?php while($userRow = mysqli_fetch_assoc($query_privil)): ?>
								<button
									class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
									<div class="flex items-center">
										<div>
											<h4
												class="text-sm font-semibold text-gray-900">
												<?php echo $userRow['nama'] ?>
											</h4>
											<div class="text-[13px]">
												The video chat ended · 2hrs
											</div>
										</div>
									</div>
								</button>
								<?php endwhile; ?>
								<!-- <button
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
								</button> -->
							</div>
						</div>
					</div>
					<div
						class="flex flex-col justify-start w-2/3 min-h-[85vh] text-gray-800 p-10">
						<!-- Component Start -->
						<div
							class="flex flex-col flex-grow w-full max-w-[100%] bg-[#f3d2c1] shadow-xl rounded-lg overflow-hidden">
							<div id="chat"
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

							<form method="post">
							<div class="flex w-full">
								<div class="flex w-[93%] p-4">
									<input
										id="message"
										class="flex items-center h-10 w-full rounded px-3 text-sm"
										name="message"
										type="text"
										placeholder="Type your message…" />
								</div>
								<div class="w-[5%] my-auto">
									<div id="send" name="send">
										<img
											src="../src/icons/icons8-send-60.png"
											class="h-10 my-auto"
											alt="Send" />
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
					<!-- Component End  -->
				</section>
			</div>
		</div>
		<script src="../js/script.js"></script>
		<script src="../js/jquery.js"></script>
		<script>
			function loadChat() {
                $.ajax({
                    method: "POST",
                    url: "../chat/handle.php",
                    data: { name: "John", location: "Boston" }
                    }).done(function( res ) {
                        let respon = JSON.parse( res );
                        var chat='';
                        var posisi = '';
                        var warna = '';
                        var fontColor = '';
                        console.log(respon);


                        for (let i = 0; i < respon['data'].length; i++) {
							if (respon['data'][i].privil == respon['privil']) {
								posisi = 'ml-auto justify-end';
                                warna = 'bg-blue-600';
                                fontColor = 'text-white';
                            }
                            else {
								posisi = ' ';
                                warna = 'bg-gray-300';
                                fontColor = ' ';
                            }
                            chat += '<div class="flex w-full mt-2 space-x-3 max-w-xl '+posisi+'"><div><div class="'+warna+ ' '+fontColor+ ' p-3 rounded-r-lg rounded-bl-lg"><p class="text-sm">'+respon['data'][i].pesan+'</p></div><span class="flex text-xs text-gray-500 leading-none '+posisi+'"> '+getDate(respon['data'][i].timestamp)+' </span></div></div>';

							
                        }
                        $('#chat').html(chat);
                    });
                }

				loadChat();

				$(document).ready(function() {
					$("#send").click(function() {
						var message = $("#message").val();
						// console.log(message);
						$.post(
							"../chat/chatlog.php",
							{ message: message },
							function(response) {
								console.log(response);
								loadChat();
								$("#message").prop("value", "");
							}
						);
					});

				$("#message").on("keydown", function(event) {
					if (event.key === "Enter") {
						event.preventDefault(); // Prevent the default form submission behavior
						$("#send").click(); // Trigger the click event on the "send" button
						}
					});
				});

            function getDate(timeStamp) {
                timeStamp = Number(timeStamp);
                const date = new Date(timeStamp * 1000);
                const month = date.toLocaleString('default', { month: 'long' });
                const namaHari = date.toLocaleString('default', { weekday: 'long' });
                const day = date.getDate();
                const tahun = date.getFullYear();

                const tanggal = namaHari+', '+day+' '+month+' '+tahun;
                return tanggal;
            }
		</script>
	</body>
</html>
