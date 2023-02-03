<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>

        <div id="miniatury">
            <img src="./pliki5/borowik-miniatura.jpg" alt="<a href='./pliki5/borowik.jpg'>Grzybobranie</a>">
        </div>
        <div id="tytulowy">
            <h1>Idziemy na grzyby!</h1>
        </div>

        <div id="lewy">
           <?php
           $db = mysqli_connect('localhost', 'root', '', '3pir_dane2');
            $kwerenda = "SELECT nazwa_pliku, potoczna FROM grzyby WHERE jadalny=true;";
            $wynik = mysqli_query($db, $kwerenda);

            while($kw = mysqli_fetch_row($wynik)){
                echo "<img src=./pliki5/$kw[0] title=$kw[1]>";
            }
            mysqli_close($db);
           ?>
        </div>
        <div id="prawy">
            <h2>Grzyby jadalne</h2>
            <?php
            $db = mysqli_connect('localhost', 'root', '', '3pir_dane2');
            $kwerenda = " SELECT nazwa, potoczna FROM grzyby WHERE jadalny=true;";
            $wynik = mysqli_query($db, $kwerenda);

            while($kw = mysqli_fetch_row($wynik)){
                echo "<p>$kw[0] ($kw[1])</p>";
            }
            mysqli_close($db);?>
            <h2>Polecamy do sosów</h2>
            <?php

            $db = mysqli_connect('localhost', 'root', '', '3pir_dane2');
            $kwerenda = " SELECT grzyby.nazwa, grzyby.potoczna, rodzina.nazwa FROM grzyby INNER JOIN rodzina ON grzyby.rodzina_id = rodzina.id WHERE jadalny=1;";
            $wynik = mysqli_query($db, $kwerenda);

            echo "<ol>";
            while ($kw = mysqli_fetch_row($wynik)) {
                echo "<li>$kw[0]($kw[1]), rodzina: $kw[2]</li>";

            }
            echo "</ol>";
            ?>
        </div>

        <footer><p>Autor: Trojan Bogacki 3pir</p></footer>

</body>
</html>