const dropdownBtn = document.querySelector('.dropBtn');
const dropdownMenu = document.querySelector('.dropdownList');
const toggleupMenu = document.querySelector('.toggleup-menu');



toggleupMenu.addEventListener('click', function () {

    dropdownMenu.classList.remove('open');
    toggleupMenu.classList.remove('blur');
    document.body.classList.remove('overflow-hidden');
    
})


dropdownBtn.addEventListener('click', function () {

    dropdownMenu.classList.toggle('open');
    toggleupMenu.classList.toggle('blur');
    document.body.classList.toggle('overflow-hidden');
    
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
})

  


