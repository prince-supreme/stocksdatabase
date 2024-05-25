<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="stylefile.css">
    <style>
        h1 {
            text-align: center;
            color: blueviolet;
            /* padding: 10px; */
        }

        .head {
            background-color: blanchedalmond;
            padding: 1px;
        }
    </style>
</head>

<body>
    <div class="head">
        <h1>List of the Shares</h1>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Symbol_name</th>
            <th>Share_name</th>
            <th>Founder</th>
            <th>Established_year</th>
            <th>Share_price</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "root", "stocks");
        if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
        }
        $sql = "SELECT ID , Symbol_name, Share_name, Founder, Established_year, Share_price from share";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["Symbol_name"] . "</td>
                <td>" . $row["Share_name"] . "</td>
                <td>" . $row["Founder"] . "</td>
                <td>" . $row["Established_year"] . "</td>
                <td>" . $row["Share_price"] . "</td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }

        $conn->close();
        ?>
    </table>
</body>

</html>