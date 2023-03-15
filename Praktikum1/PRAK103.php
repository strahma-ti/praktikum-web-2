<!-- HTML -->
<!DOCTYPE html>
<html>
    <head>      
        <title>PRAKTIKUM 1 NO 3</title>
    </head>
    <body>
        <!-- PHP -->
        <?php
            // deklarasi variabel dan rumus

            // celcius = 37.841
            $Celcius= 37.841;
            
            // rumus celcius ke fahrenheit
            $Fahrenheit=($Celcius * (9/5)) + 32; 
            
            // rumus celcius ke reamur
            $Reamur=($Celcius * (4/5)); 
            
            // rumus celcius ke kelvin
            $Kelvin=($Celcius + 273.15); 

            // mencetak output
            echo "Fahrenheit (F) = ".number_format($Fahrenheit,4)."<br>";    
            echo "Reamur (R) = ".number_format($Reamur,4)."<br>";    
            echo "Kelvin (K) = ".number_format($Kelvin,4)."<br>";
        ?>
    </body>
    </html>