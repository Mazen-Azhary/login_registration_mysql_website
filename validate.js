let Loginform = document.getElementById("loginForm");
// console.log("test")

    if (Loginform) {
        Loginform.onsubmit = function(event) {
            event.preventDefault(); 
            
            let emailInp = document.getElementById("form2Example1").value;
            let pw = document.getElementById("form2Example2").value;
            
            if(emailInp.indexOf("@") === -1 || emailInp.indexOf(".com") === -1 || emailInp.length < 6) {
                alert("Please enter a valid email address (must contain @ and .com, minimum 6 characters)");
                return false;
            }
            
            if(pw.length < 8) {
                alert("Password must be at least 8 characters long");
                return false;
            }
            
            Loginform.submit();
        }
    }

// console.log("here")
let signUpForm = document.getElementById("signUpform");
    
    if (signUpForm) {
        signUpForm.onsubmit = function(event) {
            // console.log("here")
            event.preventDefault(); 
            
            let emailInp = document.querySelector(".signupemail").value;
            let pw1 = document.querySelector(".pw1").value;
            let pw2 = document.querySelector(".pw2").value;

            if(emailInp.indexOf("@") === -1 || emailInp.indexOf(".com") === -1 || emailInp.length < 6) {
                alert("Please enter a valid email address (must contain @ and .com, minimum 6 characters)");
                return false;
            }
            if(pw1!==pw2){
                alert("Password must match Repeat Password");
                return false;
            }
            if(pw1.length < 8) {
                alert("Password must be at least 8 characters long");
                return false;
            }

            signUpForm.submit();
        }
    }
