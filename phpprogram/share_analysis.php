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
    <h1>Shares analysis of 1 year</h1>
    </div>
    <table>
        <tr>
            <th>sh_ID</th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","stocks");
        if ($conn-> connect_error) {
            die("Connection failed:". $conn-> connect_error);
        }
        $sql = "SELECT sh_ID, January, February, March, April, May, June, July, August, September, October, November, December from share_analysis";
        $result = $conn-> query($sql);

        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                echo "<tr>
                <td>". $row["sh_ID"]."</td>
                <td>". $row["January"]."</td>
                <td>". $row["February"]."</td>
                <td>". $row["March"]."</td>
                <td>". $row["April"]."</td>
                <td>". $row["May"]."</td>
                <td>". $row["June"]."</td>
                <td>". $row["July"]."</td>
                <td>". $row["August"]."</td>
                <td>". $row["September"]."</td>
                <td>". $row["October"]."</td>
                <td>". $row["November"]."</td>
                <td>". $row["December"]."</td>
                </tr>";
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