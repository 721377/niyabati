<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>
<body>
<div class="container">
    <div class="img">
        <img src="logo-maroc.jpg" alt="">
    </div>

    
    <form action="verifier.php" method="post">
        <h2>niyabati</h2>
        <div class="email">
            <i class="bi bi-person"></i>
            <input class="email-inp" type="email" name="email" id="" placeholder="username">
            <label for="">entrer votre email</label>
        </div>
        <div class="pass">
            <i class="bi bi-lock"></i>
            <input type="password" name="pass" id="" placeholder="mot de passe">
            <label for="">entrer votre mot de passe</label>
        </div>

        <div class="submit">
            <input type="submit" value="connecter">
        </div>

            <div class="forget">
                
                <a href=""> mot de passe oublier ?</a>
            </div>

    </form>
</div>
</body>
</html>