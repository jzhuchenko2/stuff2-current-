<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>NextRecruit - Connect With Decision-Makers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>
<body>
    <nav class="navbar">
        <div class="navbar__container">
            <a href="index.php" id="navbar__logo"><img src="images/logoppp.png"></a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            
            <ul class="navbar__menu">
                <!--<i class="fa fa-times" onclick="hideMenu()"></i> For the mobile navigation system-->
                    <li class="navbar__item"><a href="whatwedo.html" class="navbar__links">What We Do</a></li>
                    <li class="navbar__item"><a href="pricing.php" class="navbar__links">Pricing</a></li>
                    <li class="navbar__item"><a href="" class="navbar__links">Education</a></li>
                    <li class="navbar__item"><a href="" class="navbar__links">Early Access</a></li>
                    <li class="navbar__item"><a href="" class="navbar__links">Contact Us</a></li></ul>
            <ul class="navbar__sl">
                    <li class="navbar__btn"><a href="" class="button1">SignUp</a></li>
                    <li class="navbar__btn"><a href="" class="button1">Login</a></li>
            </ul>
        </div>
        </nav>   
<!--------Facts--------->
<section class="body1">
<div class="container">
    <div class="container69">
    <span class="text1">Choose Your Plan</span>
    <span class="text2">
        <div class="toggle-switch">
        <span>Billed anually </span>
        <input type="checkbox" class="toggler">
        <span> Billed monthly</span>
  </div>
    </span>
    </div>

  
  <div class="cards">
    <!-- Starter Plan -->
      <div class="card" id="card-1">
        <h1 class="card-title">Starter</h1>
        <h2 class="card-price" id="starter-price"> $19 <span> / month</span> </h2>
        <ul class="card-plan">
            <li> 500MAUs</li>
            <li> 3 projects</li>
            <li>Unlimted guides</li>
            <li>Unlimted flows</li>
            <li>Unlimted branded thems</li>
            <li>Email Support</li>
        </ul>
        <button type="button" class="card-btn"> Choose Plan</button>
      </div>
      <!-- Pro Plan -->
      <div class="card active" id="card-2">
        <h1 class="card-title">Pro</h1>
        <h2 class="card-price" id="pro-price"> $99 <span> / month</span> </h2>
     
        <select  id="maus">
            <option value="500">500 MAUS</option>
            <option value="100">1000 MAUS</option>
            <option value="1500">1500 MAUS</option>
            <option value="2000">2000 MAUS</option>
            <option value="2500">2500 MAUS</option>
        </select>
        <span class="note"> Monthely active users </span>
     
        <ul class="card-plan">
            <li> All starter featured ,Plus : </li>
            <li> Unlimted projects</li>
            <li>Unlimted fully customizable themes</li>
            <li>A dedicated customer Success Manager</li>
        </ul>
        <button type="button" class="card-btn"> Choose Plan</button>
      </div>
      <!-- Enterpise Card -->
      <div class="card" id="card-3">
        <h1 class="card-title">Enterprise</h1>
        <h2 class="card-price"> Let's Talk! </h2>
        <ul class="card-plan">
            <li> All pro featured</li>
            <li> Unlimted MAUs</li>
            <li> Detected enviroment</li>
            <li> Enterprise account administration</li>
            <li> Premium account and services</li>
        </ul>
        <button type="button" class="card-btn"> Contact Us</button>
      </div>
  </div>
</div>
</section>
<!----Footer----->
<div class="footer__container">

    <h1>Time to Dictate Your Future</h1>
    <div class="h1container">
    <form action="insert.php" method="post" id="form">
        <div class="inputbox">
            <label for="email"></label><input type="email" class="form-control" id="email" for="email" placeholder="Enter Email Address" name="email" required>
                <input type="submit" value ="Start for Free" name="" class="main__btn">
            <span id="text"></span>
        </div>
    </form>
    </div>
    <div class="footer__links">
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2>Product</h2>
                <a href="/">Pricing</a>
            </div>
            <div class="footer__link--items">
                <h2>Information</h2>
                <a href="/">Data Source</a>
            </div>
        </div>
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2>Legal</h2>
                <a href="/">Terms of Service</a>
                <a href="/">Privacy Policy</a>
                <a href="/">Opt out</a>
                <a href="/">Do not sell my info</a>
            </div>
            <div class="footer__link--items">
                <h2>Resources</h2>
                <a href="/">Blog</a>
                <a href="/">What We Do</a>
                <a href="/">Contact us</a>
            </div>
        </div>
        <div class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="index.html" id="footer__logo"><img src="images/logoppp.png"></a>
                </div>
                <p class="website__rights">© NEXT RECRUIT 2022. All rights reserved</p>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const toggler = document.querySelector(".toggler");
