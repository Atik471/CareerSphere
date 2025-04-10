const forgotValidation = () => {
    const email = document.getElementById("email").value.trim();
    const emailError = document.getElementById("email-error");
  
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    let isValid = true;
  
    if (email === "") {
      emailError.innerText = "Email must not be empty";
      isValid = false;
    } else if (!emailRegex.test(email)) {
      emailError.innerText = "Invalid email format";
      isValid = false;
    } else {
      emailError.innerText = "";
    }
  
    return isValid;
  };
  
  const forgottenForm = document.getElementById("forgotten-form");
  
  forgottenForm.addEventListener("submit", (event) => {
    event.preventDefault();
  
    if (forgotValidation()) {
      return true
    } else {
      console.log("Email validation failed.");
    }
  });
  