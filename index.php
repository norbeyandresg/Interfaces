<html>
    <body>
        <?php
        $R = $G = $B = 0;
        $HEX = "";
        $hexs = array('0' => '0',
                      '1' => '1',
                      '2' => '2',
                      '3' => '3',
                      '4' => '4',
                      '5' => '5',
                      '6' => '6',
                      '7' => '7',
                      '8' => '8',
                      '9' => '9',
                      '10' => 'A',
                      '11' => 'B',
                      '12' => 'C',
                      '13' => 'D',
                      '14' => 'E',
                      '15' => 'F');
                      
                      
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $R = $_POST["R"];
            $G = $_POST["G"];
            $B = $_POST["B"];
            
            $HEX = "Hexadecimal: ".$hexs[(string)(floor($R / 16))].$hexs[(string)$R % 16].$hexs[(string)(floor($G / 16))].$hexs[(string)$G % 16].$hexs[(string)(floor($B / 16))].$hexs[(string)$B % 16];
        }
        
        
        echo "---------- RGB to Hex converter --------- <br /><br />";
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="margin-left: 70px;">
            R: <input type="number" name="R" min="0" max="255" value="<?php echo $R; ?>"><br />
            G: <input type="number" name="G" min="0" max="255" value="<?php echo $G; ?>"><br />
            B: <input type="number" name="B" min="0" max="255" value="<?php echo $B; ?>"><br />
            <br />
            <input type="submit" name="submit" value="Calculate"><br />
        </form>
        <?php 
            echo "------------------------------------------------<br />"; 
            echo $HEX;
        ?>
    </body>
</html>