<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="css/styl_1.css">
</head>
<body>
    <div class="banner">
        <h1>Portal dla wędkarzyt</h1>
    </div>
    <div class="main">
        <div class="left">
            <div class="first">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                
                    <?php include 'php/first.php'; ?>
                </ol>
            </div>
            <div class="second">
                <h2>Ryby drapieżne naszych wód</h2>
                <table>
                    <tr>
                        <th>L.P.</th>
                        <th>gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                    <?php include 'php/second.php'?>
                </table>
            </div>
        </div>
        <div class="right">
            <img src="img/ryba1.jpg" alt="Sum"> 
            <br>
            <a href="kwerendy.txt" download>Pobierz Kwerende</a>
        </div>
    </div>
    <div class="footer">
        <p>Stronę wykonał: xyz</p>
    </div>
</body>
</html>