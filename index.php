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
                    <div class="lg:flex flex-row justify-around">
                    <label for="l-name" alt="Lastname" class="flex flex-col lg:w-48 justify-between">Lastname
                        <input type="text" name="l-name" placeholder="Doe" alt="insert lastname" class="placeholder-teal-600">
                    </label>
                    <label for="f-name" alt="Firstname" class="flex flex-col lg:w-48 justify-between">firstname
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
                    <label for="mail" alt="E-mail" class="flex flex-col lg:m-4">E-mail
                        <input type="text" name="mail" alt="insert mail" placeholder="johnDoe@supermail.com" class="placeholder-teal-600">
                    </label>
                    <!-- Country-->
                    <label for="country" class="flex flex-col">Country
                        <input type="email" name="country" alt="Insert country" placeholder="Namur" class="placeholder-teal-600">
                    </label>
                    <!-- Subject-->
                    <label for="subject" class="block lg:mt-4">Subject</label>
                        <select name="subject" alt="Choose Subject" class="rounded">
                            <option value="" selected disabled hidden>Choose here</option>
                            <option value="recrutement">Recrutement</option>
                            <option value="reclamation" alt="order info">Info about my order</option>
                            <option value="other" alt="refund">Refund</option>
                        </select>
                </form>
                <!-- Message -->
                <label for="message" alt="message" class="lg:mt-4">Message</label>
                <textarea rows="6" cols="20" name="message" class="rounded placeholder-teal-600 w-full m-auto" placeholder="Your text here..."></textarea>
            </div>
                <input type="submit" name="submit" value="Send" alt="Submit" class="btn text-white px-16 py-3 m-4 font-medium hover:bg-teal-500 absolute right-0">
        </section>
    </div>
</body>
</html>