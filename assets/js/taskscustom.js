const dropdownBtn = document.querySelector('.dropBtn');
const dropdownMenu = document.querySelector('.dropdownList');
const toggleupMenu = document.querySelector('.toggleup-menu');

var dropdown = false;

toggleupMenu.addEventListener('click', function () {
    if(dropdown) {

        document.body.classList.toggle('overflow-hidden');
        $('.dropdownList').animate({
            top: '-15px',
            opacity:0,
        }, 500 , function () {
            dropdownMenu.classList.remove('open');
            toggleupMenu.classList.remove('blur');
            document.body.classList.remove('overflow-hidden');        
        });
        dropdown = false;
    }
});


dropdownBtn.addEventListener('click', function () {

    dropdownMenu.classList.toggle('open');
    toggleupMenu.classList.toggle('blur');
    document.body.classList.toggle('overflow-hidden');
    $('.dropdownList').animate({
        top: '15px',
        opacity:1,
    }, 500 , function () {dropdown = true} );
    
});


const doneBtn = document.querySelector('.task-doneBtn');
const taskContainer = document.querySelector('.task-container');
const task = document.querySelector('.task-body');

doneBtn.addEventListener('click', ()=> {
    taskContainer.classList.toggle('task-doneBackground');
    task.classList.toggle('task-body-line');
});


$(document).ready(function () {
    $('.radio').on('change', function (r) {
        var radioValue = r.target.value;
        // burdan değeri al
        //foo(radioValue)
    })

    $('#closeAddTaskBtn').click(function () {
        $('.inclusive-addTask').animate({
            top: '-15px',
            opacity:0,
        }, 500, function () {
            $('.inclusive-addTask').css('display', 'none');
        });
        $('body').css('overflow-y', 'scroll');
    });

    $('.openAddTaskBtn').click(function () {
        
        console.log($(window).scrollTop() + "px");
        $('.addTask').offset({top: $(window).scrollTop() + 40});

        $('.inclusive-addTask').css('display', 'flex');
        $('.inclusive-addTask').animate({
            top: '15px',
            opacity:1,
        });
        $('body').css('overflow', 'hidden');
    });

})



  


