<!DOCTYPE html>
<html>
<head>
    <title>FirstnameNickname.php</title>
</head>
<body>
<center>
    <?php

    if (isset($_POST['submit'])) {
   
        $filename = $_POST['filename']; 

 
        if (file_exists($filename)) {
            $text = file($filename);

 
            foreach ($text as $tr_data) {
                $col = 1; 
                $array_word = explode(",", $tr_data);

        
                foreach ($array_word as $value) {
                    $value = trim($value); // ตัด spacebar ทิ้
                    if ($col == 1) {
                        echo $value; 
                    } else {
                        // แปลงชื่อให้เป็นชื่อเล่นตามที่กำหนด
                        if ($value == "fahsai") {
                            echo " Suay"; 
                        } elseif ($value == "ploy") {
                            echo " Mickey"; 
                        } elseif ($value == "Tuly") {
                            echo " Somchai"; 
                        } else {
                            echo " " . $value; // แสดงชื่อปกติ
                        }
                    }
                    $col++;
                }
                echo "<br>"; // ขึ้นบรรทัดใหม่
            }
        } else {
            echo "<p style='color:red;'>File not found. Please check the file name.</p>";
        }
    } else {
    ?>
        <h2>FirstnameNickname.php</h2>
        <form method="POST" action=""> <!-- ส่งฟอร์มไปยังตัวเอง -->
            <input type="text" name="filename" placeholder="Enter a file name">
            <br><br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
    <?php
    }
    ?>
</center>
</body>
</html>
