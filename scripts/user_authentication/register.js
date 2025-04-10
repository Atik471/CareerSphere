const registerValidation = () => {
    const name = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirm_password").value.trim();
  
    const nameError = document.getElementById("username-error");
    const emailError = document.getElementById("email-error");
    const passwordError = document.getElementById("password-error");
    const confirmPasswordError = document.getElementById("confirm-password-error");
  
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    let isValid = true;
  
    if (name === "") {
      nameError.innerText = "Name must not be empty";
      isValid = false;
    } else {
      nameError.innerText = "";
    }
  
    if (email === "") {
      emailError.innerText = "Email must not be empty";
      isValid = false;
    } else if (!emailRegex.test(email)) {
      emailError.innerText = "Invalid email format";
      isValid = false;
    } else {
      emailError.innerText = "";
    }
  
    if (password === "") {
      passwordError.innerText = "Password must not be empty";
      isValid = false;
    } else if (password.length < 6) {
      passwordError.innerText = "Password must be at least 6 characters";
      isValid = false;
    } else {
      passwordError.innerText = "";
    }
  
    if (confirmPassword === "") {
      confirmPasswordError.innerText = "Please confirm your password";
      isValid = false;
    } else if (password !== confirmPassword) {
      confirmPasswordError.innerText = "Passwords do not match";
      isValid = false;
    } else {
      confirmPasswordError.innerText = "";
    }
  
    return isValid;
  };
  
  const registerForm = document.getElementById("register-form");
  
  registerForm.addEventListener("submit", (event) => {
    event.preventDefault();
  
    if (registerValidation()) {
      return true
    } else {
      console.log("Registration validation failed.");
    }
  });
  