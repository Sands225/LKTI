<?php

// require '../functions.php';

// $email = $_COOKIE["email"];

// $sql = "SELECT * FROM user WHERE email = '$email'";
// $result = mysqli_query($conn, $sql);

// if ($result) {
// 	if (mysqli_num_rows($result) > 0) {
// 		while ($row = mysqli_fetch_assoc($result)) {
// 		$userID = $row['id'];
// 		$privil = $row['privil'];
//         }
//     }
// }

// var_dump($userID);
// $msg = $_POST['message'];
// $sesipesan = '1';
// $timestamp = time();

// $query = "INSERT INTO user VALUES 
//             ('', '$userID', '$msg', '$sesipesan', '$timestamp')
//             ";
//     mysqli_query($conn, $query);




?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/style.css" />
		<title>Smansa Youth Share</title>
	</head>
	<body class="bg-[#fef6e4]">
		<!-- MOOD TRACKER -->

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
						href="../dashboard.php"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Dashboard
					</a>
					<a
						href="meditation.php"
						class="hover:underline hover:underline-offset-8 px-[10px] phone:hidden">
						Meditasi
					</a>
					<a
						href="consultation.php"
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

		<!-- MENU only on Phone -->
		<div id="phoneMenu" class="hidden">
			<div
				class="w-1/2 h-screen bg-[#f3d2c1] top-0 left-0 flex flex-col fixed mt-[80px] p-5 text-center z-30">
				<a
					href="../dashboard.php"
					class="my-3 text-[20px] hover:underline hover:underline-offset-8">
					Dashboard
				</a>
				<a
					href="meditation.php"
					class="my-3 text-[20px] hover:underline hover:underline-offset-8">
					Meditasi
				</a>
				<a
					href="consultation.php"
					class="my-3 text-[20px] hover:underline hover:underline-offset-8">
					Konsultasi
				</a>
				<img
					src="../src/icons/icons8-close-32.png"
					alt="close"
					width="25px"
					class="mx-auto my-4"
					onclick="dashboardMenu()" />
			</div>
		</div>
		<div
			class="desktop:px-[60px] tablet:px-[60px] phone:px-[30px] pt-[80px]">
			<section class="pb-[30px] pt-[10px]">
				<a
					href="../dashboard.php"
					class="mb-[30px] py-1 px-2 rounded-2xl text-[25px] tracking-widest hover:underline hover:underline-offset-8">
					Back
				</a>
				<div
					class="flex flex-col items-center justify-center w-full min-h-[85vh] text-gray-800 p-10">
					<!-- Component Start -->
					<div
						class="flex flex-col flex-grow w-full max-w-4xl bg-[#f3d2c1] shadow-xl rounded-lg overflow-hidden">
						<div
							class="flex flex-col flex-grow h-0 p-4 overflow-auto" id="chat">
							<div class="flex w-full mt-2 space-x-3 max-w-xl">
								<div>
									<div
										class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
										<p class="text-sm">
											Lorem ipsum dolor sit amet
											consectetur adipisicing elit.
											Veritatis, laboriosam eveniet?
											Nostrum modi eum adipisci nesciunt
											corporis accusamus harum itaque
											neque temporibus. Assumenda ex
											laborum, quam praesentium similique
											delectus deserunt. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti aut tempora deleniti facilis ipsa facere inventore, unde enim consequuntur doloremque, nihil pariatur porro at eveniet est itaque sapiente ullam exercitationem.
										</p>
									</div>
									<span
										class="text-xs text-gray-500 leading-none"
										>2 min ago</span
									>
								</div>
							</div>
							<!-- <div
								class="flex w-full mt-2 space-x-3 max-w-md ml-auto justify-end">
								<div>
									<div
										class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
										<p class="text-sm">
											Lorem ipsum dolor sit amet,
											consectetur adipiscing elit, sed do
											eiusmod.
										</p>
									</div>
									<span
										class="text-xs text-gray-500 leading-none flex justify-end"
										>2 min ago</span
									>
								</div>
							</div>
							<div class="flex w-full mt-2 space-x-3 max-w-md">
								<div>
									<div
										class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
										<p class="text-sm">
											Lorem ipsum dolor sit amet
											consectetur adipisicing elit.
											Veritatis, laboriosam eveniet?
											Nostrum modi eum adipisci nesciunt
											corporis accusamus harum itaque
											neque temporibus. Assumenda ex
											laborum, quam praesentium similique
											delectus deserunt.
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
											Lorem ipsum dolor sit amet,
											consectetur adipiscing elit, sed do
											eiusmod.
										</p>
									</div>
									<span
										class="text-xs text-gray-500 leading-none flex justify-end"
										>2 min ago</span
									>
								</div>
							</div>
							<div class="flex w-full mt-2 space-x-3 max-w-md">
								<div>
									<div
										class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
										<p class="text-sm">
											Lorem ipsum dolor sit amet
											consectetur adipisicing elit.
											Veritatis, laboriosam eveniet?
											Nostrum modi eum adipisci nesciunt
											corporis accusamus harum itaque
											neque temporibus. Assumenda ex
											laborum, quam praesentium similique
											delectus deserunt.
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
											Lorem ipsum dolor sit amet,
											consectetur adipiscing elit, sed do
											eiusmod.
										</p>
									</div>
									<span
										class="text-xs text-gray-500 leading-none flex justify-end"
										>2 min ago</span
									>
								</div>
							</div> -->
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

			<section id="activity" class="py-[30px]">
				<h1
					class="py-[30px] phone:pb-0 text-[30px] font-semibold tracking-widest underline underline-offset-8">
					Others
				</h1>
				<div class="desktop:flex tablet:flex phone:w-full">
					<div class="mx-[20px] phone:mx-0">
						<img
							src="../src/meditasi.png"
							alt="meditasi"
							class="w-[400px] phone:w-full h-[300px] bg-center object-scale-down" />
						<div
							class="text-center shadow mx-[120px] phone:mx-auto">
							<a
								href="meditation.php"
								class="text-[20px] tracking-[5px]">
								meditasi
							</a>
						</div>
					</div>
					<div class="mx-[20px] phone:mx-0">
						<img
							src="../src/konsultasi.png"
							alt="meditasi"
							class="w-[400px] phone:w-full h-[300px] phone:h-[200px] bg-center object-scale-down" />
						<div class="text-center shadow mx-[120px] phone:mx-0">
							<a
								href="consultation.php"
								class="text-[20px] tracking-[5px]">
								konsultasi
							</a>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- <footer class="h-[50vh]"></footer> -->
        <script src="../js/jquery.js"></script>
		<script src="../js/dashboard-user.js"></script>
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
