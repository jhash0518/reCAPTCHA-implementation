<?php
    session_start();


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // reCAPTCHA verification
        $recaptcha_secret = "6LfClkwqAAAAAFRXPhsJVtJ5Q3300hZBN7pN23bq";
        $recaptcha_response = $_POST['g-recaptcha-response'];
        
        $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $response_data = json_decode($verify_response);

        if ($response_data->success) {
            // reCAPTCHA validation successful

            // SINCE NASA LOOB NITONG RESPONSE_DATA 'YUNG MGA DATA FROM THE FORM, MAPROCESS NIYA LANG ANG FORM IF SUCCESSFUL 'YUNG RECAPTCHA VERIFICATION 

            //DATA GALING SA CONTACT FORM, ALSO SANITIZE NA RIN 'YUNG INPUTS
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            $_SESSION['success'] = "Form submitted successfully!"; //SESSION NG SUCCESSFUL MESSAGE
            header("Location: index.php");
            exit();
                
        } else {
            $_SESSION['error'] = "reCAPTCHA verification failed. Please try again."; //SESSION NG ERROR MESSAGE IF HINDI PININDOT NI USER 'YUNG CHECKBOX AND IF NOT WORKING 'YUNG RECAPTCHA
            header("Location: contactform.php");
            exit();
        }
    } else {
        // If not a POST request, redirect to the form page
        header("Location: contactform.php");
        exit();
    }
?>
