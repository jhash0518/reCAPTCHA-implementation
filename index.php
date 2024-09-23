<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Company Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="styles.css">

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <div class="container mt-5">
            <h2 class="text-center">Welcome to Company Website!</h2>
            <div class="d-flex justify-content-center p-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="d-flex justify-content-center">
                <a href="contactform.php" class="btn btn-primary p-3 m-2 w-50">Contact Us</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="loginform.php" class="btn btn-primary p-3 m-2 w-50">Login</a>
            </div>
        </div>
        

        <!-- BOOTSTRAP SCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <?php
        session_start();

        //NAGHAHANDLE NG ERROR MESSAGE GAMIT SWEETALERT2 PARA CUTE
        if (isset($_SESSION['success'])) {
            echo "<script>
                    Swal.fire({
                        text: '" . $_SESSION['success'] . "',
                        customClass: {
                        confirmButton: 'alertbtn'
                        }
                    });
                </script>";
            unset($_SESSION['success']);
        }
        ?>

    </body>
</html>