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

    let current_user = "";      

    firebase.auth().onAuthStateChanged(function (user) {
        if (user) {

            current_user = user.uid; 
            console.log(current_user);

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

            });

            
            /*
            $('#sendToFirebase').click(function (){
                let desc = $('#description').val();
                
                firebase.database().ref().child("users").child(current_user).child("todos").push(
                    {
                        description : desc,
                        completed   : false
                    }
                );

                $('#description').val(''); 
                                
            });
            */
            
            // ToDo eklemek için kayıtların yani statelerin değiştiğin farkına varıyoruz

            let todoref =firebase.database().ref().child("users/" + current_user).child("todos");

            todoref.on("value", function (snapshot) {
                
                const $parent = $('.tasks');

                // Task container
                //$parent.html('');

                let $k = 1;

                /* 
                snapshot.forEach(function (item) {

                    // New task adding will come here

                    let completed = item.val().completed == true ? "checked" : "";
                    let done_class = item.val().completed == true ? " done " : "";
                    let done_class_bg = item.val().completed == true ? " done-bg" + $k  : "";

                    let description_elem = "<td class='"+ done_class + done_class_bg +" animate'>" + item.val().description + "</td>";
                    let completed_elem = '<td class="text-center" ><input data-key = '+ item.key +' type="checkbox" class="switchery-plugin"' + completed + '/></td>';
                    let removeBtn_elem = '<td class="text-center" ><button data-key = '+ item.key +' class="btn btn-danger btn-block removeBtn btn-sm w100">Sil</button> </td>';
                    let tr_elem = "<tr>" + description_elem + completed_elem + removeBtn_elem + "</tr>"

                    $parent.append(tr_elem);

                    if($k == 5) {
                        $k = 1;
                    } else {
                        $k++
                    }
                });
                */
                
                /*
                $("body").on("click", ".removeBtn", function () {

                    // remove task will come here

                    let $key = $(this).data("key");

                    firebase.database().ref("users/" + current_user).child("todos").child($key).remove();
                    
                })
                */
                
                /*
                $("body").on("change", ".switchery-plugin", function () {

                    // Done animation will come here
                    

                    let $completed = $(this).prop("checked");

                    let $key = $(this).data("key");

                    firebase.database().ref("users/" + current_user).child("todos").child($key).child("completed").set($completed);
                    
                    
                })
                */
                
                
                
                
                
                
                
            })


        }

    });
  
    

})