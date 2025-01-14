<html>

<head>
    <title>Grade</title>
</head>

<body>
    <center>
    <?php
    
    $fileContent = file("score.txt");
    
    if($fileContent){
        echo "<table border='0'>";
        echo "ผลลัพธ์จากการคำนวณเกรด<br><br>";
        echo "<tr>
                <th>นักศึกษา</th>
                <th>ทดสอบหย่อย</th>
                <th>สอบกลางภาค</th>
                <th>สอบปลายภาค</th>
                <th>รวม 100 คะแนน</th>
                <th>เกรด</th>
            </tr>";

        foreach($fileContent as $line){
            $line = trim($line);

            $value = explode(",", $line);
            $student = $value[0];
            $test = (int)$value[1];
            $mid = (int)$value[2];
            $final = (int)$value[3];

            $total = $test + $mid + $final;

            if ($total >= 80) $grade = "A";
            elseif ($total >= 70) $grade = "B";
            elseif ($total >= 60) $grade = "C";
            elseif ($total >= 50) $grade = "D";
            else $grade = "F";

            
            echo "<tr>";
            echo "<td>$student</td>";
            echo "<td>$test</td>";
            echo "<td>$mid</td>";
            echo "<td>$final</td>";
            echo "<td>$total</td>";
            echo "<td>$grade</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

    </center>
</body>

</html>
