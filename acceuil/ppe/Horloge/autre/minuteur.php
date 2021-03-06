<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\min.css">
    <title>Document</title>
</head>
<body>
    <header class="topbar">
        <a href="../index.php" class="topbar-logo">Horloge</a>
        <nav class="topbar-nav">
            <a href="../index.php">Heure et date</a>
            <a href="../autre/minuteur.php">Minuteur</a>
            <a href="../autre/alarm.php">alarme</a>
        </nav>
    </header>
    
    <div class="container">    
        <p id="hour-label" class="label">Heure</p><p id="min-label" class="label">Minutes</p><p id="sec-label" class="label">Seconds</p>
        <input type="number" max="24" min="00" id="hour" class="time" value="00"><p id="p1" class="semicolom">:</p><input type="number" max="60" min="00" id="minute" class="time" value="00"><p id="p2" class="semicolom"></p>,<input type="number" max="60" min="00" id="sec" class="time" value="00">
        <button id="start" class="btn">Stars</button>
        <button id="reset" class="btn">Reset</button>
    </div>

    <script src="..\styles\min.js"></script>

</body>
</html>