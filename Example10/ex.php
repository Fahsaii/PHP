<?php
if (isset($_POST["submit"])) {
    $filename = $_POST["filename"];
    
    // Check if the file exists before trying to open it
    if (file_exists($filename)) {
        $text = file($filename);
        foreach($text as $tr_data) {
            $col = 1;
            $array_word = explode(" ", $tr_data);
            foreach($array_word as $word) {
                $value = trim($word);
                echo '<div style="border: 1px solid black; padding: 5px; margin: 5px;">';
                if ($col == 1) {
                    echo $value;
                } else {
                    if ($value == "Robert")
                        echo "Dick";
                    elseif ($value == "Dick")
                        echo "Robert";
                    elseif ($value == "William")
                        echo "Bill";
                    elseif ($value == "Bill")
                        echo "William";
                    elseif ($value == "James")
                        echo "Jim";
                    elseif ($value == "Jim")
                        echo "James";
                    elseif ($value == "John")
                        echo "Jack";
                    elseif ($value == "Jack")
                        echo "John";
                    elseif ($value == "Margaret")
                        echo "Peggy";
                    elseif ($value == "Peggy")
                        echo "Margaret";
                    elseif ($value == "Ed")
                        echo "Edward";
                    elseif ($value == "Edward")
                        echo "Ed";
                    elseif ($value == "Sarah")
                        echo "sally";
                    elseif ($value == "sally")
                        echo "Sarah";
                    elseif ($value == "Andy")
                        echo "Andrew";
                    elseif ($value == "Andrew")
                        echo "Andy";
                    elseif ($value == "Anthony")
                        echo "Tony";
                    elseif ($value == "Tony")
                        echo "Anthony";
                    elseif ($value == "Debbie")
                        echo "Deborah";
                    elseif ($value == "Deborah")
                        echo "Debbie";
                }
                echo "</div>";
            }
        }
    } else {
        echo "Error: The file does not exist.";
    }
} else {
?>
    <form name="mid2" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <h3>FirstName-NickName.txt</h3>
        <table width="400" border="0" align="center">
            <tr><td width="100" align="center"><br><input type="text" name="filename" size="40"></td></tr>
            <tr><td colspan="2" align="center"><br><input type="submit" name="submit" value="SUBMIT"> &nbsp;<input type="reset" name="reset" value="RESET"></td></tr>
        </table>
    </form>
<?php
}
?>