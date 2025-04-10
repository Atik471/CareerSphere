const resetValidation = () => {
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirm_password").value.trim();
    const passwordError = document.getElementById("password-error");
    const confirmPasswordError = document.getElementById("confirm-password-error");
  
    let isValid = true;

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
  
  const resetForm = document.getElementById("reset-form");
  
  resetForm.addEventListener("submit", (event) => {
    event.preventDefault();
  
    if (resetValidation()) {
      return true
    } else {
      console.log("Form validation failed.");
    }
  });
  