<?php
// pengulangan pada array
// for / foreach
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightskyblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 500ms;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
            background-color: lightcoral;
        }
        .clear { clear: both;}
    </style>
</head>
<body>
<?php $angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
    ];
?>
<?php foreach( $angka as $a ) :?>
    <?php foreach( $a as $b ) :?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>