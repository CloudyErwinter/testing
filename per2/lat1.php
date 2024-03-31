<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
    <style>
        .warna-baris {
            background-color: blueviolet;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for( $i = 1; $i <= 5; $i++ ) {
                echo "<tr>";
                for( $g = 1; $g <= 5; $g++ ) {
                    echo "<td>$i,$g</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>