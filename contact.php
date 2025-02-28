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
        h4{
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            text-transform: capitalize;
        }
        .row9{
            height: 200px;
            width: 100%;
            text-align: center;
        }
        .row9 p{
            font-size: 20px;
            color: black;
        }
        .row9 a{
            font-size: 20px;
            color: red;
            text-decoration: none;
        }
        .col11{
            height: 200px;
            width: 50%;
            float: left;
            background-color: burlywood;
        }
        .col12{
            height: 200px;
            width: 50%;
            float: left;
            background-color: lightcoralf;
        }
    </style>
</head>
<body>
    <marquee behavior="" direction="">
        <h4>Welcome to B&Co.</h4>
    </marquee>
    <div id="Contact">
        <h4>Contact us</h4>
        <br>
        <div class="row8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1945.0971291570388!2d80.24000350087799!3d12.830720289251156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525a8d2a35eb4d%3A0x93ea008adaa5ae9e!2sSagas%20Coral%20Springs!5e0!3m2!1sen!2sin!4v1740379703834!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row9">
        <div class="col11">
                <h4>Location</h4>
                <br>
                <p>
                Sagas Hostel <br> Muttukadu - Chennai <br> 603112
                </p>
            </div>
            <div class="col12">
                <h4>Contact</h4>
                <br>
                <a href="tel:9876543210">Mobile no: 9876543210</a>
                <br>
                <a href="mailto:abcd@gmail.com">Email: abcd@gmail.com</a>
            </div>
        </div>
    </div>
</body>

<?php include("Footer.html")
?>