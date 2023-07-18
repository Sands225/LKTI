<?php 
// session_start();
if ( !isset($_COOKIE["email"]) ) {
	header("Location: ../login.php");
    exit;
}

require '../functions.php';

$query_user =  mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
$userRow = mysqli_fetch_assoc($query_user);

$privil = $userRow['privil'];

// Mengambil nilai dari database 'mood'
$query_mood = mysqli_query($conn, "SELECT * FROM mood WHERE email = '$email'");
// var_dump($query_mood);
// $moodRow = mysqli_fetch_assoc($query_mood);

date_default_timezone_set('Asia/Jakarta');
if (isset($_POST["submit"]) > 0) {
	$timestamp = time();
    $currentMood = $_POST['mood'];
    $currentNote = $_POST['comment'];

    // echo $currentTime, $currentDate, $currentMood, $currentNote;

    $query = "INSERT INTO mood VALUES 
            ('', '$email', '$timestamp', '', '$currentMood', '$currentNote')
            ";
    mysqli_query($conn, $query);
}

// echo date('d-m-Y H:m:s');
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
			id="dashboard"
			class="desktop:px-[60px] tablet:px-[60px] phone:px-[30px] pt-[80px]">
			<section class="py-[30px]">
				<a
					href="../dashboard.php"
					class="py-[30px] phone:pb-0 text-[25px] tracking-widest hover:underline hover:underline-offset-8">
					Back
				</a>
				<div>
					<h1
						class="py-3 text-[30px] font-semibold tracking-widest phone:tracking-wide phone:text-center underline underline-offset-8">
						Bagaimana Perasaan Anda Hari Ini?
					</h1>
					<form action="" method="post">
						<div class="flex">
							<div>
								<label for="terrible">
									<input
										type="radio"
										name="mood"
										id="terrible"
										value="terrible"
										class="peer hidden" />
									<img
										src="../src/emot/angry.png"
										alt="angry-feeling"
										class="p-4 m-1 phone:p-2 rounded-full peer-checked:bg-black peer-checked:bg-opacity-20" />
								</label>
								<h3 class="text-center">Sangat Buruk</h3>
							</div>
							<div>
								<label for="sad">
									<input
										type="radio"
										name="mood"
										id="sad"
										value="sad"
										class="peer hidden" />
									<img
										src="../src/emot/sad.png"
										alt="sad-feeling"
										class="p-4 m-1 phone:p-2 rounded-full peer-checked:bg-black peer-checked:bg-opacity-20" />
								</label>
								<h3 class="text-center">Buruk</h3>
							</div>
							<div>
								<label for="humble">
									<input
										type="radio"
										name="mood"
										id="humble"
										value="humble"
										class="peer hidden" />
									<img
										src="../src/emot/humble.png"
										alt="humle-feeling"
										class="p-4 m-1 phone:p-2 rounded-full peer-checked:bg-black peer-checked:bg-opacity-20" />
								</label>
								<h3 class="text-center">Biasa Saja</h3>
							</div>
							<div>
								<label for="good">
									<input
										type="radio"
										name="mood"
										id="good"
										value="good"
										class="peer hidden" />
									<img
										src="../src/emot/good.png"
										alt="good-feeling"
										class="p-4 m-1 phone:p-2 rounded-full peer-checked:bg-black peer-checked:bg-opacity-20" />
								</label>
								<h3 class="text-center">Baik</h3>
							</div>
							<div>
								<label for="best">
									<input
										type="radio"
										name="mood"
										id="best"
										value="best"
										class="peer hidden" />
									<img
										src="../src/emot/best.png"
										alt="best-feeling"
										class="p-4 m-1 phone:p-2 rounded-full peer-checked:bg-black peer-checked:bg-opacity-20" />
								</label>
								<h3 class="text-center">Sangat Baik</h3>
							</div>
						</div>
						<div>
							<label for="comment"></label>
							<br />
							<textarea
								name="comment"
								id="comment"
								class="w-1/2 phone:w-full"
								rows="10"
								placeholder=" Ketikkan pesan/cerita untuk diri anda . . ."></textarea>
						</div>
                        <div>
                            <button
                                type="submit"
                                name="submit"
                                id="submit"
                                class="bg-[rgb(255,216,3)] px-[10px] py-[5px] my-[20px] rounded tracking-[2px]" onclick="reloadPage()">
                                submit
                            </button>
                        </div>
					</form>
				</div>
				<div id="mood-table">
                    <?php if(mysqli_num_rows($query_mood) == 0) : ?>
                    <!-- <h1 class="text-[30px] font-semibold tracking-widest">
						No Notes Found
					</h1>

                    <?php else : ?>
					<h1 class="text-[30px] font-semibold tracking-widest">
						Your Notes
					</h1>
					<table
						class="border border-spacing-1 border-separate min-w-[50%] phone:min-w-full">
						<tr class="">
                            <th class="px-2 border">Date</th>
							<th class="px-2 border">Time</th>
							<th class="px-2 border">Mood</th>
							<th class="px-2 border w-1/2">Notes</th>
						</tr>
                        <?php while($moodRow = mysqli_fetch_assoc($query_mood)): ?>
						<tbody>
							<tr>
								<td class="text-center">
                                    <?php echo $moodRow['tanggal'] ?>
                                </td>
								<td class="text-center">
                                    <?php echo $moodRow['waktu'] ?>
                                </td>
								<td>
                                    <?php echo $moodRow['mood'] ?>
                                </td>
                                <td>
                                    <?php echo $moodRow['pesan'] ?>
                                </td>
							</tr>
						</tbody>
                        <?php endwhile; ?>
					</table> -->
                    <?php endif; ?>
				</div>
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
		<script src="../js/dashboard-user.js"></script>
		<script src="../js/jquery.js"></script>
		<script>
			function loadMood() {

                $.ajax({
                    method: "POST",
                    url: "mood-data.php",
                    }).done(function( res ) {
                        let respon = JSON.parse( res );
                        var moodChat ='<table class="border border-spacing-1 border-separate min-w-[50%] phone:min-w-full"> <tr class=""> <th class="px-2 border">Date</th> <th class="px-2 border">Time</th> <th class="px-2 border">Mood</th> <th class="px-2 border w-1/2">Notes</th> </tr> <tbody>';
                        console.log(respon);

                        for (let i = 0; i < respon['data'].length; i++) {
							if (respon['data'][i].email == respon['email']) {
								console.log("HI");
								moodChat += '<tr> <td class="text-center">'
                                    +getDate(respon['data'][i].waktu)+
                                '</td> <td class="text-center">'
                                    +getTime(respon['data'][i].waktu)+
                                '</td> <td class="text-center">'
                                    +respon['data'][i].mood+
								'</td> <td>'
                                    +respon['data'][i].pesan+
                                '</td> </tr> ';
                            }
                            else {
								console.log('no');
                            }
                        }
                        $('#mood-table').html(moodChat);
                    });
                }

				loadMood();

            function getDate(timeStamp) {
				// console.log(timeStamp);
                timeStamp = Number(timeStamp);
                const date = new Date(timeStamp * 1000);
                const month = date.toLocaleString('default', { month: 'long' });
                const namaHari = date.toLocaleString('default', { weekday: 'long' });
                const day = date.getDate();
                const tahun = date.getFullYear();

                const tanggal = namaHari+', '+day+' '+month+' '+tahun;
                return tanggal;
            }
			function getTime(timeStamp) {
				timeStamp = Number(timeStamp);
				const date = new Date(timeStamp * 1000);
				const time = date.toLocaleTimeString();
				console.log(time);
				return time;
			}
		</script>
	</body>
</html>