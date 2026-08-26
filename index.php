<!DOCTYPE html>
<html>
<head>
    <title>php test</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
</head>
<body class="login-page">
    <div class="login-container">
    <h1>Sachen und Zeug</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'deinemutter' && $password === 'penis') {
            header("Location:home.php");
            exit();
        } else {
            echo '<p class="error">wronggggg</p>';
        }
    }
    ?>
    </div>
    </body>
</html>