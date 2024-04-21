function validateForm() {
  let isValid = true;
  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");
  const confirmPasswordInput = document.getElementById("confirmPassword");

  document.getElementById("nameError").textContent = "";
  document.getElementById("emailError").textContent = "";
  document.getElementById("passwordError").textContent = "";
  document.getElementById("confirmPasswordError").textContent = "";

  if (nameInput.value.trim() === "") {
    document.getElementById("nameError").textContent =
      "Please enter your name.";
    isValid = false;
  }
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(emailInput.value.trim())) {
    document.getElementById("emailError").textContent =
      "Please enter a valid email address.";
    isValid = false;
  }
  if (passwordInput.value.length < 6) {
    document.getElementById("passwordError").textContent =
      "Password must be at least 6 characters long.";
    isValid = false;
  }
  if (confirmPasswordInput.value !== passwordInput.value) {
    document.getElementById("confirmPasswordError").textContent =
      "Passwords do not match.";
    isValid = false;
  }
  if (isValid) {
    document.write("Form sucessfullysubmitted");
  }
  return isValid;
}
