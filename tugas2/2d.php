<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2D</title>
    <style>
        .kotak-1{
            height:110px;
            width:110px;
            background-color:#000;
        }
        .kotak-2{
            height:110px;
            width:110px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for ($line= 1; $line <= 5 ; $line++) {
                echo "<tr>";
                for ($coloumn = 1; $coloumn <= 5 ; $coloumn++) {
                  $box = $line + $coloumn;
                  if ($box % 2 == 0) {
                    echo "<td class='kotak-1'></td>";
                  } else {
                    echo "<td class='kotak-2'></td>";
                  }
                }
                echo "</tr>";
              }
        ?>
    </table>
</body>
</html>