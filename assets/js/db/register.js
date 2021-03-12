$(document).ready(function (){
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
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

  
    $('#registerBtn').click(function (event) {
        event.preventDefault();

        let email = $('#email').val();
        let password = $('#password').val();

        firebase.auth().createUserWithEmailAndPassword(email, password)
            .then(function () {
                
                firebase.auth().signInWithEmailAndPassword(email, password)
                .then(function () {
                    window.location.href = "tasks"; 
                })
                
            })
            .catch(function(error) {
                var errorCode = error.code;
                var errorMessage = error.message;

                alert("Error no: "+ errorCode + ". Error message: " + errorMessage );

                reload();
        });
    })

})