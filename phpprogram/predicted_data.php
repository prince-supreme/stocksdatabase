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
    <h1>predicted data of shares which will go high</h1>
    </div>
    <table>
        <tr>
            <th>P_ID</th>
            <th>Actual_price</th>
            <th>Predicted_price</th>
            <th>high</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","stocks");
        if ($conn-> connect_error) {
            die("Connection failed:". $conn-> connect_error);
        }
        $sql = "SELECT P_ID , Actual_price, Predicted_price, high from predicted_data";
        $result = $conn-> query($sql);

        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                echo "<tr><td>". $row["P_ID"]."</td>
                <td>". $row["Actual_price"]."</td>
                <td>". $row["Predicted_price"]."</td>
                <td>". $row["high"]."</td></tr>";
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