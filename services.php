<?php include("Header.html")
?>
<head>
    <style>
        marquee h4{
            font-size: 30px;
            text-transform: capitalize;
        }
        marquee{
            background-color: violet;
        }
        #Services{
            height: 500px;
            width: 100%;
            background-image: url(1.jpg);
        }
        .row10{
            height: 400px;
            width: 90%;
            margin: auto;
 
        }
        .col13{
            height: 300px;
            width: 22%;
            margin-left: 15px;
            margin-right: 15px;
            float: left;
            border: solid;
            border-radius: 45px;
            box-shadow: black 10px 10px;
        }
        .col13 h5{
            text-align: center;
            font-size: 25px;
            text-transform: capitalize;
            top: 4px;
            position: relative;
        }
        .col13 img{
            left: 70px;

            position: relative;
        }
        .col13 h6{
            text-align: justify;
            padding-left: 20px;
            padding-right: 20px;
            font-size: 12px;
        }
        .col13 p{
            text-align: center;
        }
        .col13 p a{
            font-size: 20px;
            text-transform: capitalize;
            text-decoration: none;
        }
        .col13 p a:hover{
            background-color: white ;
            box-shadow: black 5px 5px;
            border-radius: 5px;
        }
    
    </style>
</head>
<body>
    <marquee behavior="" direction="">
        <h4>Welcome to B&Co.</h4>
    </marquee>
    <div id="Services">
        <h4 style="font-size: 50px; text-align: center;">Services</h4>
        <div class="row10">
            <div class="col13">
                <h5>PC Building</h5>
                <img src="build.jpg" height="150px" width="150px" alt="">
                <h6>choose what type of pc you need for yourself.</h6>
                <br>
                <p><a href="">click here</a></p>
            </div>
            <div class="col13">
                <h5>PC Accessories</h5>
                <img src="accessories.jpg" height="150px" width="150px" alt="">
                <h6>we help you to choose  accessories for your pc and mobile</h6>
                <br>
                <p><a href="">click here</a></p>
            </div>
            <div class="col13">
                <h5>Software</h5>
                <img src="software.jpg" height="150px" width="150px" alt="">
                <h6>Download and install the software you needs.</h6>
                <br>
                <p><a href="">click here</a></p>
            </div>
            <div class="col13">
                <h5>Laptop</h5>
                <img src="laptop.jpg" height="150px" width="150px" alt="">
                <h6>we help you on selecting a laptop based on your needs.</h6>
                <br>
                <p><a href="">click here</a></p>
            </div>
        </div>
    </div>
</body>


<?php include("Footer.html")
?>