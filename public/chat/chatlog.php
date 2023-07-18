<?php

require '../functions.php';

$email = $_COOKIE["email"];

$sql = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $userID = $row['id'];
            $privil = $row['privil'];
        }
    }
}

// Ensure the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the 'message' data from the POST request
    $message = $_POST['message'];

    // Perform any necessary data processing or validation
    if (!empty($message)) {    
    // Insert the data into the database or perform any other operations
    $query = "INSERT INTO chat (id, user, pesan, privil, sesipesan, timestamp) VALUES ('', '$userID', '$message', '$privil', '1', UNIX_TIMESTAMP())";

        if (mysqli_query($conn, $query)) {
            echo "Message inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Message have to be filled.";
    }
} else {
    echo "Invalid request method.";
}


// require '../functions.php';

// $email = $_COOKIE["email"];

// $sql = "SELECT * FROM user WHERE email = '$email'";
// $result = mysqli_query($conn, $sql);

// if ($result) {
//     if (mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             $userID = $row['id'];
//             $privil = $row['privil'];
//         }
//     }
// }
// // echo $email;

// if (isset($_POST["send"])) {
//     $msg = $_POST['message'];
//     $sesipesan = '1';
//     $timestamp = time();

//     $query = "INSERT INTO chat VALUES 
//                 (' ', '$userID', '$msg', '$sesipesan', '$timestamp')
//                 ";
//     mysqli_query($conn, $query);

//     if (mysqli_query($conn, $query)) {
//         echo "Message inserted successfully.";
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
// }


?>