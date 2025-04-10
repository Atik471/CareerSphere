
const togglePasswordVisibility = () => {
  const passwordField = document.querySelector("#password");
  const toggleButton = document.querySelector("#toggle_icon");
  const confirmPasswordField = document.querySelector("#confirm_password");
  const confirmToggleIcon = document.querySelector("#confirm_toggle_icon");

  if (passwordField.type === "password") {
    passwordField.type = "text";
    if(confirmPasswordField) {
      confirmPasswordField.type = "text";
      confirmToggleIcon.src = "../../assets/img/eye_close.png";
    }
    toggleButton.src = "../../assets/img/eye_close.png";
  } else {
    passwordField.type = "password";
    if(confirmPasswordField) {
      confirmPasswordField.type = "password";
      confirmToggleIcon.src = "../../assets/img/eye_show.png";
    }
    toggleButton.src = "../../assets/img/eye_show.png";
  }
}