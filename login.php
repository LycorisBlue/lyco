<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Lycoris</title>
</head>
<body>
    <!-- à changer -->
    <form action="./utils/signin.php" method="post">
        <label for="">Email</label>
        <input type="email" name="email">
        <br>
        <label for="">mdp</label>
        <input type="password" name="mdp">
        <br>
        <input type="submit" name="submit" value="S'inscrire">
    </form>
    <p>Crée un compte <a href="http://localhost:8888/lyco/register.php">ici</a></p>
</body>
</html>