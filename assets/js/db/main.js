$(document).ready(function (){

    const firebaseConfig = {
        apiKey: "AIzaSyDdyyGi5JCKG7SBihDecRZVq-NgY58dub8",
        authDomain: "todo-sn10.firebaseapp.com",
        projectId: "todo-sn10",
        storageBucket: "todo-sn10.appspot.com",
        messagingSenderId: "301780473752",
        appId: "1:301780473752:web:c59d50216a799a84a37ded",
        measurementId: "G-S48Y1BBSDC"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    let necessity = ['immidiately', 'cool', 'maybe', 'meh'];
    let current_user = "";      

    firebase.auth().onAuthStateChanged(function (user) {
        if (user) {

            current_user = user.uid;
            
            $('#sendToFirebase').click(function (){
                let moodValue = $('input[name="radio"]:checked').val();            
                
                if (moodValue != undefined && $('#description').val() != "") {
    
                    let desc = $('#description').val();
                    
                    catFadeOut()
    
                    firebase.database().ref().child("users").child(current_user).child("todos").push(
                        {
                            necessity   : moodValue,
                            description : desc,
                            completed   : false
                        }
                    ).then( function (){
    
                        $('#description').val(''); 
    
                        $('.inclusive-addTask').animate({
                            top: '-15px',
                            opacity:0,
                        }, 500, function () {
                            $('.inclusive-addTask').css('display', 'none');
                            $('body').css('overflow-y', 'scroll');
                        });

                        catFadeOut();

                        /**
                         * info animasyonu card
                         */


                        showinfo('Bravo! New task added.');
                        


                    });
                
                } else if (moodValue == undefined && $('#description').val() != "") {
                    /**
                     * Please choose a mood, it's easy 
                     */
                     showinfo("Please choose a mood, it's easy")
                    
                    } else if (moodValue != undefined && $('#description').val() == "") {
                        /**
                         * Please write something, it's okay 
                         */
                    showinfo("Please write something, it's okay")
                    
                } else {
                    /**
                     * Write me a task!
                     */
                    showinfo("Write me a task! Please..")
                    
                }

            });
            
            
            
            
            // ToDo eklendiğinde, kayıtların yani statelerin değiştiğin farkına varıyoruz

            let todoref =firebase.database().ref().child("users/" + current_user).child("todos");

            todoref.on("value", function (snapshot) {

                catFadeOut();
                        
                const $parent = $('.tasks');

                // Task container
                $parent.html('');
                
                snapshot.forEach(function (item) {

                    catFadeOut();
                    // Background color change
                    let necessity_color = ['red', 'green', 'blue', 'gray'];


                    let done_class_bg = item.val().completed == true ? " task-doneBackground "  : "";
                    let valueBtn = item.val().completed == true ? "done"  : "process";

                    let card = `
                    <article class="task-container ${done_class_bg}" >
                        <div class="task-head">
                            <div class="task-type ${necessity_color[item.val().necessity]}">${necessity[item.val().necessity]}</div>
                            <div>
                                <button type="button" class="task-deleteBtn" data-key="${item.key}">delete</button>
                            </div>
                        </div>
                        <div class="task-body">${item.val().description}</div>
                        <div class="task-donediv">
                            <button value="${valueBtn}" type="button" class="task-doneBtn" data-key="${item.key}"><i class="fas fa-thumbs-up"></i></button>
                        </div>
                    </article>
                    `;
                    
                    $parent.append(card);

                });

                
                
                
                
                
            });     
            
            $("body").on("click", ".task-deleteBtn", function () {

                let currentdate = getDate();

            
                let $key = $(this).data("key");
                let deletedTaskRef = firebase.database().ref('users/' + current_user + '/todos');
                
                deletedTaskRef.on('value', (snapshot) => {
                    const dataDesc = snapshot.child($key).val().description;
                    const dataMood = snapshot.child($key).val().necessity;
                    const dataSuccess = snapshot.child($key).val().completed;

                    firebase.database().ref('users/' + current_user + '/deleted').child($key).set({
                        description: dataDesc,
                        necessity: necessity[dataMood],
                        mode : 'deleted',
                        success : dataSuccess,
                        delete_time : currentdate
                    }).then(function () {

                        firebase.database().ref("users/" + current_user).child("todos").child($key).remove();

                        showinfo("Deleted! It's gone dude.");

                    });

                });

            })
            
            
            $("body").on("click", ".task-doneBtn" , function () {
                
                let $key = $(this).data("key");

                if ($(this).attr("value") == 'process') {
                    
                    firebase.database().ref("users/" + current_user).child("todos").child($key).child("completed").set(true);
                    
                    showinfo('Well done! Keep going!');

                } else if ($(this).attr("value") == 'done') {
                    
                    firebase.database().ref("users/" + current_user).child("todos").child($key).child("completed").set(false);
                    
                    showinfo("Never mind, let's chill..");

                }

            })
            
            function catFadeOut() {

                $('.preloader-wrapper-task').animate({
                    top: '15px',
                    opacity:0,
                }, 500, function () {
                    $('.preloader-wrapper-task').css('display', 'none');
                });

            }
                        
            /**
             *  Logout process
             */

            $('#logout').click(function () {
            
                firebase.auth().signOut()
                    .then(function () {
                        window.location.href = 'home';
                    })
                
            });

            $('#logout2').click(function () {
                
                firebase.auth().signOut()
                    .then(function () {
                        window.location.href = 'home';
                    })

            })

            function getDate() {
                let currentdate = new Date(); 
                let datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds()

                return datetime;
            }

            function showinfo(text) {
                
                if($('.info').style.display == "flex") {

                    $('.infoDiv').html(text)

                    setTimeout(() => {
                            
                        $('.infoDiv').animate({
                            top: '15px',
                            opacity:0,
                        }, 500, function () {
                            $('.info').css('display', 'none');
                        });
                        
                    }, 2500);

                } else {
                    $('.info').css('display', 'flex');
                    
                    $('.infoDiv').html(text)
    
                    $('.infoDiv').animate({
                        top: '-15px',
                        opacity:1,
                    }, 500, function () {
                        
                        setTimeout(() => {
                            
                            $('.infoDiv').animate({
                                top: '15px',
                                opacity:0,
                            }, 500, function () {
                                $('.info').css('display', 'none');
                            });
                            
                        }, 2500);
    
                    });

                }

            }

        }

    });
  
    

})