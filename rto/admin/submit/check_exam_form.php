<?php




// if (isset($_POST['submitform'])) {

//     $application_no = $_POST['application_no'];
//     $email = $_POST['email'];

//     $check = $connection->exam_check($application_no, $email);

//        var_dump($check);

//     if ($check->num_rows === 1) {
//         $data = $check->fetch_assoc();

//         // Store admin details in session or perform necessary actions
//         $_SESSION['application_no'] = $data['application_no'];
//         $_SESSION['email'] = $data['email'];
    
//         // Redirect to the admin dashboard or another page

//         header('Location: ../exam_test.php');
//         exit;
//     } else {
//         header('location:../exam_login.php?message=Invalid Application No or Email Id');
//     }

// }
// else{
//     header('Location: ../exam_login.php');
// }


session_start();

include '../include/connection.php';

$connection = new connection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $application_no = $_POST["application_no"];
    $email = $_POST["email"];

    $result = $connection->exam_check($application_no, $email);

    // Prepare the response data
    if ($result->num_rows > 0) {
        // Data is valid, prepare the response
        $response = array(
            "valid" => true,
            "application_no" => $application_no,
            "email" => $email
        );
    } else {
        // Data is invalid, prepare the response
        $response = array(
            "valid" => false
        );
    }

    // Send the JSON response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
    exit; // Make sure to exit after sending the JSON response
}

?>



