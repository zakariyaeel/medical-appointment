<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="assets/img/fav.png" type="image/x-icon">
    
</head>
<body>
<?php include("includes/header.php"); ?>
<style>
        .content{
    padding: 65px;
    display: flex;
    flex-direction: row;
}
.content #img-doc{
    width: 38%;
    height: 100%;
    float: right;
}
.content .text-info{
    max-width: calc(100% - 38%);
    float: left;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 20px;
    font-weight: 600;
    padding: 40px;
    background-image: url('assets/img/backg.svg');
    background-position: center , top;
    background-repeat: no-repeat;
    background-size: 50%;
    display: flex;
    align-items: center;
    flex-direction: row;
}
    </style>
<div class="content">
    <div class="text-info">
        <div class="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Fugiat officia minus eligendi odio illo cumque.
                Adipisci dolorem qui, optio quidem dignissimos perferendis aliquid iure 
                deserunt accusamus quae repudiandae consequatur maiores?
            </p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Fugiat officia minus eligendi odio illo cumque.
                Adipisci dolorem qui, optio quidem dignissimos perferendis aliquid iure 
                deserunt accusamus quae repudiandae consequatur maiores?
            </p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Fugiat officia minus eligendi odio illo cumque.
                Adipisci dolorem qui, optio quidem dignissimos perferendis aliquid iure 
                deserunt accusamus quae repudiandae consequatur maiores?
            </p>
        </div>
    </div>
    <img src="assets/img/D5.jpg" alt="doc" id="img-doc">
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>