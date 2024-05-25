<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="stylefile.css">
    <style>
        h1{
            text-align: center;
            color: blueviolet;
            /* padding: 10px; */
        }
        .head{
            background-color: blanchedalmond;
            padding: 1px;
        }
    </style>

</head>
<body>
    <div class="head">
    <h1>Fundamentals of the shares</h1>
    </div>
    <table>
        <tr>
            <th>F_ID</th>
            <th>Market_Cap</th>
            <th>ROE</th>
            <th>PE_Ratio</th>
            <th>Face_value</th>

        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","stocks");
        if ($conn-> connect_error) {
            die("Connection failed:". $conn-> connect_error);
        }
        $sql = "SELECT F_ID , Market_Cap, ROE, PE_Ratio, Face_value from fundamentals";
        $result = $conn-> query($sql);

        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                echo "<tr><td>". $row["F_ID"]."</td><td>". $row["Market_Cap"]."</td><td>". $row["ROE"]."</td><td>". $row["PE_Ratio"]."</td><td>". $row["Face_value"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }

        $conn-> close();
        ?>
    </table>
</body>
</html>