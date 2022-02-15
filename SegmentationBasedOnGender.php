<html>
    <head>
        <title> Calculating Persentage Of Genders of Customers</title>
      <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-base.min.js"></script>
        <link rel="stylesheet" type="text/css" href="comman2.css">
    </head>
    <body>
        <center>  <div id="chart"> </div>  </center>
        
            <!-- PHP CODE TO RETRIVE THE AGE DATA -->
        <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "customersegmentation");
// Check connection
if($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$m = $f = $o = 0;
// Attempt select query execution
$sql = "SELECT * FROM cdetails";
if($result = mysqli_query($link, $sql))
{
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $row['gender'];
            if($row['gender'] == 'male')
            {
                $m++;
            }
            else if($row['gender'] == 'female')
            {
                $f++;
            }
            else if($row['gender'] == 'other')
            {
                $o++;
            }
        }
        $total = $m +$f +$o;
        mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
               
        <!-- JAVA SCRIPT CODE -->
        <script type="text/javascript">
            anychart.onDocumentReady(function()  {
                var m = "<?php echo $m; ?>";
                var f = "<?php echo $f; ?>";
                var o = "<?php echo $o; ?>";
                var data =  [ 
                    { x: "Male's", value: m } , 
                    { x: "Female's", value: f } ,
                    { x: "Others", value: o},
                ];
                // create the chart
                var chart = anychart.pie();
                // add the data
                chart.data(data);
                chart.innerRadius("30%");
                chart.title("Donut chart on Customer's Gender");
                chart.container('chart');
                chart.draw();  });
        </script>
    </body>
</html>