const starterPrice = document.getElementById("starter-price");
const proPrice = document.getElementById("pro-price");
toggler.addEventListener("change", ()=>{
    if(toggler.checked){
        starterPrice.innerHTML = `$200 <span> / year </span>`;
        proPrice.innerHTML = `$1000 <span> / year </span>`;
    }else{
        starterPrice.innerHTML = `$19 <span> / month </span>`;
        proPrice.innerHTML = `$99 <span> / month </span>`; 
    }
})
</script>
<script src="app.js"></script>

</body>
</html>









<style>
*{
    box-sizing: border-box;
    margin:0;
    padding:0;
    /*visit google fonts for the html and CSS font link!*/
    font-family: 'Anton', sans-serif;
}
.container69 span{
    display: block;
}
.text1{
    font-size: 60px;
    font-weight: 700;
    letter-spacing: 15px;
    margin-bottom: 20px;
    width: 100%;
    background-color: #191b1d;
    position: relative;
    animation: text 1.6s 1;
}
.text2{
    font-size: 30px;
    font-weight: 700;
    letter-spacing: 4px;
    color: #ffffff;
}
@keyframes text{
    0%{
        margin-bottom: -40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: -40px;
    }
    85%{
        letter-spacing: 8px;
        margin-bottom: -40px;
    }
}
.body1{
  font-family: Arial, Helvetica, sans-serif;
  background-color: #191b1d;
  color: #c2591c;
  height:100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.container {
  text-align: center;
  width: 1100px;
  height: 100%;
}
.toggle-switch{
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin-bottom: 1.5rem;
}
.toggler{
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 50px;
    height: 25px;
    background-color: #c2591c;
    border-radius: 25px;
    margin: 0 1rem;
    position: relative;
}
.toggler::before{
    content: "";
    width: 16px;
    height: 16px;
    background-color: white;
    position: absolute;
    border-radius: 50%;
    top:50%;
    transform: translateY(-50%);
    right:4px;
}
.toggler:checked:before{
    right: 55%;
}
.cards{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    flex-wrap: wrap;
    height: 100px;
    filter: blur(.4rem);
}
.card{
   height: 500px;
   width: 32%;
   background-color: #22262C;
   border-radius: 15px;
   padding: 2rem;
   text-align: center;
}
.card-title{
    font-size: 1.5rem;
    font-weight: lighter;
    margin-bottom: 1rem;
}
.card-price{
    font-size: 3rem;
    text-align: center;
}
h2>span{
    font-size: 1rem;
}
#card-3 .card-price{
    font-size: 2rem;
}
#card-1 .card-price{
    margin-bottom: 4rem;
}
.card ul{
    text-align: left;
    font-size: 0.9rem;
    font-weight: lighter;
}
.card ul li:before{
    content:"•";
    margin-right: 0.5rem;
    color:#c2591c;
    font-size: 1.5rem;
}
.card ul li{
    margin-bottom: 0.5rem;
}
.card-btn{
    margin-top: 1rem;
    width: 100%;
    background-color: transparent;
    border: 1px solid #c2591c;
    color:white;
    font-size: 1rem;
    padding: 1rem;
    border-radius: 5px;
}
#card-1 .card-btn:hover, 
#card-3 .card-btn:hover, 
.active .card-btn
{
    background-color: #c2591c;
}
#maus{
  background: transparent;
  color:white;
  border-color: #545c5c;
  margin-top: 1rem;
  width: 100%;
  padding: 1rem 2rem;
  font-size: 1rem;
  border-radius: 5px;
}
option{
    font-size: 1.2rem;
    background-color: #333;
}
.note{
    color:#c2591c;
    font-size: 0.75rem;
    text-align: left;
    display: block;
    margin-top: 5px;
}
#card-2 ul{
    margin-top: 3rem;
}
#card-3 ul{
    margin-top: 7.5rem;
}
@media (max-width:1112px){
    .cards{
        justify-content: center;
    }
    .card{
        width: 40%;
    margin: 2rem;
    }
}
@media (max-width:848px){
    .card{
        width:50%
    }
}
@media (max-width:674px){
    .top-banner{
        width: 70%;
    }
    .card{
        width: 70%;
    }
}
@media (max-width:500px){
    .top-banner{
        width: 90%;
    }
    .card{
        width: 90%;
    }
}









