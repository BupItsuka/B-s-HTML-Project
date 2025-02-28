<?php include("Header.html")
?>
<head>
    <style>
        #Register{
            height: 500px;
            width: 100%;
            background-image: url(3.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        table{
            height: 400px;
            width: 300px;
            top: 10px;
            left: 500px;
            position: relative;
        }
        td{
            font-size: 30px;
            text-transform: capitalize;
            color: white;
        }
        input, select{
            height: 25px;
            width: 300%;
            border: black double;
            background-color: white;
        }
        input[type=submit]{
            width: 160%;
            float: left ;
            left: 200%;
            border: none;
            background-color: lightcoral;
            position: relative;
            border-radius: 10px 10px;
        }
        input[type=reset]{
            float: left;
            width: 250%;
            border: none;
            background-color: lightcoral;
            position: relative;
            border-radius: 10px 10px;
        }
        button.hover{
            background-color: white;
            box-shadow: black 10px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>      
    <div id="Register">
        <h3>Register</h3>
        <form action="connect.php" method="POST">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input name="Name" type=text></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input name="Email" type="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input name="Password" type="password"></td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input name="Date" type="date"></td>
                </tr>
                <tr>
                    <td>Domain</td>
                    <td><select name="Domain" id="">
                        <option value=""></option>
                        <option value="Individual">Individual</option>
                        <option value="Group">Group</option>
                        <option value="Business">Business</option>
                    </select></td>
                </tr>
                <tr>
                    <td><input class="button" type="Reset"></td>
                    <td><input class="button" type="Submit"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
    <br>
</body>
<?php include("Footer.html")
?>






