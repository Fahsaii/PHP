<html>

<head>
    <title>firstnameNickname</title>
</head>

<body>
    <center>
        <?php
        if (isset($_POST['submit'])) {
            $filename = $_POST['filename'];
            if (file_exists($filename)) {
            
            $text = file($filename);
            echo "<table border='0' cellpadding='0' cellspacing='0'>";
            foreach ($text as $tr_data) {
                echo "<tr>"; 
                $col = 1;
                $array_word = explode(",", $tr_data);

                foreach ($array_word as $value) {
                    $value = trim($value);
                    if ($col == 1) {
                        echo "<td width = '150'><br>$value</td>";
                    } else {
                        if ($value == "Robert")
                            echo "<td width = '150'><br>Dick</td>";
                        elseif ($value == "Dick")
                            echo "<td width = '150'><br>Robert</td>";
                        if ($value == "William")
                            echo "<td width = '150'><br>Bill</td>";
                        elseif ($value == "Bill")
                            echo "<td width = '150'><br>William</td>";
                        if ($value == "James")
                            echo "<td width = '150'><br>Jim</td>";
                        elseif ($value == "Jim")
                            echo "<td width = '150'><br>James</td>";
                        if ($value == "John")
                            echo "<td width = '150'><br>Jack</td>";
                        elseif ($value == "Jack")
                            echo "<td width = '150'><br>John</td>";
                        if ($value == "Margaret")
                            echo "<td width = '150'><br>Peggy</td>";
                        elseif ($value == "Peggy")
                            echo "<td width = '150'><br>Margaret</td>";
                        if ($value == "Edward")
                            echo "<td width = '150'><br>Ed</td>";
                        elseif ($value == "Ed")
                            echo "<td width = '150'><br>Edward</td>";
                        if ($value == "Sarah")
                            echo "<td width = '150'><br>Sally</td>";
                        elseif ($value == "Sally")
                            echo "<td width = '150'><br>Sarah</td>";
                        if ($value == "Andrew")
                            echo "<td width = '150'><br>Andy</td>";
                        elseif ($value == "Andy")
                            echo "<td width = '150'><br>Andrew</td>";
                        if ($value == "Anthony")
                            echo "<td width = '150'><br>Tony</td>";
                        elseif ($value == "Tony")
                            echo "<td width = '150'><br>Anthony</td>";
                        if ($value == "Deborah")
                            echo "<td width = '150'><br>Debbie</td>";
                        elseif ($value == "Debbie")
                            echo "<td width = '150'><br>Deborah</td>";

                           
                    }
                    $col++;
                }
                
                
            }
            
        } else {
            echo "<p style='color:red;'>File not  found. Please check the file name.</p>";
        }
        } else {
        ?>
            <h3>firstnameNickname.php</h3>
            <form method="POST" action="firstnameNickname.txt">
                <table border="0" align="center" width="400">
                    <tr>
                        <td width="150">File name </td>
                        <td width="150" align="center"><input type="text" name="filename" size="40" value=""></td>
                    </tr>
                    <tr>
                    <tr></tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value=" SUBMIT " />&nbsp;
                        <input type="reset" name="reset" value=" RESET " />
                    </td>
                    </tr>
                </table>

            </form>


        <?php

        }
        ?>
    </center>
</body>

</html>