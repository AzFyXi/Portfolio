<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="icon" href="img/tassse.png">
    <link rel="stylesheet" href="style.css">
    <title>Freelance | Guilhem Valentin</title>
</head>
<body>
    <div class="container">
        <nav>
            <img src="img/tassse.png" class="logo"><h1>Guilhem Valentin</h1>
            <ul>
                <li><a href="index.html">PROJECTS</a></li>
                <li><a href="about.php">ABOUT</a></li>
            </ul>
            <img src="img/github.png" class="icon">
            <img src="img/discord.png" class="icon">
            <img src="img/linkedin.png" class="icon">
        </nav>         
    </div>

<!--   script   -->
<h1 id="hello">
    <script >
        var prénom = prompt("Quel est votre prénom ?");
        while(prénom == null){
            prénom = prompt("Quel est votre prénom ?");
        }
        if(prénom == ""){
            prénom = "inconnue";
        }
            document.write("Bienvenue "+prénom);
        
        
        
        
    </script>
</h1>


<!--   CONTACT   -->


    <canvas id='bulle'></canvas>
    <div class="contact-section">
        <div class="inner-width">
        <h1>Me Contacter</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <input class="name" placeholder="Nom" type="text" name="name">
                <p><?php if(isset($name_error)) echo $name_error; ?></p>
                <input class="email" placeholder="Email" type="text" name="email">
                <p><?php if(isset($email_error)) echo $email_error; ?></p>
                <textarea class="message" placeholder="Message" name="message"></textarea>
                <p><?php if(isset($message_error)) echo $message_error; ?></p>
            <input class="button" type="submit" name="submit" value="Envoyer">
            <?php 
                if(isset($_POST['submit']) && !isset($name_error) && !isset($email_error) && !isset($message_error)){
                $to = 'support@tasoiree.com';
                $body = " Name: $name\n E-mail: $email\n Message:\n $message";
                if(mail($to, $subject, $body)){
                    echo '<p style="color: green">Message envoyé</p>';
                }else{
                    echo '<p>Une erreur s\'est produite, veuillez réessayer plus tard</p>';
                }
                }
            ?>
            </form>
        </div>
    </div>

<script src="script.js"></script>

</body>
</html>