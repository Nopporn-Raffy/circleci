<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<title>Responsive Website design with flexbox</title>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: poppins;
        }
        ul, nav {
            list-style: none;
        }
        a {
            text-decoration: none;
            cursor: pointer;
            color: inherit;
        }
        header {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
            width: 100%;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            padding: 35px 100px 0;
        }
        header h2 {
            text-transform: uppercase;
        }
        header nav {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
        }
        header nav li {
            margin: 0 15px;
        }
        header nav li:first-child {
            margin-left: 0;
        }
        header nav li:last-child {
            margin-right: 0;
        }
        @media(max-width:1000px) {
            header {
                padding: 20px 50px;
            }
        }
        @media (max-width:700px) {
            header {
                flex-direction: column;
            }
            header h2 {
                margin-bottom: 15px;
            }
            header nav li {
                margin: 0 7px;
            }
        }
        /*banner area*/

        section {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 110px 100px;
        }
        @media (max-width:1000px) {
            section {
                padding: 100px 50px;
            }
        }
        @media (max-width:600px) {
            section {
                padding: 125px 30px;
            }
        }
        section p {
            max-width: 800px;
            text-align: center;
            margin-bottom: 35px;
            padding: 0 20px;
            line-height: 2;
        }
        .banner-area {
            position: relative;
            justify-content: center;
            min-height: 100vh;
            color: #fff;
            text-align: center;
        }
        .banner-area .banner-img {
            background-image: url(https://i.postimg.cc/mDHBPC8y/2.jpg);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            z-index: -1;
        }
        .banner-area .banner-img:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            opacity: .8;
        }
        .banner-area h1 {
            margin-bottom: 15px;
            font-size: 65px;
            font-family: merienda;
        }
        .banner-area h3 {
            margin-bottom: 40px;
            font-size: 25px;
        }
        .banner-area a.banner-btn {
            padding: 15px 35px;
            background: crimson;
            border-radius: 50px;
            text-transform: uppercase;
        }
        @media (max-width:800px) {
            .banner-area {
                min-height: 600px;
            }
            .banner-area h1 {
                font-size: 32px;
            }
            .banner-area h3 {
                font-size: 20px;
            }
            .banner-area a.banner-btn {
                padding: 15px 40px;
            }
        }
        /*about area*/

        ul.about-content {
            width: 100%;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .about-content li {
            padding: 20px;
            height: 290px;
            background-clip: content-box;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center;
        }
        .about-left {
            flex-basis: 40%;
            background-image: url(https://i.postimg.cc/gJPBKhGD/1.jpg);
        }
        .about-right {
            flex-basis: 60%;
        }
        .about-area p {
            max-width: 800px;
            margin-bottom: 35px;
            line-height: 1.5;
            text-align: left;
            padding-left: 0;
        }
        .section-title {
            text-transform: uppercase;
            font-size: 50px;
            margin-bottom: 5%;
        }
        .about-right h2 {
            margin-bottom: 3%;
        }
        .about-btn {
            padding: 15px 35px;
            background: crimson;
            border-radius: 50px;
            text-transform: uppercase;
            color: #fff;
        }
        @media (max-width: 1000px) {
            .about-left, .about-right {
                flex-basis: 100%;
            }
            .about-content li {
                padding: 8px;
            }
        }
        /*service area*/

        #services {
            background: #ddd;
        }
        ul.services-content {
            width: 100%;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .services-content li {
            padding: 0 30px;
            flex-basis: 33%;
            text-align: center;
        }
        .services-content li i {
            font-size: 50px;
            color: crimson;
            margin-bottom: 25px;
        }
        .services-content li h4 {
            font-size: 20px;
            margin-bottom: 25px;
        }
        .services-content li p {
            margin: 0;
        }
        @media (max-width:1000px) {
            .services-content li {
                flex-basis: 100%;
                margin-bottom: 65px;
            }
            .services-content li:last-child {
                margin-bottom: 0;
            }
            .services-content li p {
                padding: 0;
            }
        }
        /*contact area*/

        #contact {
            background: #fff;
        }
        ul.contact-content {
            width: 100%;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .contact-content li {
            padding: 0 30px;
            flex-basis: 33%;
            text-align: center;
        }
        .contact-content li i {
            font-size: 50px;
            color: crimson;
            margin-bottom: 25px;
        }
        .contact-content li p {
            margin: 0;
        }
        @media (max-width: 1000px) {
            .contact-content li {
                flex-basis: 100%;
                margin-bottom: 65px;
            }
            .contact-content li:last-child {
                margin-bottom: 0;
            }
            .contact-content li p {
                padding: 0;
            }
        }
        /*footer*/

        footer {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #fff;
            background-color: #000;
            padding: 60px 0;
        }
        .container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: #fff;
        }
        .lead { font-family: 'Quicksand'; }
        .header-bar {
            position: relative;
            width: 50%;
            min-width: 100%;
            height: 50px;
            border: 10px solid transparent;
            border-top: 10px solid #fffa;
            border-left: 10px solid #fffa;
            box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.25) inset;
        }
        .header-bar::after {
            content: '';
            position: absolute;
            top: -10px;
            right: -10px;
            width: 30%;
            height: 49px;
            border: 10px solid transparent;
            border-bottom: 10px solid #fffa;
            border-right: 10px solid #fffa;
            transition: 0.3s linear all;
        }
        .header-bar > .logo {
            position: absolute;
            top: calc(50% - 20px);
            left: 10px;
            transform: translateY(-50%);
            color: #fffc;
            font-family: 'Parisienne', cursive;
            cursor: default;
            user-select: none;
        }
        .slider-menu {
            position: absolute;
            top: 0;
            right: 0;
            display: flex;
            list-style-type: none;
            margin: 0;
            padding: 0;
            z-index: 1;
        }
        .slider-menu > li {
            display: inline-flex;
            padding: 14px;
            margin-left: 2px;
            font-family: 'Quicksand', sans-serif;
            color: #fff;
            cursor: pointer;
            transition: 0.3s linear all;
            user-select: none;
        }
        .slider-menu > li:hover {
            color: #faa;
            box-shadow: 0 50px 5px rgba(0, 0, 0, 0.15) inset;
        }
        .aeu-signature {
            position: fixed;
            top: 5px;
            left: 50%;
            transform: translate(-50%);
            font-size: 15px;
            line-height: 30px;
            background-color: #fff;
            padding: 5px 10px;
            border-radius: 25px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }
        h2{
            margin-top: 25px;
        }

        html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}.text-sm{background-color:transparent;margin-right:30px}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}

    </style>
</head>
<body>
	<header>
		<!-- <nav>
            <div class="container"> -->
                <div class="header-bar">
                    <h2 class = "logo">TODO</h2>
                    <ul class="slider-menu">    
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </ul>
                </div>
            <!-- </div>
		</nav> -->
	</header>
	<section class="banner-area">
		<div class="banner-img"></div>
		<h1>Schedual Website</h1>
		<h3>Responsive Web Design</h3><a class="banner-btn" href="#">Contact us</a>
	</section>
</body>
</html>