.navbar{
    height: 100px;
    background: #000000;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    position: sticky;
    top: 0;
    z-index: 999;
    
}
.navbar__container{
    display:flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 auto;
    z-index:1;
    max-width: 1300px;
    width: 100%;
    padding: 0 50px;
}
.navbar__container img{
    width: 120px;
    height: 90px;
    padding-top: 10px;
}
#navbar-logo{
    display: flex;
    align-items: left;
    cursor: pointer;
    text-decoration: none;
}
.navbar__menu{
    display: flex;
    align-items: center;
    list-style: none;
    text-align: center;
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 30px;
    font-family: 'Josefin Sans', Santiago Orozco;
}
.navbar__item{
    height: 80px;
    letter-spacing: 0.2em;
}
.navbar__links{
    color: rgb(255, 255, 255);
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    padding: 0 1rem;
    height: 60%;
    font-size: 15px;
}
.navbar__sl{
    display: flex;
    align-items: center;
    list-style: none;
    text-align: center;
    width: 30%;
    margin: auto;
    text-align: center;
    padding-top: 30px;
    padding: 0 1rem;
    font-size: 20px;
}
.navbar__btn{
    display:flex;
    justify-content: center;
    text-align: center;
    list-style: none;
    width: 100%;
    float: right;
    margin: auto;
    padding: 10px;

}
.button1{
    display: flex; 
    justify-content: center;
    align-items: center;
    text-decoration: none;
    padding: 10px 20px;
    height:100%;
    width: 100%;
    border: none;
    outline: none;
    border-radius: 4px;
    background: #c2591c;
    color: #fff;
}
.button1:hover{
    background: #c0915c;
    transition: all 0.3s ease;
}
.navbar__links:hover{
    color:#c2591c;
    transition: all 0.3s ease;
}
@media screen and (max-width: 960px){
    .navbar__container{
        display:flex;
        justify-content: space-between;
        height: 80px;
        z-index: 1;
        width: 100%;
        max-width: 1300px;
        padding: 0;
    }
    .navbar__menu{
        display: grid;
        grid-template-columns: auto;
        margin:0;
        width: 100%;
        position: absolute;
        top: -1000px;
        opacity: 0;
        transition: all 0.5s ease;
        height: 50vh;
        z-index: -1;
        background: #000000;
    }
    .navbar__menu.active{
        background: #000000;
        top: 100%;
        opacity: 1;
        transition: all 0.5s ease;
        z-index: 99;
        height: 70vh;
        font-size: 1.6rem;
    }
    #navbar__logo{
        padding-left: 25px;
    }
    .navbar__sl .button1 {
        margin-left: -140px;
        padding: 10px;
        margin-top: 6px; 
    }
    .navbar__toggle .bar {
        width: 25px;
        height: 3px;
        margin: 5px auto;
        transition: all 0.3s ease-in-out;
        background: #fff;
    }
    .navbar-item{
        width: 100%;
    }
    .navbar__links{
        text-align: center;
        padding: 2rem;
        width: 100%;
        display: table;
    }
    #mobile-menu {
        position: absolute;
        top:20%;
        right: 5%;
        transform: translate(5%, 20%);
    }
    .navbar__btn {
        padding-bottom: 2rem;
         width: 100px;
        max-height: 70px;
    }
    .navbar__toggle .bar {
        display: block;
        cursor: pointer;
    }
    #mobile-menu.is-active .bar:nth-child(2) {
        opacity: 0;
    }
    #mobile-menu.is-active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }
    #mobile-menu.is-active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }
    .main .titlemain {
        line-height: 33px;
    }
}
/*Hero Section CSS*/
.main{
    background-color: #212121;
}
.main__container{
    font-family: 'Anton', sans-serif;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    margin: 0 auto;
    height: 67vh;
    background-color: #212121;
    z-index:1;
    width: 100%;
    max-width: 1300px;
    padding: 0 50px;
}
/*.main__content h1{
    font-size: 4rem;
    background-image: linear-gradient(to top, #f5752b 0%, #c2591c 100% );
    /*background-image: linear-gradient(to top, #b15111  0%, #94af18 100%);
    background-size: 100%;
    font-family: 'Raleway', sans-serif;
    -webkit-background-clip: text;
    -moz-background-clip: text;
    -webkit-text-fill-color: transparent; 
    -moz-text-fill-color: transparent;
}*/
/*.main__content h2{
    font-size: 4rem;
    background-image: linear-gradient(to top, #f5752b 0%, #c2591c 100% );
    /*background-image: linear-gradient(to top, #a20f0f 0%, #d86614 100%);
    background-size: 100%;*/
