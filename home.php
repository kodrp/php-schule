<DOCTYPE html>
<html>    
<head>
        <meta charset="UTF-8">
        <title>Homepage</title>
        <link rel="stylesheet" href="main.css">
</head>
<body class="homepage">
    <h1 class="fancy-huge">Movie Picker</h1>
    <div class="movie-pick">
    <form method="POST">
        <button type="submit"> PICK </button>
    </form>
    <?php 
    $movies = [
        "The Shining",
        "The Conjuring 2",
        "The Nun",
        "Eli",
        "The Conjuring",
        "The Conjuring 3",
        "Childs Play",
        "Childs Play 2",
        "Childs Play 3",
        "Cult of Chucky",
        "Curse of Chucky",
        "Bride of Chucky",
        "Seed of Chucky",
        "Nightmare on Elm street",
        "Terrifier",
        "Terrifier 2",
        "Terrifier 3",
        "The Nun 2"
    ];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $randomMovie = $movies[array_rand($movies)];
        echo "<p class='fancy-huge'>Your random movie is: <strong>$randomMovie</strong></p>";
    }
    ?>
    </div>
</body>
</html>