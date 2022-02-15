<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="comman.css">
        
        <title> Customer Segmentation Web App</title>
        
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        
        <script>
            $(document).ready(function(){
               $('#icon').click(function(){
                   $('ul').toggleClass('show'); 
               }); 
            });
        </script>
        
        <style>
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
            
            a:hover {
                color: white;
                box-shadow: 0px 0px 5px 5px tomato;   
            }
            
            .Instructions {
                background-color: #e67e22;
                height: 90px;
                width: 100%;
                font-size: 3vh;
                font-weight: bolder;
                text-align: center;
            }
            .form_div {
                margin-left: 600px;
                background-color:#34495e;
                height: 100vh;
                width: 30%;
                text-align: left;
            }
            form {
                font-size: 3vh;
                color: #e67e22;
                font-weight: bold;
            }
            input {
                font-size: 3vh;
                color:white;
                border-bottom: 2px solid white;
                background:none;
                outline: none;
                border-top: none;
                border-left: none;
                border-right: none;
            }
            select {
                font-size: 3vh;
                background:none;
                outline: none;
            }
            #submit {
                font-size: 3vh;
                margin-left: 40%;
            }
            
            @media (max-width: 909px)
            {
                .Instructions 
                {
                    background-color: #e67e22;
                    height: 50px;
                    width: 100%;
                    font-size: 15px;
                    font-weight: bolder;
                    text-align: center;
                }
                .form_div {
                    margin-left: 0px;
                    background-color:#34495e;
                    height: 100vh;
                    width:auto;
                    text-align: left;
                }
            }
            @media (max-width: 858px) {
                .form_div {
                    margin-left: 0px;
                    background-color:#34495e;
                    height: 100vh;
                    width:auto;
                    text-align: left;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <label class="logo">
                    CUSTOMER's AREA 
                </label>
                <ul>
                    <li>
                        <a href="indexpage.html">
                        <i class="fa fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-user-tie"></i>
                            Help
                        </a>
                    </li>
                </ul>
                <label id="icon">
                    <i class="fas fa-bars"></i>
                </label>
            </nav>
        </header>    
        <section>
            <div class="Instructions">
                Customer are requested to fill the given below form provided 
                o that if you want to view only items of your intrests, rather 
                han watching unwanted products.
            </div>
            
            <div class="form_div">
                <br><br>
                <span style="color:chartreuse">
                    <h2>
                        Fill Details
                    </h2>
                </span>
                <hr><br><br><br>
                <form method="post" action="CS_Process.php">
                    NAME: 
                    <input type="text" name="name">  <br><br>
                    ADDRESS:
                    <input type="text" name="address">  <br><br>
                    CONTACT:
                    <input type="text" name="contact">  <br><br>
                    AGE:
                    <select id="age" name="age">
                        <option value="agetype1">0-20</option>
                        <option value="agetype2">21-40</option>
                        <option value="agetype3">41-60</option>
                        <option value="agetype4">Above 60</option>
                    </select>  <br><br>
                    GENDER:   
                    <br>
                    <input type="radio" name="gender" value="male">Male<br>
                    <input type="radio" name="gender" value="female">Female<br>
                    <input type="radio" name="gender" value="other">Other<br><br>
                    CHOSSE PRODUCT: 
                    <select id="product" name="product">
                        <option value="product0">All Catogry</option>
                        <option value="product1">Electronic Devices</option>
                        <option value="product2">Men,s Wears</option>
                        <option value="product3">Women's Wears</option>
                        <option value="product4">Kid's Wears</option>
                        <option value="product5">Beauty Product</option>
                        <option value="product6">Gym Equipments</option>
                        <option value="product7">Toys</option>
                        <option value="product8">Organic Products</option>
                        <option value="product9">Stationary</option>
                    </select>
                    <br><br>
                    
                    <input type="submit" id="submit" name="submit" 
                           value="submit">
                </form>
            </div>
            
            
        </section>                
    </body>
</html>
