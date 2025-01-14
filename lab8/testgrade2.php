<html>

<head>
    <title>Grade</title>
</head>

<body>
    <h2>Grade</h2>
    <form method="POST" action="">
        <input type="text" name="filename" placeholder="Enter file name (e.g., score.txt)" value="<?php echo isset($_POST['filename']) ? htmlspecialchars($_POST['filename']) : ''; ?>" required><br><br>
        <input type="submit" name="submit" value="SUBMIT">
        <input type="reset" name="reset" value="RESET">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $filename = $_POST['filename'];

        if (file_exists($filename)) {
            $fileContent = file($filename);

            if ($fileContent) {
                echo "<br><table border='0' cellpadding='10'>";
                echo "ผลลัพธ์จากการคำนวณเกรด<br><br>";
                echo "<tr>
                        <th>นักศึกษา</th>
                        <th>ทดสอบย่อย</th>
                        <th>สอบกลางภาค</th>
                        <th>สอบปลายภาค</th>
                        <th>คะเเนนรวม 100</th>
                        <th>เกรด</th>
                      </tr>";

                foreach ($fileContent as $line) {
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

                    echo "<tr>
                            <td>$student</td>
                            <td>$test</td>
                            <td>$mid</td>
                            <td>$final</td>
                            <td>$total</td>
                            <td>$grade</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<br><b>No data found in the file.</b>";
            }
        } else {
            echo "<br><b>File does not exist. Please check the file name and try again.</b>";
        }
    }
    ?>
</body>

</html>
