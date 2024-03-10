<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melomaniac Playlist</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #a7b59e;
            color: #333;
        }
        header {
            background-color: #58744b;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
            font-size: 2em;
            color: white;

        }
        .song {
            display: flex;
            align-items: center;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            background-color: #f0f0f0;
        }
        .song img {
            width: 100px;
            height: 100px;
            border-radius: 5px;
            margin-right: 20px;
        }
        .song-info {
            flex: 1;
        }
        .song-title {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }
        .artist {
            margin: 5px 0;
            margin-bottom: 15px;
            color: #666;
        }
        .btn {
            background-color: #58744b;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #799567;
        }
        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Faith & Cristine Playlist</h1>
    </header>
    <div class="container">
        <div class="song">
            <img src="images/enchanted.jpg" alt="Song 1">
            <div class="song-info">
                <h2 class="song-title">Enchanted</h2>
                <p class="artist">Taylor Swift</p>
                <a href="song1.php" class="btn">View Lyrics</a>
            </div>
        </div>
        <div class="song">
            <img src="images/traitor.jpg" alt="Song 1">
            <div class="song-info">
                <h2 class="song-title">Traitor</h2>
                <p class="artist">Olivia Rodgrigo</p>
                <a href="song2.php" class="btn">View Lyrics</a>
            </div>
        </div>
        <div class="song">
            <img src="images/breathless.jpg" alt="Song 1">
            <div class="song-info">
                <h2 class="song-title">Breathless</h2>
                <p class="artist">The Corrs</p>
                <a href="song3.php" class="btn">View Lyrics</a>
            </div>
        </div>
        <div class="song">
            <img src="images/lovestory.jpg" alt="Song 1">
            <div class="song-info">
                <h2 class="song-title">Love Story</h2>
                <p class="artist">Taylor Swift</p>
                <a href="song4.php" class="btn">View Lyrics</a>
            </div>
        </div>
        <div class="song">
            <img src="images/yellow.jpg" alt="Song 1">
            <div class="song-info">
                <h2 class="song-title">Yellow</h2>
                <p class="artist">Coldplay</p>
                <a href="song5.php" class="btn">View Lyrics</a>
            </div>
        </div>
    </div>

</body>
</html>
