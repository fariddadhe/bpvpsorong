<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPVP SORONG - Website Resmi</title>
    <link rel="shortcut icon" href="favicon.ico">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>

        body {
          background-image: url("img/home/bg-bpvp-sorong.webp");
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          position: relative;
        }

        .bitma {
            width: 40%;
        }
        .bitma img:hover {
            filter: drop-shadow(0px 1px 5px rgb(120, 250, 255));
        }

        .logo {
            width: 30%;
        }

        .logo img:hover {
            filter: drop-shadow(0px 1px 2px rgb(0, 4, 255));
        }

        .hero {
            width: 57%;
        }

        .menu img {
            filter: drop-shadow(2px 2px 20px rgb(0, 4, 93)); 
        }
        
        .menu img:hover {
            filter: drop-shadow(2px 2px 10px rgb(0, 10, 255));
        }

        .hr {
            border: 1px solid blue;
            align-content: center;
        }

        @media only screen and (max-width: 768px) {
        /* For mobile phones: */

        body {
          background-image: url("img/home/bg-bpvp-sorong-mobile.webp");
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          position: relative;
        }
        
        .bitma {
            width: 100%;
        }

        .logo {
            width: 80%;
            margin-top:20px;
        }

        .hero {
            width: 100%;
            margin-top: 20px;
        }

        .menu {
            margin-left: 18%;
        }

        .menu img{
            margin-top:10px;
        }

        .menu img:hover {
            filter: drop-shadow(2px 2px 10px rgb(0, 10, 255));
        }

        }

        </style>
</head>
<body style="top:0; bottom:0; background-color:black;"> 
    <div class="bitma mx-auto">
        <a href="/">
            <img src="img/home/bpvp-sorong-bitma.png" class="mx-auto d-block" alt="..." width="100%" style="margin-top:0%;">
        </a>
    </div>
    <div class="logo mx-auto">
        <a href="/">
        <img src="img/home/logo-bpvp-sorong-tech.webp" class="mx-auto d-block" alt="..." width="100%" style="margin-top:2%;">
        </a>
    </div>
    <div class="hero mx-auto">
        <img src="img/home/hero-bpvp-sorong-oke.webp" class="mx-auto d-block" alt="..." width="100%" style="margin-top:-2%;">
    </div>
    <div class="menu" style="margin-top:1%;">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <a href="/web">
                    <img src="img/home/btn-website.webp" class="d-block" alt="website" height="80px">
                    </a>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <a href="/login">
                    <img src="img/home/btn-login.webp" class="d-block" alt="login" height="80px">
                    </a>    
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <a href="https://account.kemnaker.go.id/register" target="_blank">
                    <img src="img/home/btn-daftar.webp" class="d-block" alt="daftar" height="80px">
                    </a>
                </div>
                <div class="col-sm-2"></div>
            
            </div>
        </div>
    </div>
    {{-- <hr class="hr"> --}}
       <p style="text-align:center; margin-top:30px; font-size: 7.5pt; color:rgb(160, 160, 160);">
            ©
            <script>document.write(new Date().getFullYear())</script>
            <a href="/" style="text-decoration: none; color:rgb(200, 200, 200);">
            BPVP SORONG</a>  - Developed by <a href="https://instagram.com/mail_hb" target="_blank" style="text-decoration: none; color:rgb(200, 200, 200);">MailHB</a> 
        </p>    
</body>
</html>