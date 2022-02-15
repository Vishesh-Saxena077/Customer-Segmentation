<html>
    <head>
        <title> Calculating Persentage Of Age of Customers</title>
      <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-base.min.js"></script>
        <link rel="stylesheet" type="text/css" href="comman2.css">
    </head>
    <body>
        <center>
            <div id="chart"> 
            </div>
        </center>
        
            <!-- PHP CODE TO RETRIVE THE AGE DATA -->
        <?php
            /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
            $link = mysqli_connect("localhost", "root", "", "customersegmentation"); 
            
            // Check connection
            if($link === false)
            {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $atype1 = $atype2 = $atype3 = $atype4 = 0;
            // Attempt select query execution
            $sql = "SELECT * FROM cdetails";
            if($result = mysqli_query($link, $sql))
            {
                if(mysqli_num_rows($result) > 0)
                {  
                    while($row = mysqli_fetch_array($result))
                    {
                        $row['age'];
                        if ( $row != "null")
                        {
                            if($row['age'] == 'agetype1')  
                            {
                                $atype1++;
                            }
                            else if($row['age'] == 'agetype2') 
                            {
                                $atype2++;
                            }
                            else if($row['age'] == 'agetype3')
                            {
                                $atype3++; 
                            }
                            else if($row['age'] == 'agetype4')
                            {
                                $atype4++;
                            }
                          }
                        else {}
                    }
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
                var variable1 = "<?php echo $atype1; ?>";
                var variable2 = "<?php echo $atype2; ?>";
                var variable3 = "<?php echo $atype3; ?>";
                var variable4 = "<?php echo $atype4; ?>";
                var data =  [
                    {x: "0-20", value: variable1},
                    {x: "21-40", value: variable2},
                    {x: "41-60", value: variable3},
                    {x: "Above 60", value: variable4},
                ];
                // create the chart
                var chart = anychart.pie();
                // add the data
                chart.data(data);
                chart.innerRadius("30%");
                chart.title("Donut chart on Customer's Age");
                chart.container('chart');
                chart.draw();  });
        </script>
        
    </body>
</html>
