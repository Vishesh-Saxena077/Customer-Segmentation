<!-- CS_Process.php -->
<html>
    <head>
        <style>
            
            /*Css file*/
            body {
                background-color: black;
                color:white;
                text-align: center;
            }
            header {
                background-color: white;
                height: auto;
                width:100%;
            }
            section {
                background-color: black;
            }
            nav {
                background-color: black;
                height: 80px;
                width: 100%;
                text-align:center;
            }
            label.logo {
                margin-left:-10px;
                font-family: 'Rajdhani', cursive;
                font-size: 35px;
                color: tomato;
                padding: 0;
                line-height: 80px;
                transition: 0.5s ease;
                text-shadow: 0px 10px 5px tomato;
                font-weight:bold;
            }
            nav ul {
                float: left;
                margin-left: 40px;
            }
            nav li {
                display: inline-block;
                margin: 0 8px;
                line-height: 80px;
            }
            nav a {
                color: tomato;
                font-size: 18px;
                border: 1px solid transparent;
                padding: 7px;
                border-radius: 3px;
                font-weight: bold;
                transition:  0.5s;
            }
            a:hover {
                color: white;
                box-shadow: 0px 0px 5px 5px tomato;
                }
            nav #icon {
                color: tomato;
                font-size: 30px;
                line-height: 80px;
                    height: auto;
                    float: right;
                    margin-right: 40px;
                margin-right: 40px;
                cursor: pointer;
                display: none;
                transition: 0.5s ease;
            }
            nav #icon:hover {
                font-size: 35px;
            }
        </style>
    </head>
    <body>
        <header>
            <nav>            
                <ul>
                    <li>
                        <a href="New_Entries.php">
                            <i class="fa fa-back"></i>
                            back
                        </a>
                    </li>
                </ul>
            </nav>
        </header>    
        <?php
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = "customersegmentation";
        
        // Create connection
        $conn = new mysqli($hostname, $username, $password, $dbname);
        
        // Check connection
        if(!$conn) {
            die('Could not Connect My Sql:' .mysql_error());
        }
        if(isset($_POST['submit']))
        {	 
            $name = $_POST['name'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $product = $_POST['product'];
            $sql = "INSERT INTO cdetails (name,address,contact,age,gender,product)
            VALUES ('$name','$address','$contact','$age','$gender','$product')";  
            if (mysqli_query($conn, $sql)) {
                echo '<h1>Details Saved Sucsessfully !</h1>';
            }
            else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?> 
    </body>
</html>