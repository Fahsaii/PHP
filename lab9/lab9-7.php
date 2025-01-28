<html>
<head><title>แสดงการสร้างและเข้าถึง Numeric Array แบบหลายมิติ</title></head>
<body>
<?php
    $maxRow = 20; 
    $maxCol = 4; 
    $score = array();

    $limits = array(  
        0 => 10,  
        1 => 20,   
        2 => 35,   
        3 => 35    
    );

    
    for ( $r = 0; $r < $maxRow; $r++ ) {
        for ( $c = 0; $c < $maxCol; $c++ ) {
            $score[$r][$c] = rand( 0, $limits[$c] ); 
        }
    }

    echo "<table border='1' align='center' width='100%'>";
    echo "<tr><td width='80' align='center'>Student Number</td>";
    echo "<td width='80' align='center'>Homework</td>";
    echo "<td width='80' align='center'>Assignment</td>";
    echo "<td width='80' align='center'>Midterm</td>";
    echo "<td width='80' align='center'>Final</td></tr>";


    for ( $r = 0; $r < $maxRow; $r++ ) {
        echo "<tr>";
        echo "<td align='center'>".($r+1)."</td>"; 
        for ( $c = 0; $c < $maxCol; $c++ ) {
            echo "<td align='center'>" . $score[$r][$c] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>
