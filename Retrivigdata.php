<html>
    <head>
        <link rel="stylesheet" type="text/css" href="comman2.css">
    </head>
    <body id="RetriveAllData">
    <?php
$link = mysqli_connect("localhost", "root", "", "customersegmentation");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM cdetails";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>address</th>";
                echo "<th>contact</th>";
                echo "<th>age</th>";
                echo "<th>gender</th>";
                echo "<th>product</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['product'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
    </body>
</html>
