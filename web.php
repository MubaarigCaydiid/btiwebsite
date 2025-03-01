<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tijaabo</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Montserrat:wght@100..900&family=Permanent+Marker&display=swap');
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
a{
    text-decoration: none;
}
body{
   font-family: Arial, Helvetica, sans-serif;
   
}
.container{
    width: 100%;
    max-width: 1140px;
    margin: 0 auto;
}
.navbar-d-flex{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
header{
    position: relative;
    height: 83px;
    width: 100%;
    animation: fadeIn 1s ease-in-out;
    
}
nav{
    height: 83px;
    width: 100%;
    padding: 20px 0px;
}
.ims{
    width: 100px;
    height: 100px;
}
.brand{
    color: #000;
    font-size: 30px;
    font-family: "permanent Marker";
    font-weight: 1000;
    margin-left: 20px;
    text-transform: capitalize;
    cursor: pointer;
}
.brand-text{
    color: #e803e8;
}
.navigation-bar ul{
    margin: 0px;
    padding: 0px;
   
    
}
.navigation-bar ul li{
    display: inline-block;
    margin: 0px 20px;
    
}
.navigation-bar ul li:last-child{
    margin-right: 0px;
}
.navigation-bar ul li a{
    color: #000;
    font-size: 17px;
    font-weight: normal;
    font-weight: 500;
    text-transform: capitalize;
}
.navigation-bar ul li a:hover{
    color: #e803e8;
    border-bottom: 1px solid red;
}
.btn{
    display: inline-block;
    padding: 9px 20px;
    font-size: 17px;
    font-weight: 700;
    background-color: #e803e8;
    border-radius: 5px;
    text-transform: capitalize;
}
.navigation-bar ul li a.btn:hover{
    background-color: #000;
    color: #fff;
}
.burger{
    width: 25px;
    cursor: pointer;
    display: none;
}
.burger span{
    display: block;
    margin-bottom: 3px;
    height: 3px;
    background-color: #e803e8;
    width: 100%;
}

@media(min-width:991px){
    .navigation-bar{
        display: block !important;
    }
}
@media(max-width:991px){
    .burger{
        display: block;
        position: absolute;
        right: 20px;
    }
    .navigation-bar{
        display: none;
        position: absolute;
        padding: 10px 0px;
        background-color: #016767;
        left: 0;
        top: 70px;
        width: 100%;
        justify-content: center;
        text-align: center;
        z-index: 2;
    }
    .navigation-bar ul li{
        display: block;
        margin: 15px 0px;
    }
    .navigation-bar ul li a{
        color: #fff;
    }
    .navigation-bar ul li a:hover{
        color: #000;
    }
    .navigation-bar ul li a.btn{
        background-color: #000;
        color: #fff;
    }
    .navigation-bar ul li a.btn:hover{
        background-color: #fff;
        color: #000;
    }
    .navigation-bar.active{
        display: flex;
    }
}
#home{
    height: 90vh;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                url('https://scontent.fhga3-1.fna.fbcdn.net/v/t39.30808-6/418482398_747916457400385_3554289019842300258_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_ohc=rbq1rNxMf0wQ7kNvgG1Vcs8&_nc_zt=23&_nc_ht=scontent.fhga3-1.fna&_nc_gid=AFiSuJbZudOar0HlZrmDxqd&oh=00_AYByIeaTl1Y4AfV7_pR4ZE9caQY9D614NoXcu6kE7v3LmA&oe=67BF4B25');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
@keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }


#home-content{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 90vw;
    height: 90vh;
    max-width: 100%;
    animation: mub 3s ease-in-out;
}
@keyframes mub {
    from {
      opacity: 1;
      transform: translateX(-40px);
    }
    to {
      opacity: 1;
      transform: translateX(1);
    }
  }
#home-content .content-left{
    padding: 30px;
}
#home-content h1{
    font-size: 60px;
    color: white;
    margin-bottom: 10px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
#home-content span{
    color: #e803e8;
}
#home-content p{
    margin-bottom: 0;
    color: antiquewhite;
}
#home-content .content-left .btn{
    margin-top: 10px;
    padding: 15px 20px;
}
#home-content .content-left .btn:hover{
    background-color:rgba(255, 247, 247, 0.7);
    color: #000;
    border: 1px solid rgb(244, 0, 240);
}
#home-content img{
    width: 400px;
    height: 400px;
    border-radius: 70px;
    animation: muba 4s ;
}
@keyframes muba {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
@media (max-width: 767px){
    #home-content {
       flex-direction: column-reverse;
    }
    #home-content h1{
        font-size: 27px;
    }
    #home-content .content-right{
        margin-top: 20px;
    }
    #home-content p{
        margin-top: 0;
    }
    #home-content img{
        width: 300px;
        height: 300px;
    }

}

@media(min-width: 768px) and (max-width: 1023px){
    #home-content{
        flex-direction: column-reverse;
    }
    #home-content .content-right{
        position: relative;
        top: 0%;
        left: 0;
    }
    #home-content .content-left{
       position: relative;
       top: 5%;
        
    }
    #home-content .content-left h1{
        font-size: 30px;
        margin-bottom: 10px;
    }
    #home-content .content-left p{
        margin-bottom: 20px;
        font-size: 20px;
        display: block;
    }
    #home-content .content-right img{
        width: 400px;
        height: 400px;
        margin-bottom: 0;
    }
}
.about-h{
    text-align: center;
    font-size: 32px;
    text-transform: capitalize;
    color: rgb(20, 12, 8);
    margin-top: 15px;
    margin: 0px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    text-decoration: underline #e803e8 2px;
    
}
.containers{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 90vw;
    height: 90vh;
    margin: 30px auto;
    max-width: 1000px;
}
.content-1 img{
    width: 400px;
    height: 400px;
    border-radius: 13px;
}
.content-2{
   padding: 20px;
   margin-top: 10px;
   font-family: Arial, Helvetica, sans-serif;
   font-size: 1.1rem;
   line-height: 1.6;
   margin-left: 15px;
}
.content-2 h1{
   font-size: 30px;
   text-transform: capitalize;
   color: #ea05ea;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.content-2 p{
    margin-bottom: 10px;
    font-size: 1.2;
}
.content-2 .btn:hover{
    background-color: #ffffff97;
    border: #ea05ea 1px solid;

}

