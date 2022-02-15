<html>
    <head>
        <title> Calculating Persentage Of Age of Customers</title>
        
        
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
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$p0 = $p1 = $p2 = $p3 = $p4 = $p5 = $p6 = $p7 = $p8 = $p9 = $total = 0;
// Attempt select query execution
$sql = "SELECT * FROM cdetails";

if($result = mysqli_query($link, $sql))
{
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $row['product'];
            if($row['product'] == 'product0')
            {
                $p0++;
            }
            if($row['product'] == 'product1')
            {
                $p1++;
            }
            else if($row['product'] == 'product2')
            {
                $p2++;
            }
            else if($row['product'] == 'product3')
            {
                $p3++;
            }
            else if($row['product'] == 'product4')
            {
                $p4++;
            }
            else if($row['product'] == 'product5')
            {
                $p5++;
            }
            else if($row['product'] == 'product6')
            {
                $p6++;
            }
            else if($row['product'] == 'product7')
            {
                $p7++;
            }
            else if($row['product'] == 'product8')
            {
                $p8++;
            }
            
            else if($row['product'] == 'product8')
            {
                $p9++;
            }
        }
        $total = $p0+$p1+$p2+$p3+ $p4+ $p5+ $p6+ $p7+ $p8+$p9;   
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
                var p0 = "<?php echo $p0 ; ?>";
                var p1 = "<?php echo $p1 ; ?>";
                var p2 = "<?php echo $p2 ; ?>";
                var p3 = "<?php echo $p3 ; ?>";
                var p4 = "<?php echo $p4 ; ?>";
                var p5 = "<?php echo $p5 ; ?>";
                var p6 = "<?php echo $p6 ; ?>";
                var p7 = "<?php echo $p7 ; ?>";
                var p8 = "<?php echo $p8 ; ?>";
                var p9 = "<?php echo $p9 ; ?>";
                var data =  [
                    {x: "All Catogry", value: p0},
                    {x: "Electronic Devices", value: p1},
                    {x: "Men's Wears", value: p2},
                    {x: "Women's Wears", value: p3},
                    {x: "Kids's Wears", value: p4},
                    {x: "Beauty Products", value: p5},
                    {x: "Gym Equipments", value: p6},
                    {x: "Toys", value: p7},
                    {x: "Organic Products", value: p8},
                    {x: "Stationary", value: p9},
                ];
                // create the chart
                var chart = anychart.pie();
                // add the data
                chart.data(data);
                chart.innerRadius("30%");
                chart.title("Donut chart on Customer's on Intrest of Product");
                chart.container('chart');
                chart.draw();  });
        </script>
        
    </body>
</html>
