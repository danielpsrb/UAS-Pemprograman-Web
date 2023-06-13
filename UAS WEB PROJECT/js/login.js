const logregBox = document.querySelector('.logreg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', () => {
    logregBox.classList.add('active');
});

loginLink.addEventListener('click' , () => {
    logregBox.classList.remove('active');
});

function show() {
    var password = document.getElementById("password");
    var icon = document.querySelector(".fas");

    if (password.type === "password") {
      password.type = "text";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    } else {
      password.type = "password";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    }
  }

    // ========== Check tipe password ===========
    if (password.type === "password") {
      password.type = "text";
    } else {
      password.type = "password";
    }