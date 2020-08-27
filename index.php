<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3a60bb9203d81fd087506eef8b60775ab45a59e2
<?php
    require 'DELET.php';
    //PHPMAILER
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
   
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    //FORM
    $error = "";
    $lName = filter_var($_POST['l-name'], FILTER_SANITIZE_STRING);
    $fName = filter_var($_POST['f-name'], FILTER_SANITIZE_STRING);
    $gender = $_POST['gender'];
    $email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
    $subject= $_POST['subject'];
    $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if(isset($lName, $fName, $gender, $email, $country, $msg)){
        if(false === filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "Invalid! ";
        } else {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                                // Enable verbose debug output
                $mail->isSMTP();                                                                                                    // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                                                            // Set the SMTP server to send through
                $mail->Username   = $myMail;                                                         // SMTP username
                $mail->SMTPAuth   = true;                                                                                   // Enable SMTP authentication
                $mail->Password   = $pass;                                                                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                   // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;  //587 outlook                                                                                             // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('jacquemart.rob@gmail.com', 'Mr Robot');
                $mail->addAddress("jacquemart.rob@gmail.com");     // Add a recipient
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    } 
?>
<<<<<<< HEAD
>>>>>>> 8362b29... Correction Mail/MDP
=======
>>>>>>> 3a60bb9203d81fd087506eef8b60775ab45a59e2
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Wonderfull forms, Hackers Poulette, best creator of forms with PHP ! Take a KFC and fill in the forms !"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='assets/css/style.css' rel="stylesheet">
    <!-- TailWind Css-->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title alt="Hackers Poulette - The favorite formulaire of KFC ! ">Hackers Poulette - The favorite formulaire of KFC ! </title>
</head>
<body class="bg-gray-300 sm:text-5xl lg:text-2xl">
    <div class="container sm:m-auto ">
        <header class="flex justify-center">
                <img src="assets/img/hackers-poulette-logo.png" alt="Logo Hackers Poulette">
        </header>
        <section class="m-auto relative  lg:w-2/5">
            <div class="form__all text-center p-10 m-auto px-10 flex flex-col  rounded-lg text-white">
                <form action="" method="POST">
                    <!-- Lastname and Firstname -->
                    <div class="lg:flex flex-row justify-between">
                    <label for="l-name" alt="Lastname" class="flex flex-col lg:w-48 ">Lastname
                        <input type="text" name="l-name" placeholder="Doe" alt="insert lastname" class="placeholder-teal-600">
                        <?php echo "<br />" .$error;?>
                    </label>
                    <label for="f-name" alt="Firstname" class="flex flex-col lg:w-48">firstname
                    <input type="text" name="f-name" placeholder="John" alt="insert firstname" class="placeholder-teal-600">
                    </label>
                    </div>
                    <!-- Gender -->
                    <label for="gender" alt="Gender" class="block text-center lg:mt-4">Gender</label>
                         <section class="text-center m-0">
                            <label for=gender>M</label>
                            <input type="radio" name="gender" value="m" alt="Masculin" class="align-middle">
                            <label for="gender" class="ml-4">F</label>
                            <input type="radio" name="gender" value="f" alt="Feminin" class="align-middle">
                            <label for="gender" class="ml-4">O</label>
                            <input type="radio" name="gender" value="o" alt="Other" class="align-middle">
                        </section>
                    <!-- E-mail -->
                    <label for="mail" alt="E-mail" class="flex flex-col lg:my-4">E-mail
                        <input type="text" name="mail" alt="insert mail" placeholder="johnDoe@supermail.com" class="placeholder-teal-600">
                        <?php echo "<br />" .$error;?>
                    </label>
                    <!-- Country-->
                    <label for="country" class="flex flex-col">Country
                        <input type="text" name="country" alt="Insert country" placeholder="Namur" class="placeholder-teal-600">
                    </label>
                    <!-- Subject-->
                    <label for="subject" class="block lg:mt-4">Subject</label>
                        <select name="subject" alt="Choose Subject" class="rounded text-black">
                            <option value="" selected disabled hidden>Other</option>
                            <option value="recrutement">Recrutement</option>
                            <option value="reclamation" alt="order info">Info about my order</option>
                            <option value="other" alt="refund">Refund</option>
                        </select>
                <!-- Message -->
                <label for="message" alt="message" class="lg:mt-4">Message</label>
                <textarea rows="6" cols="20" name="message" class="rounded placeholder-teal-600 w-full m-auto" placeholder="Your text here..."></textarea>
            </div>
                <input type="submit" name="submit" value="Send" alt="Submit" class="btn text-white px-16 py-3 m-4 font-medium hover:bg-teal-500 absolute right-0">
            </form>
        </section>
    </div>
</body>
</html>