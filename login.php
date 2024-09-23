<?php
    session_start();

    // DUMMY DATA PARA MAACCESS ANG ADMIN DASHBOARD SINCE WALA NAMAN AKONG ACTUAL DB
    $users = [
        'admin' => 'Admin123'
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // reCAPTCHA verification
        $recaptcha_secret = "6LfClkwqAAAAAFRXPhsJVtJ5Q3300hZBN7pN23bq";
        $recaptcha_response = $_POST['g-recaptcha-response'];
        
        $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $response_data = json_decode($verify_response);

        if ($response_data->success) {

            // SINCE NASA LOOB NITONG RESPONSE_DATA 'YUNG MGA DATA FROM THE FORM, MAPROCESS NIYA LANG ANG FORM IF SUCCESSFUL 'YUNG RECAPTCHA VERIFICATION 

            //DATA GALING SA LOGIN FORM, ALSO SANITIZE NA RIN 'YUNG INPUTS
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            // CHECKING IF TAMA BA ANG USERNAME AND PASSWORD
            if (isset($users[$username]) && $users[$username] == $password) {
                // SET NA NG SESSION THEN DIRECT NA SA DASHBOAD
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
                exit();
            } else {
                $_SESSION['error'] = "Invalid username or password."; //SESSION NG ERROR MESSAGE IF MALI CREDENTIALS
                header("Location: loginform.php");
                exit();
            }


        } else {
            $_SESSION['error'] = "reCAPTCHA verification failed. Please try again."; //SESSION NG ERROR MESSAGE IF HINDI PININDOT NI USER 'YUNG CHECKBOX AND IF NOT WORKING 'YUNG RECAPTCHA
            header("Location: loginform.php");
            exit();
        }
    } else {
        // If not a POST request, redirect to the form page
        header("Location: loginform.php");
        exit();
    }
?>