.titlemain {
        color: #c2591c;
        text-transform: uppercase;
        line-height: 40px;
        font-size: 4rem;
        font-family: 'Raleway', sans-serif;
        padding: 5px;
        }
        .title-content{
        display: legacy;
        opacity: 0;
        animation: revealText 2.0s forwards;
        }
        .title-second{
        animation-delay: .675s;
        }
        .title-third{
        animation-delay: .95s;
        }
        .title-fourth{
        animation-delay: 0.9s;
        }
        @keyframes revealText {
        from{
        transform: translateY(20px);
        }
        to{
        opacity: 1;
        transform: none;
        }}
.main__content p{
    margin-top: 1rem;
    font-size: 1rem;
    font-weight: 500;
    color: #fff;
}
input[type="text"] {
    width: 220px;
    height: 30px;
    padding-right: 50px;
}
@media screen and (max-width: 331px) {
    .main__content h1{
        font-size: 2rem;
        margin-top: 3rem;
    }
    .main-content p {
        margin-top: 2rem; 
        font-size: 1.5rem;
    }
    .main__btn {
        padding: 12px 36px;
        margin: 2.5rem 0;
    }
    .main__img--privacy {
        font-size: 2rem;
        margin-top: 3rem;
    }
}
@media screen and (max-width: 768px) {
   .main__content {
       width: 150%;
   }
   .main__container {
       /*grid-template-columns: 6fr 10fr;*/
       padding: 0 90px;
       padding-bottom: 100px;
   }
   .titlemain {
    letter-spacing: 1px;
    font-size: 60px;
    padding: 5px;
    margin-bottom: 20px;
   }
   .main__img--container {
    width: 330px;
    height: 280px;
    margin-bottom: 190px;
    margin-left: -110px;
   }
   .button1 {
    width: 80px;
    padding: 30px;
   }
}

#form{
    position: relative;
    text-align: center;
    padding: 40px;
}
#form #email{
    width: 270px;
    background: #543e30;
    outline: none;
    border: none;
    padding: 10px;
    border-radius: 6px;
    color: rgb(248, 248, 248);
    font-style: 28px;
}
.main__btn{
    font-size: 1rem;
    background-image: linear-gradient(to top, #f5752b 0%, #c2591c 100% );
    padding: 10px 18px;
    padding-top: 8px;
    border: none;
    border-radius: 4px;
    color: #fff;
    margin-top: 1rem;
    cursor: pointer;
    position: relative;
    transition: all 0.35s;
    outline: none;
    margin-left:-12px;
}
.main__btn a{
    position: relative;
    z-index: 2;
    color: #fff;
    text-decoration: none;
}
.main__btn:after{
    position: absolute;
    content: '';
    top:0;
    left: 0;
    width: 0;
    height: 100%;
    background: #635f5a;
    transition: all 0.35s;
    border-radius: 4px;    
}
.main__btn:hover{
    color: rgb(208, 98, 2);
}
.main__btn:hover:after{
    width: 100%;
}
.main__img--container{
    text-align: center;
    bottom: 100px;
}
.main__img--privacy{
    padding-top:5px;
}
#main__img{
    height: 100%;
    width: 100%;
}

