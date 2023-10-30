<html>
    <body>
        <?php 
            $size = $_POST["size"];
            echo '<table border="1">' . "\n";
            echo '<tbody>' . "\n";
            for ($i = 0; $i <= $size; $i++)
            {
                echo '<tr>' . "\n";
                for ($j = 0; $j <= $size; $j++) 
                {
                    $val = $i * $j;
                    echo '<td>' . "\n";
                    echo "$val";
                    echo '</td>' . "\n";
                }
                echo '</tr>' . "\n";
            }
            echo '</tbody>' . "\n";
            echo '</table>' . "\n";
        ?>
    </body>
</html>