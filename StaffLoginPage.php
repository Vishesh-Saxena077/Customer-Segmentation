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
                height: 100vh;
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
                height: 50px;
                width: 100%;
                font-size: 3vh;
                font-weight: bolder;
                text-align: center;
            }
            .form_div {
                margin-left: 600px;
                margin-top: 100px;
                background-color:#34495e;
                height: 40vh;
                width: 30%;
                text-align: center;
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
            }
            #submit:hover {
                color:chartreuse;
            }
            
            @media (max-width: 909px) {
                label.logo {
                    font-size: 32px;
                    padding-left: 60px;
                }
                nav ul {
                    margin-right: 20px;
                }
                nav a {
                    font-size: 17px;
                }
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
                    LOGIN
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
                Enter The Password To Confirm That its Staff
            </div>
            <div class="form_div">
                <br><br>
                <form  onsubmit="return ConfirmingPassword()">
                    <label id="passlabel">PASSWORD:</label><br>
                    <input type="password" id="pass" value="">  <br>
                    <span id = "message" style="color:red"> </span><br>
                        <span id = "message_a" style="color:white; font-size:15px;"> </span>
                    <br>
                    <input type="submit" id="submit" name="submit" 
                           value="LOGIN">
                </form>
            </div>
        </section>                
        
        <script>
            function ConfirmingPassword() {
                var password =document.getElementById("pass").value
                var pass1 = "pshf#89#";
                // checking for the Confirmation of the password
                if ( password != pass1 )
                {
                    document.getElementById("message").innerHTML = "**Incorrect Password";
                    return false;
                }
                else
                {
                    document.location.href = "Admipage.html";
                    return false;
                }
            }
        </script>
        
    </body>
</html>