/*___--____-___-_--mobile stuff--_-__--------____*/

@media screen and (max-width: 620px) {
    .main__img--container {
        display: none;
    }
    .navbar__container .navbar__sl .navbar__btn .button1 {
        margin-left: -210%;
        width: 65px;
    }
}
@media screen and (max-width: 500px) {
    .main__content {
        width: 80%;
    }
    .inputbox .main__btn {
        margin-left: 260px;
    }
    .main__btn {
        top: -51.5px;
    }
    .main__img--privacy {
        margin-bottom:20px;
    }
    .inputbox {
        margin-bottom:-20px;
        padding-top: 20px;
    }
}
@media screen and (max-width: 460px) {
    .main__content {
        margin-left: -20%;
    }
} 
@media screen and (max-width: 375px) {
    .main__btn {
        right:10px;
    }
    .titlemain {
        text-align: center;
        font-size: 40px;
    }
    .main__content p {
        text-align: center;
    }
    #main__img1 {
        width: 320px;
        position: relative;
        top:-13px;
    }
}


/*-------Course????: which -----*/
.course{
    width: 100%;
    margin: auto;
    text-align: center;
    padding-top: 3x;
    background-color:rgb(255, 255, 255);
    height: 150px;
}
.course h1 {
    display: inline-block;
    position: relative; 
    color: #000000;
    /*font-size: 30px;*/
    padding: 1px;
    width: 100%;
    text-align: center;
    font-family: 'Anton', sans-serif;
    letter-spacing: 0.2em;
    font-weight: 800;
}
.course img{
    padding-top: 1px;
    height: 3px;
    width: 2px;
    margin: 20px 20px 20px 20px;
}
@media screen and (max-width: 375px) {
    .course img {
        margin: 10px 10px 10px 10px;
    }
}
#navbar__logo3{
    width: 90px;
    height: 60px;
}
#navbar__logo4{
    width: 100px;
    height: 60px;
}
#navbar__logo5{
    width: 100px;
    height: 70px;
}
#navbar__logo11{
    width: 90px;
    height: 60px;
}
#navbar__logo12{
    width: 90px;
    height: 50px;
}
#navbar__logo14{
    width: 90px;
    height: 60px;
}
#navbar__logo15{
    width: 90px;
    height: 60px;
}
#navbar__logo17{
    width: 80px;
    height: 60px;
}
#navbar__logo18{
    width: 70px;
    height: 60px;
}
#navbar__logo19{
    width: 70px;
    height: 60px;
}
#navbar__logo20{
    width: 40px;
    height: 40px;
    position: relative; 
    top: -10px;
}
@media(max-width: 700px){
    .row{
        flex-direction: column;
    }
}

/*-------Facts-----*/

@media screen and (max-width: 375px) {
    .facts .firsta .firstacontainer .accuracy {
        position: relative;
        margin-left: -100px;
        margin-top:-90px;
    }
    .emails {
        position: relative;
        margin-left: -130px;
        margin-top:170px;
    }
    .Leader {
        position:relative;
        margin-left: -230px;
        margin-top:65px; 
    }
    .firsta p {
        font-size: medium;
    }
    .firsta h2 {
        font-size: 29px;
    }
    #firstaimg {
        width: 170px;
        height: 180px;
        margin-top: 570px;
        margin-right: 110px;
    }
    .facts .firstb .firstbcontainer .accuracyb {
        position: relative;
        margin-left: -220px;
        margin-top:370px;
    }
    .Leaderb {
        position:relative;
        margin-left: -50px;
        margin-bottom:-170px; 
    }
    .emailsb{
        position: relative;
        margin-left: -70px;
        margin-bottom:-110px;
    }
    .firstb p {
        font-size: medium;
    }
    .firstb h2 {
        font-size: 29px;
    }
    #firstbimg {
        width: 170px;
        height: 180px;
        margin-top: -350px;
        margin-left: 80px;
    }
    .facts {
        height: 1500px;
    }
}

