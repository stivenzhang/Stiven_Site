const registration_button = document.getElementById("registration")
registration_button.addEventListener("click", () => {
    const path = "php/registration.php"
    const redirect = "login.php"
    requests(path, redirect)
})
