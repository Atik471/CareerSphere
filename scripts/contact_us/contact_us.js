
    function validateForm() {
        let fullname = document.getElementById('fullname').value;
        let email = document.getElementById('email').value;
        let message = document.getElementById('message').value;
        let error = document.getElementById('error');
        
        if (fullname == "" || email == "" || message == "") 
            {
            error.innerHTML = "Please fill in all fields!";
            return false;
        }
        
        else 
        {
            error.innerHTML = "";
            return true;
        }
    }
