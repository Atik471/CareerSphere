
const loginValidation = () => {
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const emailError = document.getElementById("email-error");
    const passwordError = document.getElementById("password-error");
      
    if (email === "") {
      emailError.innerText = "Email must not be empty";
      return false;
    }
    emailError.innerText = "";
    
    if (password === "") {
      passwordError.innerText = "Password must not be empty";
      return false;
    }
    passwordError.innerText = "";

    return true;
  };
  

const loginForm = document.getElementById("login-form");

loginForm.addEventListener("submit", (event) => {
  // event.preventDefault();

  if (loginValidation()) {
    return true;
  } else {
    console.log("Validation failed.");
    return false;
  }
});