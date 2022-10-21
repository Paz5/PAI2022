<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    </head>
    <style>
        table, th, td {
            border:1px solid black;
        }
        tr:nth-child(even) {
            background-color: yellow;
        }
    </style>
    <body>
        <?php
            for($i = 0; $i < 10; $i++) {
                echo "<p>Paragraf #$i</p>";
            }
        ?>

        <table>
            <?php for($i = 0; $i < 10; $i++): ?>
                <tr><td>Paragraf #<?=$i ?></td></tr>
            <?php endfor; ?>
        </table>
    </body>
</html>