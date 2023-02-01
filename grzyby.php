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
            $baza = mysqli_connect("localhost", "root", "", "3pir_dane2");

            $kwerenda = "SELECT nazwa_pliku, potoczna FROM grzyby;";

                mysqli_querry($baza, $kwerenda);

                while($grzybek = mysqli_querry($baza, $kwerenda)){
                    echo "<img src = ./pliki5.$grzybek[0] name=$grzybek[1]>";
                }

                mysqli_close($baza);
            ?>
        </div>
        <div id="prawy">
            <h2>Grzyby jadalne</h2>
            <?php ?>
            <h2>Polecamy do sosów</h2>
            <?php ?>
        </div>

        <footer><p>Autor: Trojan Bogacki 3pir</p></footer>

</body>
</html>