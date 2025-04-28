
    function validateForm(e) {
        let fullname = document.getElementById('fullname').value;
        let email = document.getElementById('email').value;
        let message = document.getElementById('message').value;
        let error = document.getElementById('error');
        
        if (fullname == "" || email == "" || message == "") 
            {
            error.innerHTML = "Please fill in all fields!";
            return false;
        }

        if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
            error.innerHTML = "Please enter a valid email address!";
            return false;
        }
    
        let atPosition = email.indexOf('@');
        let dotPosition = email.lastIndexOf('.');
        if (dotPosition < atPosition) {
            error.innerHTML = "Please enter a valid email address!";
            return false;
        }
        
        else 
        {
            error.innerHTML = "";
            return true;
        }
    }
