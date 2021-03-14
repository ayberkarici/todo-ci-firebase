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

<div class="preloader-wrapper">
    <div class="preloader">
        <img src="assets/images/preloader.gif" alt="cat">
    </div>
</div>

<!------------------- info div --------------------->
<!------------------- info div --------------------->

<div class="info">
    <div class="infoDiv">
        
    </div>
</div>


<nav class="nav">
    <div class="container">
        <div class="nav-content">
            <div class="logo">DO-FOR-U</div>
            <div class="route">
                
                <a href="#"><div>Tasks</div></a>
                <a href="<?php echo base_url('process'); ?>"><div>Process</div></a>
                <a id="logout"><div class="logout-color" >Log out</div></a>
                
            </div>
            <div class="route-dropdown">
                <div class="dropBtn"><i class="fas fa-bars"></i></div>            
                <div class="dropdownList">

                    <a href="#"><div>Tasks</div></a>
                    <a href="<?php echo base_url('process'); ?>"><div>Process</div></a>
                    <a id="logout2"><div class="logout-color" >Log out</div></a>

                </div>
            </div>
        </div>
    </div>
</nav>

<div class="toggleup-menu">
    <section class="inclusive-addTask">
        <div class="container-addtask">
            <div class="addTask" id="addTask">
                <div class="closeAddTaskBtn">
                    <button type="button" id="closeAddTaskBtn"><i class="fas fa-times"></i></button>
                </div>
                <div class="subaddtask">
                    <span>New Task</span>
                    <div class="taskinput">
                        Necessity
                        <!--
                        <div>
                            <input type="text" placeholder="necessary, cool, maybe, immediately, meh etc.">
                        </div>
        -->
                        <div class="radio">
                            <div class="checkmarkDiv">
                                <label class="containera">
                                    <input type="radio" name="radio" value="0">
                                    <span class="checkmark red"></span>
                                </label>
                                <div class="checkmarkName red" >
                                    <i class="far fa-grimace "></i>
                                </div>
                            </div>    
                            <div class="checkmarkDiv">
                                <label class="containera">
                                    <input type="radio" name="radio" value="1">
                                    <span class="checkmark green"></span>
                                </label>
                                <div class="checkmarkName green">
                                    <i class="far fa-smile "></i>
                                </div>
                            </div>    
                            <div class="checkmarkDiv">
                                <label class="containera">
                                    <input type="radio" name="radio" value="2">
                                    <span class="checkmark blue"></span>
                                </label>
                                <div class="checkmarkName blue">
                                    <i class="far fa-grin-tongue "></i>
                                </div>
                            </div>    
                            <div class="checkmarkDiv">
                                <label class="containera">
                                    <input type="radio" name="radio" value="3">
                                    <span class="checkmark gray"></span>
                                </label>
                                <div class="checkmarkName gray">
                                    <i class="far fa-meh-blank "></i>
                                </div>
                            </div>    
        
                            
                        </div>
                    </div>
                    <div class="tasktext margin-bottom-100">
                        Task Name
                        <div class="radio">
                            <input type="text" id="description" placeholder="Tell me, i'll write it down">
                        </div>
                    </div>
                    <!-- addTaskButton ekle, responsive yap -->
                    <div class="addTaskBtn">
                        <button type="button" id="sendToFirebase">Add Task</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="task-banner">
        <div>tasks</div>
        <div><button type="button" class="openAddTaskBtn"><span><i class="fas fa-plus"></i></span></button></div>
    </nav>
    
    <article class="main-container">
        <div class="container">
            <div class="tasks">

                <div class="preloader-wrapper-task">
                    <div class="preloader">
                        <div class="preloader-image"><img src="assets/images/preloader.gif" alt="cat"></div>
                        <div>Add some task</div>
                    </div>
                </div>
<!--
                <article class="task-container">
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
                </article>
-->
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Firebase connection -->

<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js"></script>

<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-analytics.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/8.2.10/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-firestore.js"></script>

<!-- Firebase connection -->


<script src="<?php echo base_url('assets/js/db/main.js'); ?>"></script>


<script src="<?php echo base_url('assets/js/all.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/taskscustom.js') ?>"></script>



</body>
</html>