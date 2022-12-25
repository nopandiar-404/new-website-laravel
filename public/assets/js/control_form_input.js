const passwordInput1 = document.querySelector(".control-password-input1");
const passwordInput2 = document.querySelector(".control-password-input2");
const passwordInput3 = document.querySelector(".control-password-input3");
const eyeIcon1 = document.querySelector(".eye-icon1");
const eyeIcon2 = document.querySelector(".eye-icon2");
const eyeIcon3 = document.querySelector(".eye-icon3");

eyeIcon1.addEventListener("click", () => {
    if (passwordInput1.type == "password") {
        passwordInput1.type = "text";
        eyeIcon1.classList.remove("fa-eye");
        eyeIcon1.classList.add("fa-eye-slash");
    } else {
        passwordInput1.type = "password";
        eyeIcon1.classList.remove("fa-eye-slash");
        eyeIcon1.classList.add("fa-eye");
    }
});

eyeIcon2.addEventListener("click", () => {
    if (passwordInput2.type == "password") {
        passwordInput2.type = "text";
        eyeIcon2.classList.remove("fa-eye");
        eyeIcon2.classList.add("fa-eye-slash");
    } else {
        passwordInput2.type = "password";
        eyeIcon2.classList.remove("fa-eye-slash");
        eyeIcon2.classList.add("fa-eye");
    }
});

eyeIcon3.addEventListener("click", () => {
    if (passwordInput3.type == "password") {
        passwordInput3.type = "text";
        eyeIcon3.classList.remove("fa-eye");
        eyeIcon3.classList.add("fa-eye-slash");
    } else {
        passwordInput3.type = "password";
        eyeIcon3.classList.remove("fa-eye-slash");
        eyeIcon3.classList.add("fa-eye");
    }
});