.facts {
    position: relative;
    min-height: 120vh;
    width: 100%;
    background-color:rgb(255, 255, 255);
    overflow: hidden;
    box-sizing: border-box;
}
.facts h1 {
    font-size: 2rem;
    background-image: linear-gradient(to top, #f5752b 0%, #c2591c 100% );
    background-size: 100%;
    padding-top: 40px;
    letter-spacing: 0.2em;
    font-weight: 600;
    -webkit-background-clip: text;
    -moz-background-clip: text;
    -webkit-text-fill-color: transparent; 
    -moz-text-fill-color: transparent;
    font-family: 'Raleway', sans-serif;
}



@media screen and (max-width: 1250px) {
    .facts .firsta .firstacontainer .accuracy {
        top: 100px;
        left: 200px;
        width: 40%;
    }
    .facts .firsta .firstacontainer .Leader {
        top: 100px;
        left: 650px;
        width: 45%;
    }
    .facts .firsta .firstacontainer .emails {
        top: 250px;
        left: 440px;
        width: 40%;
    }
    .facts .firsta .firstacontainer img {
        width: 370px;
        height: 380px;
        transition: transform 1s;
        margin-top: 390px;
        margin-right: 440px;
    }
    .firstb .leads {
        margin-top: 60px;
    }
    .firstb .firstbcontainer .accuracyb {
        bottom: 500px;
        left: 500px;
        width: 40%;
    }
    .firstb .firstbcontainer .Leaderb {
        bottom: 500px;
        left: 30px;
        width: 50%;
    }
    .firstb .firstbcontainer .emailsb {
        bottom: 400px;
        left: 290px;
        width: 40%;
    }
    .firstb .firstbcontainer img {
        width: 370px;
        height: 380px;
        transition: transform 1s;
        margin-bottom: -10px;
        margin-left: 440px;
    }
}

@media screen and (max-width: 768px) {
    .facts .firsta .firstacontainer .accuracy {
        top: 100px;
        left: 70px;
        width: 60%;
    }
    .facts .firsta .firstacontainer .Leader {
        top: 100px;
        left: 400px;
        width: 60%;
    }
    .facts .firsta .firstacontainer .emails {
        top: 250px;
        left: 200px;
        width: 70%;
    }
    .facts .firsta .firstacontainer img {
        width: 290px;
        height: 280px;
        transition: transform 1s;
        margin-top: 390px;
        margin-right: 220px;
    }
    .firstb .leads {
        margin-top: 3px;
    }
    .firstb .firstbcontainer .accuracyb {
        bottom: 450px;
        left: 370px;
        width: 40%;
    }
    .firstb .firstbcontainer .Leaderb {
        bottom: 500px;
        left: 1px;
        width: 50%;
    }
    .firstb .firstbcontainer .emailsb {
        bottom: 320px;
        left: 90px;
        width: 60%;
    }
    .firstb .firstbcontainer img {
        width: 290px;
        height: 280px;
        transition: transform 1s;
        margin-top: 300px;
        margin-left: 250px;
    }

}

.accuracy {
    position:absolute; 
    left:37px; 
    top:200px;
    font-size: 24px;
}
.Leader {
    position:absolute; 
    top: 200px;
    width: 32%;
    left: 500px;
    font-size: 24px;
}
.emails {
    position:absolute;
    left: 210px;
    top: 400px;
    font-size: 24px;
}
/*.firstacontainer {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    margin: 0 auto;
    height: 67vh;
    /*background-color: #000000;
    z-index:1;
    width: 100%;
    max-width: 1300px;
    padding: 0 50px;*/
.firsta {
    width: 100%;
    right: 100px;
    height: 800px;
}
.firstacontainer img {
    float: right;
    width: 530px;
    height: 480px;
    transition: transform 1s;
    margin-top: 130px;
}
.firstacontainer:hover img {
    transform: scale(.80);
}
.firsta .containert {
    width: 70%;
    color: rgb(0, 0, 0);
    float: left;
    padding: 50px;
    top: 900px;
    /*border: .5px solid red;
    position: relative;
    width: 300px;
    color: rgb(193, 90, 26);
    margin: 10px 10px;
    padding: 30px 10px;
    border-radius: 3px;
    transition: 0.3s ease;*/
}
.firsta .containert h2 {
    color:rgb(206, 89, 22)
}
.leads {
    bottom: 100px;
    letter-spacing: 0.2em;
}
.firstb {
    width: 100%;
    left: 100px;
    height: 700px;
}
.firstb .containertb {
    width: 70%;
    float: right;
    padding: 20px;
    top: 200px;
    /*border: 5px solid red;*/
    color: rgb(0, 0, 0);
}
.firstb .containertb h2 {
    color:rgb(206, 89, 22)
}
.accuracyb {
    position:absolute; 
    right:60px; 
    bottom:155px;
    font-size: 24px;
}
.Leaderb {
    position:absolute; 
    bottom: 130px;
    width: 27%;
    right: 490px;
    font-size: 24px;
}
.leaderb .profile {
    width: 10px;
    height: 10px;
}
.emailsb {
    position:absolute;
    right: 250px;
    bottom: 360px;
    font-size: 24px;
}
.firstbcontainer img {
    float: left;
    width: 530px;
    height: 480px;
    transition: transform 1s;
    margin-top: 130px;
}
.firstbcontainer:hover img {
    transform: scale(.80);
}

/*------footer-------*/
.footer__container {
    background-image: linear-gradient(#191b1d,rgb(79, 79, 79),black, rgb(0, 0, 0), rgb(0, 0, 0));
    padding: 5rem 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
}
.h1container {
    height: 150px;
    width: 100%;
}
.footer__container h1 {
    font-size: 2rem;
    background-image: linear-gradient(to top, #f5752b 0%, #c2591c 100% );
    background-size: 100%;
    padding-top: 30px;
    letter-spacing: 0.2em;
    -webkit-background-clip: text;
    -moz-background-clip: text;
    -webkit-text-fill-color: transparent; 
    -moz-text-fill-color: transparent;
    font-family: 'Raleway', sans-serif;
    bottom: 50px;
}
#footer__logo{
    color: rgb(206, 89, 22);
    display: flex;
    align-items: center;
    cursor: pointer;
    text-decoration: none;
    font-size: 2rem;
}
.footer__logo img {
    width: 100px;
    height: 80px;
    padding-top: 5px;
}
.footer__links {
    width: 100%;
    max-width: 1000px;
    display: flex;
    justify-content: center;
}
.footer__link--wrapper {
    display: flex;
}
.footer__link--items {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin: 16px;
    text-align: left;
    width: 160px;
    box-sizing: border-box;
}
.footer__link--items h2 {
    margin-bottom: 16px;
}
.footer__link--items > h2 {
    color: #fff;
}
.footer__link--items a {
    color: #fff;
    text-decoration: none;
    margin-bottom: 0.5rem;
}
.footer__link--items a:hover {
    color: #d17518;
    transition: 0.3s ease-out;
}

/*----Social Icons----*/
.social__icon--link {
    color: #fff;
    font-size: 24px;
}
.social__media {
    max-width: 1000px;
    width: 100%;
}
.social__media--wrap {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    max-width: 1000px;
    margin: 40px auto 0 auto;
}
.social__icons {
    display: flex;
    justify-content: space-between; 
    align-items: center;
    width: 240px;
}
.social__logo {
    color: #fff;
    justify-self: flex-start;
    margin-left: 20px;
    cursor: pointer;
    text-decoration: none;
    font-size: 2rem;
    display: flex;
    align-items: center;
    margin-bottom: 16px;
}
.website__rights {
    color: #fff;
}
@media screen and (max-width: 820px) {
    .footer__links {
        padding-top: 2rem;
    }
    #footer__logo {
        margin-bottom: 2rem;
    }
    .website__rights {
        margin-bottom: 2rem;
    }
    .footer__link--wrapper {
        flex-direction: column;
    }
    .social__media--wrap {
        flex-direction: column;
    }
}
@media screen and (max-width: 480px) {
    .footer__link--items {
        margin: 0;
        padding: 10px;
        width: 100%;
    }
}
</style>
<script > const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navbar__menu')

menu.addEventListener('click', function(){
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
});

const faders = document.querySelectorAll('.logos-fade-in');

const appearOptions ={
    threshold: 1,
    rootMargin: "0px 0px -100px 0px"
};

const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting){
            return;
        } else {
            entry.target.classList.add('appear');
            appearOnScroll.unobserve(entry.target);
        }
    })
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe (fader);
}) </script>