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

                echo "<h3>FirstnameNickname.php</h3>";
               
                foreach ($text as $tr_data) {
                    $col = 1; 
                    $array_word = explode(",", $tr_data); 
                    
                    foreach ($array_word as $value) {
                        $value = trim($value); 
                        if ($col == 1) {
                            echo $value." "; 
                        } else {                                   
                           
                            if ($value == "Robert") echo "Dick";
                            elseif ($value == "Dick") echo "Robert";
                            elseif ($value == "William") echo "Bill";
                            elseif ($value == "Bill") echo "William";
                            elseif ($value == "James") echo "Jim";
                            elseif ($value == "Jim") echo "James";
                            elseif ($value == "John") echo "Jack";
                            elseif ($value == "Jack") echo "John";
                            elseif ($value == "Margaret") echo "Peggy";
                            elseif ($value == "Peggy") echo "Margaret";
                            elseif ($value == "Ed") echo "Edward";
                            elseif ($value == "Edward") echo "Ed";
                            elseif ($value == "Sarah") echo "Sally";
                            elseif ($value == "Sally") echo "Sarah";
                            elseif ($value == "Andy") echo "Andrew";
                            elseif ($value == "Andrew") echo "Andy";
                            elseif ($value == "Anthony") echo "Tony";
                            elseif ($value == "Tony") echo "Anthony";
                            elseif ($value == "Debbie") echo "Deborah";
                            elseif ($value == "Deborah") echo "Debbie";
                        }
                        $col++;
                    }
                    echo "<br>"; 
            }
        } else {
            echo "<p style='color:red;'>File not found. Please check the file name.</p>";
        }
    } else {
    ?>
        <h2>FirstnameNickname.php</h2>
        <form method="POST" action="">
            <table>
                <input type="text" name="filename" placeholder="Enter a file name"><br>
                <input type="submit" name="submit" value="SUBMIT">
                <input type="reset" name="reset" value="RESET">
            </table>
        </form>
    <?php
    }
    ?>
</center>
</body>
</html>
