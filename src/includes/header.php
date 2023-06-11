
    <style>
        
            header{
                width: 100%;
                height: 20vh;
                /*background-image: url(../img/Sans_titre-removebg-preview.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;*/
                background-image: linear-gradient(to bottom, #92E3A9,#ffff);
        
            }
            .Home{
                width: 100%;
                height: 100px;
                display: flex;
                justify-content:space-between ;
                align-items: center;
            }
        
            .Home .logo img{
            
                width: 250px; height: 150px;
                padding-left: 50px;
        
            }
            .Home nav{
                margin-right: 250px;
                width: 450px;
                display: flex;
                justify-content: space-around;
                align-items: center;
            
            }
            .Home nav a {
                padding: 70px;
                text-decoration: none;
                color: black;
                text-transform: uppercase;
                
            }
            .Home nav a:hover {
                color: #1DA6F6;
            }
        
        
            .Home nav button{
                border: 1px solid #fff;
                background: none;
                padding: 70px 30px;
            }
        
    </style>
    <header>
    <div class="Home">
        <div class="logo">
            <img src="assets/img/medical_logo-removebg-preview.png" alt="">
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="aboutus.php">About us</a>
            <button class="btn"><a href="login.php" class="fas fa-user">Login</a></button>
            
            
        </nav>
       
    </div>
</header>





 