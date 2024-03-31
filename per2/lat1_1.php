    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lat1.1</title>
        <style>
        .warna-baris {
            background-color: blueviolet;
        }
    </style>
    </head>
    <body>
    <table border="1" cellpadding="10" cellspacing="0">
            <?php for( $g = 1; $g <= 4; $g++ ) :?>
                <?php if ( $g % 2 == 0 ) :?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif;?>
                    <?php for( $h = 1; $h <= 5; $h++ ) : ?>
                        <td><?= "$g, $h"; ?></td>
                    <?php endfor;?>
                </tr>
            <?php endfor;?>
        </table>
    </body>
    </html>