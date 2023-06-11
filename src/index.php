




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare health</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="shortcut icon" href="assets/img/fav.png" type="image/x-icon">
  
  
    
</head>
<body>
    <?php include('includes/header.php') ?>
    <main>
        <section class="ls">
            <h2> We Are Here For Your Care </h2>
            <h1> We The Best MEDCENTER</h1>
            <p>We are here for your care 24/7. Any help just call us</p>
            <button >
                <a href="login.php">Make an appointment</a> 
              </button>
        </section>
        <section class="rs"> 
            <figure>
                <img src="assets/img/CT scan-amico.png" class="bk">
            </figure>
        </section>
    </main>
    <?php include('includes/footer.php') ?>
</body>
</html>




<!-- css -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&family=Poppins:wght@400;500;600&display=swap');

*{
    margin: 0%; padding: 0;
    box-sizing: border-box; 
    font-family: 'Courier New', 'Noto Serif', Courier, monospace;

    }

    

main{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
main .rs{
    padding-right: 70px ;

}
main .rs .bk{
    width: 100%;
    height: 100%;
}
main .ls{
    padding-left: 100px;
}
.ls h2{
    font-size: 20;
    text-transform: capitalize;
    font-weight: lighter;
    color: #242424;
    margin-top: 100px;
}

.ls h1{
    font-size: 55px;
    text-transform: capitalize;
    font-weight: 700;
    margin: 15px 0;
}

.ls p{
    margin-bottom: 20px;
}

.ls button{
    padding: 15px 45px;
    text-align: center;
    font-size: 14px;
    color: white;
    border: none;
    background-image: linear-gradient(to right, #92E3A9,#0070fa);
    border-radius:  10px; 
}
.ls button a{
    color: white;
    text-decoration: none;
}
</style>