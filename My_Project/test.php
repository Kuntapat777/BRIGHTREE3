<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="data/imges/img9.png" alt="Logo"> <!-- เพิ่ม alt attribute เพื่อเพิ่มความสามารถในการเข้าถึง -->
        </a>
        
        <ul class="navlist">
            <li><a href="#">About</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <div class="right-content">
            <a href="login.html" href="#" class="nav-btn">Sign In</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h5 data-aos="fade-right" data-aos-duration="1400">Wellcome to</h5>
            <h1 data-aos="zoom-in-left" data-aos-duration="1400"data-aos-delay="200"> BRIGHTREE</h1>
            <p  data-aos="fade-right" data-aos-duration="1400"data-aos-delay="300">
                Let us take care of your trees.</p>

            <div class="main-hero"data-aos="flip-down" data-aos-duration="1400"data-aos-delay="400">
                <a href="teaser.html" href="#" class="btn">Explore Now</a>
            </div>
        </div>

        <div class="hero-img"data-aos="zoom-in" data-aos-duration="1400">
            <img src="data/imges/img6.png"alt="Logo">

        </div>

    </section>


    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset:1,
      });
    </script>
</body>
</html>

<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: "Roboto", sans-serif;
}
.logo img {
    width: 80px; /* ปรับความกว้างของภาพ */
    height: auto; /* ให้ความสูงปรับตามความกว้างเพื่อรักษาสัดส่วน */
    max-width: 100%; /* ทำให้ภาพไม่เกินขอบเขตของผู้ปกครอง */
    filter: drop-shadow(1px 1px 1px rgba(4, 226, 63,20));
}
:root{
    --bg-color: #0c0c0c;
    --text-color: #fff;
    --main-color: #e7e728;

    --big-font: 6.2rem;
    --p-font: 1rem;
}

body{
    background: var(--bg-color);
    color: #eee;
    background-size: cover;
    background-position: center;
}
header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    padding: 35px 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: all .50s ease;
}
.navlist{
    display: flex;
    background-image: linear-gradient(50deg,rgb(0,183,255),rgb(255,48,255));
}
.navlist a{
    display: inline-block;
    margin: 0 35px;
    color: var(--text-color);
    font-size: var(--p-font);
    transition: all .6s ease;
}
.navlist a:hover{
    color: var(--main-color);
    transform: translateY(-5px);    
}
.right-content{
    display: flex;
    align-items: center;
}
.nav-btn{
    display: inline-block;
    padding: 9px 24px;
    background: transparent;
    border: 2px solid var(--text-color);
    border-radius: 7px;
    color: var(--text-color);
    font-size: 500;
    transition: all .6s ease;
}
.nav-btn:hover{
    transform: translateY(-5px);
    border: 2px solid var(--main-color);
    color: var(--main-color);
}
#menu-icon{
    font-size: 42px;
    z-index: 10001;
    cursor: pointer;
    margin-left: 25px;
    display: none;
}
.hero-img img {
    width: 500px; /* ปรับความกว้างของภาพ */
    height: auto; /* ให้ความสูงปรับตามความกว้างเพื่อรักษาสัดส่วน */
    max-width: 100%; /* ทำให้ภาพไม่เกินขอบเขตของผู้ปกครอง */
}
section{
    padding: 0 14%;
}
.hero{
    position: relative;
    width: 100%;
    height: 100vh;
    background: url(data/imges/img5.jpg);
    background-size: cover;
    background-position: right 5px ;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 2rem;
}
.hero-text h1{
    font-size: var(--big-font);
    font-weight: 900;
    margin: 15px 0;
}
.hero-text h5{
    font-size: 18px;
    font-weight: 400;
    letter-spacing: 1px;
}
.hero-text p{
    width: 100%;
    max-width: 620px;
    font-size: var(--p-font);
    font-weight: 400;
    line-height: 32px;
    color: var(--text-color);
    margin-bottom: 40px;
}
.main-hero{
    display: flex;
    align-items: center;
    box-shadow: rgba(159, 0, 0, 0.8);
}
.btn{
    display: inline-block;
    padding: 13px 32px;
    background: black;
    border: 2px solid transparent;
    border-radius: 7px;
    font-size: 15px;
    font-weight: 500;
    transition: all ,6s ease;
    margin-right: 20px;
    color: var(--text-color);
    box-shadow: 1px 2px 2px rgba(4, 226, 63,0.8);
    filter: drop-shadow(1px 1px 1px rgba(4, 226, 63,0.8));
}
.btn:hover{
    transform: scale(1.1);
}
.price{
    display: flex;
    align-items:  center;
    font-size: 28px;
    font-weight: bold;
    color: var(--text-color);
}
.price span{
    font-size:17px;
    font-weight: 400;
    color: var(--main-color);
    margin-left: 10px;;
}
.icons{
    position: absolute;
    top: 50%;
    padding: 0 7%;
    transform: translate(-30%);
}
.icons i{
    display: block;
    margin: 35px 0;
    color: var(--text-color);
    font-size: 23px;
    transition: all .6s;
}
.icons i:hover{
    transform: translateY(-5px);
    color: var(--main-color);
}
.scroll{
    position: absolute;
    top: 92%;
    right: 7%;
    transform: translateY(-50%);
}
.scroll a{
    font-size: 16px;
    color: var(--text-color);
}
.scroll i{
    font-size: 20px;
    color: var(--text-color);
    margin-right: 6px;
}

@media(max-width: 1770px){
    header{
        padding: 22px 4%
    }
    .icons{
        padding: 0 4%;
    }
    .scroll{
        right: 4%
    }
}    
@media(max-width: 1670px){
    :root{
        --big-font: 5.5rem;
        --p-font: 15px;
    }
}
@media(max-width: 1370px){
    .icons{
        display: none;
    }
    section{
        padding: 0 4%;
    }
}
@media(max-width: 1150px){
    :root{
        --big-font: 4.6rem;
    }
    .price{
        font-size: 20px;
    }
    .btn{
        padding: 10px 23px;
    }
}
@media(max-width: 950px){
    #menu-icon{
        display:block;
    }
    .navlist {
        position: absolute;
        width: 100%;
        height: 100vh;
        padding: 100px 50px;
        top: 0;
        right: 0;
        bottom: 0;
        left: 100;
        display: flex;
        flex-direction: column;
        backdrop-filter: blur(32px);
        transition: all .6s ease-in-out;
        background-image: linear-gradient(180deg,rgb(0,183,255),rgb(255,48,255));
    }
    .navlist a{
        display: block;
        padding: 0;
        margin: 0px 0px 25px 0px;
        font-size: 1.7rem;
    }
    .navlist.open {
        left: 0;

    }
}

@media(max-width: 950px){
    .scroll{
        display: none;
    }
    .hero{
        grid-template-columns: 1fr;
        height: auto;
    }
    .hero-text{
        padding-top: 130px;
    }
    .hero-img{
        height: 500px;
        width: 500px;
        margin: 0 auto;
    }
    .hero-img img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
}

@media(max-width: 570px){
    .hero{
        height:100vh;
    }
    .hero-img{
        height: 400px;
        width: 500px;
        margin: 0 auto;
    }
    :root{
        --big-font: 4rem;
    }
}
</style>