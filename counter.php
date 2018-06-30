<!DOCTYPE html>
<html>
    <head>
        <title>Counter</title>
        <link rel="stylesheet" href="counterStyle.css">
    </head>
    <body>
        <hr>
        <p id="p01">Character Frequency Count</p>
        <hr>
        <table id="table01">
            <tr>
                <th>Character</th>
                <th>Count</th>
            </tr>
            <?php
                $info=$_POST['box'];
                for($i=0;$i<128;$i++)
                {
                    $freq[$i]=0;
                }
                for($i=0;$i<strlen($info);$i++)
                {
                    $freq[ord($info[$i])]=$freq[ord($info[$i])]+1;
                }
                for($i=0;$i<128;$i++)
                {
                    if($freq[$i]>0 && $i!=13 && $i!=10)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo chr($i);
                        echo "</td>";
                        echo "<td>";
                        echo $freq[$i];
                        echo "</td>";
                        echo "</tr>"; 
                    }
                }
            ?>
        </table>
        <br>
        <br>
        <form action="index.php" method="POST" id="form01">
            <input type="submit" value="Input another string" id="submit01">
        </form>
        <hr>
        <p id="p02">Word Count</p>
        <hr>
        <table id="table02">
            <tr>
                <th>Word</th>
                <th>Count</th>
            </tr>
        <?php
            $wordFreq=array_count_values(str_word_count($info, 1));
            arsort($wordFreq);
            foreach($wordFreq as $word=>$count)
            {
                echo "<tr>";
                echo "<td>";
                echo $word;
                echo "</td>";
                echo "<td>";
                echo $count;
                echo "</td>";
                echo "</tr>"; 
            }
        ?>
        </table>
        <br>
        <br>
        <form action="index.php" method="POST" id="form02">
            <input type="submit" value="Input another string" id="submit02">
        </form>
        <!--
        <br>
        <br>
        <div id="div01">
            <p>&copy;2018 Ehtesham Ahmad Nadim</p>
            <p>All Rights Reserved</p>
        </div>
        -->
    </body>
</html>