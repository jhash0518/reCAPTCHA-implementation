<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Company | Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="styles.css">

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <div class="container d-flex justify-content-center mt-5">
            <div class="alert alert-primary">
                <h5 class="text-center fw-bold">CONTACT US</h5>
                 <!--CONTACT FORM, SA CONTACT.PHP ANG NAGHAHANDLE NG RECAPTCHA ALSO NG INPUTS SA FORM-->
                <form action="contact.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <div class="d-flex align-items-center bg-white rounded">
                        <input type="text" id="name" name="name" class="form-control bg-transparent border-0" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <div class="d-flex align-items-center bg-white rounded">
                        <input type="email" id="email" name="email" class="form-control bg-transparent border-0" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <div class="d-flex align-items-center bg-white rounded">
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                    </div>

                    <!-- HERE NA 'YUNG RECAPTCHA AND I CHANGE NA RIN 'YUNG SITE KEY FROM GOOGLE-->
                    <div class="g-recaptcha" data-sitekey="6LfClkwqAAAAABPf6g23HZqP93bpkhL0iKZLkZnq"></div>

                    <div class="d-flex justify-content-center mt-2">
                        <input type="submit" value="Send Message" class="btn btn-primary rounded w-50">
                    </div>
                </form>
                
                <div class="d-flex justify-content-center m-3">
                        <a href="index.php" class="text-secondary">Return to Website</a>
                    </div> 
            </div>
        </div>
        

        <!-- BOOTSTRAP SCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <?php
        session_start();

        //NAGHAHANDLE NG ERROR MESSAGE GAMIT SWEETALERT2 PARA CUTE
        if (isset($_SESSION['error'])) {
            echo "<script>
                    Swal.fire({
                        text: '" . $_SESSION['error'] . "',
                        confirmButtonText: 'Try Again',
                        customClass: {
                        confirmButton: 'alertbtn'
                        }
                    });
                </script>";
            unset($_SESSION['error']);
        }
        ?>
    </body>
</html>