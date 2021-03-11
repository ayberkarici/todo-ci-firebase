<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
    <title>ToDo with Codeigniter 3</title>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <div>
                DO-FOR-U
            </div> 
            <div class="navbar-sub">
                ( a simple to do app )
            </div>
        </nav>
        <div class="swg-wave">
            <div class="swg1">
                <svg viewBox="0 0 1360 268" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(36, 36, 92, 1)" d="M 0 0 C 171.5 0 171.5 100 343 100 L 343 100 L 343 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(36, 36, 92, 1)" d="M 342 100 C 541 100 541 24 740 24 L 740 24 L 740 0 L 342 0 Z" stroke-width="0"></path> <path fill="rgba(36, 36, 92, 1)" d="M 739 24 C 907 24 907 123 1075 123 L 1075 123 L 1075 0 L 739 0 Z" stroke-width="0"></path><path fill="rgba(36, 36, 92, 1)" d="M 1074 123 C 1217 123 1217 57 1360 57 L 1360 57 L 1360 0 L 1074 0 Z" stroke-width="0"></path></svg>
            </div>
            <div class="swg2">
                <svg viewBox="0 0 1360 279" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(36, 36, 92, 1)" d="M 0 0 L -2 264 L -2 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(36, 36, 92, 1)" d="M -3 264 L 1360 57 L 1360 0 L -3 0 Z" stroke-width="0"></path> </svg>
            </div>
        </div>
        <div class="main-container">
            <div class="wrapper">
                <div class="line">
                    <span>It is not in the stars to hold our destiny</span>
                </div>
                <div class="line">
                    <span>but in ourselves.</span>
                </div>
                <div class="line" style="color: #b5bcc2; transform: translateY(5px);">
                    <span style="font-size: 16px;">- Shakespeare</span>
                </div>
            </div>
            <div class="loginBtn">
                <div class="loginBtn-container">
                    <a href="<?php echo base_url('login'); ?>">
                        <div class="startBtn">
                            START!
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="swg-wave-bottom swg3">
            <svg viewBox="0 0 1360 279" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgb(255, 255, 255)" d="M 0 0 L -2 264 L -2 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgb(255, 255, 255)" d="M -3 264 L 1360 57 L 1360 0 L -3 0 Z" stroke-width="0"></path> </svg>
        </div>

        <div class="white-area">

        </div>
        <div class="swg-wave-bottom swg4">
            <svg viewBox="0 0 1360 279" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(36, 36, 92, 1)" d="M 0 0 L -2 264 L -2 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(36, 36, 92, 1)" d="M -3 264 L 1360 57 L 1360 0 L -3 0 Z" stroke-width="0"></path> </svg>
        </div>

        <footer class="footer">
            <div class="footer-name">
                /> by Ayberk Arıcı
            </div>
            <div class="footer-div">
                <a href="https://instagram.com/ayberkariciconfidential" target="_blank">instagram</a> 
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js" integrity="sha512-1dalHDkG9EtcOmCnoCjiwQ/HEB5SDNqw8d4G2MKoNwjiwMNeBAkudsBCmSlMnXdsH8Bm0mOd3tl/6nL5y0bMaQ==" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/landing.js'); ?>"></script>
</body>
</html>