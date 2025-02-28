<?php include("Header.html")
?>
<head>
    <style>
    #about{
        height: 700px;
        width: 100%;
        background-color: rgb( 255, 122, 150);
    }
    .row5{
    height: 350px;
    width: 100%;
    }
    .col6{
        height: 350px;
        width: 50%;
        float: left;
    }
    .col6 img{
        top: 20px;
        left: 20px;
        background-color: white;
        position: relative;
        border-radius: 20px;
        box-shadow: gray 20px  20px 10px 20px ;
    }
    .col7{
        height: 350px;
        width: 50%;
        float: right;
    }
    .col7 p{
        font-size: 30px;
        top: 15%;
        right: 25%;
        text-align: justify;
        position: relative;
    }
    .row6{
    height: 350px;
    width: 100%;
    }
    .col8{
        height: 350px;
        width: 50%;
        float: left;
    }
    .col8 p{
        font-size: 30px;
        top: 15%;
        left: 10%;
        text-align: justify;
        position: relative;
    }
    .col9{
        height: 350px;
        width: 50%;
        float: right;
    }
    .col9 img{
        top: 20px;
        left: 50%;
        background-color: wheat;
        position: relative;
        border-radius: 20px;
        box-shadow: gray 20px  20px 10px 20px ;
    }
    marquee h4{
        font-size: 30px;
        text-transform: capitalize;
    }
    marquee{
        background-color: violet;
    }
    </style>
</head>
<body>
    <marquee behavior="" direction="">
        <h4>Welcome to B&Co.</h4>
    </marquee>
    <div id="about">
        <div class="row5">
            <div class="col6">
                <img src="CPU.png" height="200px" width="200px" alt="404 Not Found">
            </div>
            <div class="col7">
                <p>Our dedicated team of engineers is here to make sure you're well-prepared even before your new PC arrives at your doorstep. We are deeply committed to educating our valued customers.Before your PC is delivered or set up, our experts provide comprehensive support to ensure you have the essential skills and knowledge required for optimal PC usage.</p>
            </div>
        </div>
        <div class="row6">
            <div class="col8">
                <p>We provide complimentary delivery and shipping services, ensuring a seamless experience for our customers.To guarantee the safety and security of your purchase, we employ premium packing materials.</p>
            </div>
            <div class="col9">
                <img src="GPU.png" height="200px" width="200px" alt="404 Not Found">
            </div>
        </div>
    </div>
</body>

<?php include("Footer.html")
?>