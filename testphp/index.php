<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>About Me</title>
</head>
<body style="text-align: center; background-color: #fdf2e6; color: #333; font-family: Arial, sans-serif;">

    <h1 style="color: #7d4dbb;">ABOUT ME! ...</h1>

 
    <img src="catsad.png" alt="sad cat" width="200" style="border-radius: 10px; margin: 20px;">


    <?php

        $fullname = "นางสาว ฟ้าใส ทองภักดี";
        $nickname = "ฟ้า";
        $dob = "21 กุมภาพันธ์ 2548";
        $age = "19 ปี";
        $education = "กำลังศึกษาปริญญาตรี มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ";


        echo "<p><strong>ชื่อ-นามสกุล:</strong> $fullname</p>";
        echo "<p><strong>ชื่อเล่น:</strong> $nickname</p>";
        echo "<p><strong>วัน/เดือน/ปี เกิด:</strong> $dob</p>";
        echo "<p><strong>อายุ:</strong> $age</p>";
        echo "<p><strong>สถานศึกษา:</strong> $education</p>";
    ?>

</body>
</html>
