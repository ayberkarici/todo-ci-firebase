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
    }, 500 , function () {
        dropdown = true
        
    } );
    
});


$(document).ready(function () {

    if($('.task-doneBtn')) {
        $('.task-doneBtn').click(function () {
            
            $('.task-container').toggleClass('task-doneBackground');
            $('.task-body').toggleClass('task-body-line');

        })
    }

    $('#closeAddTaskBtn').click(function () {
        $('.inclusive-addTask').animate({
            top: '-15px',
            opacity:0,
        }, 500, function () {
            $('.inclusive-addTask').css('display', 'none');
            $('body').css('overflow-y', 'scroll');
        });
    });

    $('.openAddTaskBtn').click(function () {
        
        $('.addTask').offset({top: $(window).scrollTop() + 40});

        $('.inclusive-addTask').css('display', 'flex');
        $('.inclusive-addTask').animate({
            top: '15px',
            opacity:1,
        }, 500, function () {$('body').css('overflow', 'hidden')});
        
    });

})


$(document).ready(function() {
    $('body').css('overflow', 'hidden');
});

$(window).ready(function() {
    $('.preloader-wrapper').animate({
        top: '15px',
        opacity:0,
    }, 500, function () {
        $('.preloader-wrapper').css('display', 'none');
        $('body').css('overflow-y', 'scroll');
    });
});


  


