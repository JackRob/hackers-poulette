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
    <div class="container m-auto">
        <header class="flex justify-center">
                <img src="assets/img/hackers-poulette-logo.png" alt="Logo Hackers Poulette">
        </header>
        <section>
            <div class="form__all p-10 px-8 flex flex-col rounded-lg text-center text-white">
                <form action="" method="POST">
                    <!-- Lastname and Firstname -->
                    <label for="l-name" alt="Lastname" class="lg:flex">Lastname
                        <input type="text" name="l-name" value="Doe" alt="insert lastname">
                    </label>
                    <label for="f-name" alt="Firstname" class="lg:flex">firstname
                    <input type="text" name="f-name" value="John" alt="insert firstname">
                    </label>
                    <!-- Gender -->
                    <label for="gender" alt="Gender" class="block">Gender
                        <input type="radio" name="gender" value="m" alt="Masculin" class="mx-4">
                        <input type="radio" name="gender" value="f" alt="Feminin">
                        <input type="radio" name="gender" value="o" alt="Other" class="mx-4">
                    </label>
                    <!-- E-mail -->
                    <label for="mail" alt="E-mail">E-mail
                        <input type="text" name="mail" alt="insert mail">
                    </label>
                    <!-- Country-->
                    <label for="country">Country
                        <input type="email" name="country" alt="Insert country">
                    </label>
                    <!-- Subject-->
                   
                    <label for="subject" class="block">Subject</label>
                        <select name="subject" alt="Choose Subject">
                            <option value="recrutement">Recrutement</option>
                            <option value="reclamation" alt="order info">Info about my order</option>
                            <option value="other" alt="refund">Refund</option>
                        </select>
                    
                </form>

                <!-- Message -->
                <label for="message" alt="message">Message</label>
                <textarea rows="6" cols="20" name="message"></textarea>
            </div>
                <input type="submit" name="submit" value="Send" alt="Submit">
        </section>
    </div>
</body>
</html>