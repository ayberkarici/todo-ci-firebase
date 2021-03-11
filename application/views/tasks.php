<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/tasks.css'); ?>">
    <title>Tasks</title>
</head>
<body>
<nav class="nav">
    <div class="container">
        <div class="nav-content">
            <div class="logo">DO-FOR-U</div>
            <div class="route">
                
                <a href="#"><div>Tasks</div></a>
                <a href="#"><div>Process</div></a>
                <a href="<?php echo base_url(); ?>"><div class="logout-color">Log out</div></a>
                
            </div>
            <div class="route-dropdown">
                <div class="dropBtn"><i class="fas fa-bars"></i></div>            
                <div class="dropdownList">

                    <a href="#"><div>Tasks</div></a>
                    <a href="#"><div>Process</div></a>
                    <a href="<?php echo base_url(); ?>"><div class="logout-color">Log out</div></a>

                </div>
            </div>
        </div>
    </div>
</nav>

<div class="toggleup-menu">
    <nav class="task-banner">
        <div>tasks</div>
    </nav>
    
    <article class="main-container">
        <div class="container">
            <div class="task-container">
                <div class="task-head">
                    <div class="task-type">necessary, cool, maybe, immidiately</div>
                    <div>
                        <button type="button" class="task-deleteBtn">delete</button>
                    </div>
                </div>
                <div class="task-body">Task - Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>
                <div class="task-donediv">
                    <button type="button" class="task-doneBtn"><i class="fas fa-thumbs-up"></i></button>
                </div>
            </div>
        </div>
    </article>
    
    <footer class="footer">
        <div class="container">
            <div class="contact">
                <div> /> by ayberk arıcı</div>
                <div class="social"><a href="https://instagram.com/ayberkariciconfidential" target="_blank">instagram</a></div>
            </div>
        </div>
    </footer>
</div>

<script src="<?php echo base_url('assets/js/all.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/taskscustom.js') ?>"></script>


</body>
</html>