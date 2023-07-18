<?php

$conn = mysqli_connect("localhost", "root", "", "lktitekno");

if (isset($_COOKIE['email'])) {
    $email = ($_COOKIE['email']);

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $query_user =  mysqli_query($conn, $sql);
    $userRow = mysqli_fetch_assoc($query_user);

    $userID = $userRow['id'];
    $privil = $userRow['privil'];
    $nama = $userRow['nama'];
    $umur = $userRow["umur"];
    $telp = $userRow["telp"];
    $gender = $userRow["gender"];
}

// function loadPesan() {
//     global $conn;
//     $query_user =  mysqli_query($conn, "SELECT * FROM chat");
//     $userRow = mysqli_fetch_assoc($query_user);

//     $privil = $userRow['privil'];
//     $nama = $userRow['nama'];
// }

function register($data) {
    global $conn;

    $email = $data["email"];
    $nama = stripslashes($data["nama"]);
    $umur = $data["umur"];
    $nomor = $data["telp"];
    $gender = $data["gender"];
    $pass = mysqli_real_escape_string($conn, $data["password"]);
    $cpass = mysqli_real_escape_string($conn, $data["cpassword"]);

    $checkEmail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($checkEmail)) {
        echo "<script>
			alert('Email sudah terdaftar');
			</script>";
        return false;
    }
    
    if ($pass !== $cpass) {
        echo "<script>
			alert('Password tidak sesuai');
			</script>";
        return false;
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    
    
    $query = "INSERT INTO user VALUES 
            ('', '$email', '$nama', '$umur', '$nomor', '$gender', '$pass', '1')
            ";
    mysqli_query($conn, $query);
    
    $checkemail = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    $userdata = mysqli_fetch_assoc($checkemail);
    $useremail = $userdata["email"];
	setcookie("email", $useremail, time() + 3600);
    // setcookie("welcome", " ", time() + 86400);

    var_dump(mysqli_affected_rows($conn));
    return mysqli_affected_rows($conn);
}


// STUDENT's DASHBOARD
function comment() {
    global $conn;
    $email = $_COOKIE['email'];

    $query_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    $userRow = mysqli_fetch_assoc($query_user);

    $nama = $userRow['nama'];
    $privil = $userRow['privil'];
    $rating = $_POST['nilai'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO comment VALUES 
            ('$email', '$nama', '$rating', '$comment', '$privil')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>