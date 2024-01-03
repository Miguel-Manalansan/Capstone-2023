<?php
$casService = 'https://idp.login.iu.edu/idp/profile/cas';
$thisService = 'https://cgi.luddy.indiana.edu/~team09/test.php' ;
if ($_SERVER["REQUEST_METHOD"] && $_GET["ticket"]) {
    if ($response = responseForTicket($_GET["ticket"])){

            $xml = simplexml_load_string($response);
            $username = $xml->serviceresponse->authenticationsuccess->user;
            session_start();
            $_SESSION['username'] = 'mmanalan';
            $user = $_SESSION['username'];
            include('includes/connect.php');
            $sql = "SELECT * FROM user WHERE username = '$user'";
            $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // username exists in database, redirect to another page
        header("Location: https://cgi.luddy.indiana.edu/~team09/user_profile.php");
        } else {
        // username does not exist in database, redirect to another page
            header("Location: https://cgi.luddy.indiana.edu/~team09/student-registration.php");
            }     
        }
}
else {
header("Location: $casService/login?service=$thisService");
}

function responseForTicket($ticket) {
    global $casService, $thisService;
    $casGet = "$casService/serviceValidate?ticket=$ticket&service=".urlencode($thisService);
    $response = file_get_contents($casGet);
    return $response;
}
?>