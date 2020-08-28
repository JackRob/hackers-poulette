
<?php
    require 'DELET.php';
    //PHPMAILER
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
   
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    //FORM
    $lName = filter_var($_POST['l-name'], FILTER_SANITIZE_STRING);
    $fName = filter_var($_POST['f-name'], FILTER_SANITIZE_STRING);
    $gender = $_POST['gender'];
    $email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
    $subject= $_POST['subject'];
    $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if(isset($_POST['submit']) and empty($_POST['ytiruces'])){
        if(isset($lName, $fName, $gender, $email, $country, $msg)){
            if(false === filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errorE = "Invalid E-mail! See example : example@mail.com";
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
                    $mail->setFrom($myMail, "$lName $fName");
                    $mail->addAddress($email);     // Add a recipient
    
                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "Communication about $subject";
                    $mail->Body    = "Dear $lName, I send you this E-mail to confirme your message about <b>$subject</b> $msg ";
    
                    $mail->send();
                        $sendOk = 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
        }  else if ($_POST['submit']){
            if($lName == ""){
                $errorL = "<p class='w-auto m-2 lg:text-xs sm:text-3xl bg-red-200 text-orange-700 rounded border-2 border-red-700 '>Your lastname is empty</p>";
            }
            if($fName == ""){
                $errorF =  "<p class=' m-2 lg:text-xs sm:text-3xl bg-red-200 text-orange-700 rounded border-2 border-red-700'>Your firstname is empty</p>";
            }
            if($gender == ""){
                $errorG = "<p class=' m-2 lg:text-xs sm:text-3xl bg-red-200 text-orange-700 rounded border-2 border-red-700'>Your gender is empty</p>";
            }
            if($country == ""){
                $errorC = "<p class=' m-2 lg:text-xs sm:text-3xl bg-red-200 text-orange-700 rounded border-2 border-red-700'>Your country is empty</p>";
            }
            if($msg == ""){
                $errorM = "<p class=' m-2 lg:text-xs sm:text-3xl bg-red-200 text-orange-700 rounded border-2 border-red-700'>You want to saend an Empty message ?</p>";
            }
            if($email == ""){
                $errorE = "<p class=' m-2 lg:text-xs sm:text-3xl bg-red-200 text-orange-700 rounded border-2 border-red-700'>Your e-mail is empty</p>";
            }
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Wonderfull forms, Hackers Poulette, best creator of forms with PHP ! Take a KFC and fill in the forms !"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TailWind Css-->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href='./assets/css/style.css' rel="stylesheet">
    <title alt="Hackers Poulette - The favorite formulaire of KFC ! ">Hackers Poulette - The favorite formulaire of KFC ! </title>
</head>
<body class="bg-gray-300 sm:text-5xl lg:text-2xl">
    <div class="container sm:m-auto ">
        <header class="flex justify-center">
                <img src="assets/img/hackers-poulette-logo.png" alt="Logo Hackers Poulette">
        </header>
        <?php echo "<p class='text-center w-1/2 m-auto block bg-green-400'>$sendOk</p>" ?>
        <section class="m-auto relative  lg:w-2/5">
            <div class="form__all text-center p-10 m-auto px-10 flex flex-col  rounded-lg text-white">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <!-- Lastname and Firstname -->
                    <div class="lg:flex flex-row justify-between">
                    <label for="l-name" alt="Lastname" class="flex flex-col lg:w-48 font-bold" name="Lastname">Lastname
                        <input type="text" name="l-name" placeholder="Doe" alt="insert lastname" class="placeholder-teal-600 px-2" maxlength="20"/>
                        <?php echo "<br />" .$errorL;?>
                    </label>
                    <label for="f-name" alt="Firstname" class="flex flex-col lg:w-48 font-bold" name="Firstname">firstname
                    <input type="text" name="f-name" placeholder="John" alt="insert firstname" class="placeholder-teal-600 px-2" maxlength="15"/>
                    <?php echo "<br />" .$errorF;?>
                    </label>
                    </div>
                    <!-- Gender -->
                    <label for="gender" alt="Gender" class="block text-center lg:mt-4 font-bold" name="gender">Gender</label>
                         <section class="text-center m-0">
                            <label for=gender>M</label>
                            <input type="radio" name="gender" value="m" alt="Masculin" class="align-middle"/>
                            <label for="gender" class="ml-4">F</label>
                            <input type="radio" name="gender" value="f" alt="Feminin" class="align-middle"/>
                            <label for="gender" class="ml-4">O</label>
                            <input type="radio" name="gender" value="o" alt="Other" class="align-middle"/>
                            <?php echo $errorG;?>
                        </section>
                    <!-- E-mail -->
                    <label for="mail" alt="E-mail" class="flex flex-col lg:my-4 font-bold" name="Email">E-mail
                        <input type="text" name="mail" alt="insert mail" placeholder="johnDoe@supermail.com" class="placeholder-teal-600 px-2" maxlength="35"/>
                        <?php echo "<br />" .$errorE;?>
                    </label>
                    <!-- Country-->
                    <label for="country" class="flex flex-col font-bold" name="Country">Country
                        <input type="text" name="country" alt="Insert country" placeholder="Namur" class="placeholder-teal-600 px-2" maxlength="30"/>
                        <?php echo "<br />" .$errorC;?>
                    </label>
                    <!-- ytiruces pot de miel-->
                    <input type="text" name="ytiruces" class="hidden"/>
                    <!-- Subject-->
                    <label for="subject" class="block lg:mt-4 font-bold" name="Subject">Subject</label>
                        <select name="subject" alt="Choose Subject" class="rounded text-black">
                            <option value="" selected disabled hidden>Other</option>
                            <option value="recrutement">Recrutement</option>
                            <option value="reclamation" alt="order info">Info about my order</option>
                            <option value="other" alt="refund">Refund</option>
                        </select>
                <!-- Message -->
                <label for="message" alt="message" class=" block lg:mt-4 font-bold" name="Message">Message</label>
                <?php echo $errorM;?>
                <textarea rows="6" cols="20" name="message" class="rounded placeholder-teal-600 w-full m-auto px-2" placeholder="Your text here..." maxlength="300"></textarea>
            </div>
                <input type="submit" id="submit" name="submit" value="Send" alt="Submit" class="btn text-white px-16 py-3 m-4 font-medium hover:bg-teal-500 absolute right-0">
            </form>
        </section>
        <footer class="foot w-1/2 text-center  text-white m-auto text-xs mt-24 rounded">
        <p>"Copyright (c) 2011-2013 Kemie Guaida (http://www.monolinea.com| fonts@pixilate.com>),with Reserved Font Name Bellota."</p>
        <p>"Copyright (c) 2011 Gesine Todt (www.gesine-todt.de), with Reserved Font Name “Snippet”."</p>
    </footer>
</div>
</body>
</html>