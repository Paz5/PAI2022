<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    </head>
    <body>
        <?php
            $jezyki = [
                'Język 1' => 'PHP', 'Język 2' => 'C', 'Język 3' => 'C++', 
                'Język 4' => 'Java', 'Język 5' => 'C#', 'Język 6' => 'Ruby', 
                'Język 7' => 'Python'
            ];
            $kolory = [
                'Kolor 1' => '#DAF7A6', 'Kolor 2' => '#FFC300', 'Kolor 3' => '#FF5733',
            ];
            
            foreach($jezyki as $klucz => $wartosc) {
                echo "<p>$klucz: <strong>$wartosc</strong>";
            }
        ?>
        
        <?php foreach($kolory as $klucz => $kolor): ?>
        <ul style="color:<?=$kolor ?>">
            <li><?=$klucz ?>:<strong><?=$kolor ?></strong></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>