<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <!-- header section start page -->
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Inkesha</a>
        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="shop.html">shop</a>
            <a href="#">about</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="cart-btn" class="fas fa-shopping-cart"></div>
            <div id="login-btn" class="fas fa-user"></div>
        </div>
    </header>

    <!-- css shop section -->
    <style>

        *{
            font-family: 'poppins', sans-serif;
            margin: 0 0;
            padding: 0 0;
            
        }
        
        body{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            background: rgb(248, 248, 211);
            padding: 5rem;
        }
        .container{
            width: 100%;
            height: 80vh;
            margin: 0 auto;
            padding: 1%;
            background: rgb(248, 248, 211);
            padding: 5rem;
        }
        .img-responsive{
            width: 100%;
        }
        .img-curve{
            border-radius: 15px;
        }
        
        .text-right{
            text-align: right;
        }
        .text-center{
            text-align: center;
        }
        .text-left{
            text-align: left;
        }
        .text-white{
            color: white;
        }
        
        .clearfix{
            clear: both;
            float: none;
        }
        h2{
            color: #2f3542;
            font-size: 2rem;
            margin-bottom: 2%;
        }
        h3{
            font-size: 1.5rem;
        }
        .float-container{
            position: relative;
        }
        .float-text{
            position: absolute;
            bottom: 50px;
            left: 40%;
        }
        fieldset{
            border: 1px solid white;
            margin: 5%;
            padding: 3%;
            border-radius: 5px;
        }
        .categories{
            padding: 4% 0;
        }
        
        .box-3{
            width: 28%;
            float: left;
            margin: 2%;
        }
        .btn{
            padding: 1%;
            border: none;
            font-size: 1rem;
            border-radius: 5px;
        }
        /* CSS for Mobile Size or Smaller Screen */

@media only screen and (max-width:768px){
    .menu-btn{
        display: inline-block;
    }
    .header .navbar{
        position: absolute;
        top: 99%;
        left: 0;
        right: 0;
        background: #222;
        border-bottom: 0.1rem solid rgba(0,0,0,0.1);
        border-top: 0.1rem solid rgba(0,0,0,0.1);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    
    }
    .header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }
    .header .navbar a{
        margin: 1.5rem;
        padding: 1.5rem;
        background: rgb(246, 124, 36);
        font-size: 2rem;
        display: block;
        border-radius: .5rem;
    }

    .food-search input[type="search"]{
        width: 90%;
        padding: 2%;
        margin-bottom: 3%;
    }

    .btn{
        width: 91%;
        padding: 2%;
    }

    .food-search{
        padding: 10% 0;
    }

    .categories{
        padding: 20% 0;
    }
    h2{
        margin-bottom: 10%;
    }
    .box-3{
        width: 100%;
        margin: 4% auto;
    }

    .food-menu{
        padding: 20% 0;
    }

    .food-menu-box{
        width: 90%;
        padding: 5%;
        margin-bottom: 5%;
    }
    .social{
        padding: 5% 0;
    }
    .order{
        width: 100%;
    }
}

        
    </style>

    <!-- shop Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Products</h2>

            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Sausage" class="img-responsive img-curve">

                <h3 class="float-text text-white">Sausage</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>
            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="img/screen.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- shop Section Ends Here -->


    <div class="credit">Created by Intyoza || all rights resevered</div>
    <script src="main.js"></script>  
</body>
</html>