@media (max-width: 767px){
    .containers {
       flex-direction: column;
    }
    .containers h1{
        font-size: 27px;
    }
    .containers .content-2{
        margin-top: 20px;
    }
    .containers p{
        margin-top: 0;
    }
    .containers img{
        width: 300px;
        height: 300px;
    }

}





@media(min-width: 768px) and (max-width: 1023px){
    .containers{
        flex-direction: column-reverse;
    }
    .containers .content-2{
        position: relative;
        top: 0%;
        left: 0;
    }
    .containers .content-1-left{
       position: relative;
       top: 5%;
        
    }
    .containers .content-1 h1{
        font-size: 30px;
        margin-bottom: 10px;
    }
    .containers .content-1 p{
        margin-bottom: 20px;
        font-size: 20px;
        display: block;
    }
    .containers .content-1 img{
        width: 400px;
        height: 400px;
        margin-bottom: 0;
    }
}




        .skills-card{
            text-align: center;
            font-size: 32px;
            text-transform: capitalize;
            color: rgb(20, 12, 8);
            margin-bottom: 30px;
        }

        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 300px;
            text-align: center;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-content {
            padding: 15px;
        }
        .card h3 {
            font-size: 22px;
            margin-bottom: 5px;
        }
        .card p {
            color: gray;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .card button {
            background: #ea05ea;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .card button:hover {
            background: darkgreen;
        }


    </style>
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar-d-flex">
           <img src="images/bti.jpg" class="ims">
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navigation-bar">
                <ul class="links">
                    <li><a href="#">home</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="http://localhost/form2/index.php" class="btn">contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<div id="home">
 <div class="container">
    <div id="home-content">
        <div class="content-left">
            <h1>THE BEST <span>SCHOOL</span> LEARNING SKILL AND TECHNOLOGY</h1>
            <p>
            Welcome to burao technical school waa dugsiga farsamada gacanta ee
Magaalada burco waxaanu ku hayaa skills farabadan oo Aad uqiimo badan
Kaalay hada isdiwaan gali waxaana kuu joogta macalimiin aad uqiimo
badan kuwaasoo aqoon fiican u leh waxay dhigayaan hamoogaan bti school.
            </p>
            <a href="#" class="btn">Get Started</a>
        </div>
        <div class="content-right">
            <img src="https://somaliforum-uploads.s3.dualstack.eu-west-2.amazonaws.com/original/1X/88d1a090ab57b62c816df3f566ebd08bc8b3f530.jpeg" alt="">
        </div>
    </div>
 </div>
</div>

<section class="menu-section">
    <h1 class="about-h">About Us</h1>
    <div class="containers">
   <div class="content-1">
    <img src="https://somaliforum-uploads.s3.dualstack.eu-west-2.amazonaws.com/original/2X/f/faad7fc3b8a86ec5a478933c23a5621776f2f728.jpeg" alt="">
</div>
<div class="content-2">
    <h1>BURAO TECHNICAL</h1>
    <p>
    BTI school waa dugsi lagu barto farsamada gacanta Iyo technology casriga
Waxaana dugsigan kuyaalaa wadanka Somaliland gaar ahaan magaalada burco kaasoo
Lagu dhigto skiils farabadan sida ICT,ELECTRICTY,CONSTRUCTION,MECHANICS,IWM
Kaasoo tacliintiisu aad usareyso hadii aad jeclaan lahayd inaad kusoo biirto dugsigan
Oo aad rabto inaad xirfadaada hormariso halkani waa goobta uGu wanaagzan ee aad
Kabaran karto iska diwaan gali website kan.
    </p>
    <a href="#" class="btn">Read More</a>
</div>
    </div>
    
</section>




<h3 class="skills-card">Our Skills</h3>


    <div class="container">
        <div class="card">
            <img src="https://images.pexels.com/photos/27928762/pexels-photo-27928762/free-photo-of-a-man-is-working-on-an-electrical-panel.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Manager">
            <div class="card-content">
                <h3>Electricity</h3>
                <p>Paul</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="card">
        <img src="https://images.pexels.com/photos/3756678/pexels-photo-3756678.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Information Technology">
            <div class="card-content">
                <h3>Information Technology</h3>
                <p>Colin</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="card">
        <img src="https://images.pexels.com/photos/1216589/pexels-photo-1216589.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Construction">
            <div class="card-content">
                <h3>Construction</h3>
                <p>Mario</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Read More</button>
            </div>
        </div>
    </div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "registration_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = trim($_POST["Name"]);
    $Email = trim($_POST["Email"]);
    $Password = password_hash($_POST["Password"], PASSWORD_DEFAULT);

    $checkEmail = "SELECT * FROM users WHERE Email = ?";
    $stmt = $conn->prepare($checkEmail);
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email already registered!✅";
    } else {
        $sql = "INSERT INTO users (Name, Email, Password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $Name, $Email, $Password);

        if ($stmt->execute()) {
            echo "<script>alert('Data successfully inserted!');</script>";
        }
    }
}
?>




</body>
</html>